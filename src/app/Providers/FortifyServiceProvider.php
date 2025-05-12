<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use App\Http\Requests\LoginRequest;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::createUsersUsing(\App\Actions\Fortify\CreateNewUser::class);

        Fortify::registerView(function(){
            return view('auth.register');
        });
                Fortify::loginView(function(){
            return view('auth.login');
        });
        RateLimiter::for('login',function(Request $request){
            $email = (string) $request->email;
            return Limit::perMinute(10)->by($email . $request->ip());
        });
        Fortify::authenticateUsing(function($request){
            $loginRequest = new LoginRequest();
            $validator = Validator::make(
                $request->only('email','password'),
                $loginRequest->rules(),
                $loginRequest->messages()
                );
                if($validator->fails()){
                    throw new ValidationException($validator);
                }
                if(Auth::attempt([
                    'email' => $request->email,
                    'password' => $request->password,
                ])){
                    return Auth::user();
                }
                return null;
                // throw ValidationException::withMessages([
                //     'email' => ['メールアドレスまたはパスワードが正しくありません']
                // ]);
                // dd('失敗');
        });
        // Fortify::register(function(InquiryRequest $request){
        //     $request->validated();
        //     return User::create([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'password' => Hash::make($request->password),
        //     ]);
        // });

        // Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        // Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        // Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // RateLimiter::for('login', function (Request $request) {
        //     $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

        //     return Limit::perMinute(5)->by($throttleKey);
        // });

        // RateLimiter::for('two-factor', function (Request $request) {
        //     return Limit::perMinute(5)->by($request->session()->get('login.id'));
        // });
    }
}
