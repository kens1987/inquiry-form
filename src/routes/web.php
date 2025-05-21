<?php

use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [InquiryController::class, 'register']);
Route::get('/', [InquiryController::class, 'contact']);
Route::post('/contacts/confirm', [InquiryController::class, 'confirm']);
Route::post('/thanks', [InquiryController::class, 'thanks']);
// Route::get('/thanks', [InquiryController::class, 'thanks']);

// Route::middleware('auth')->group(function(){
//     Route::get('/', [InquiryController::class, 'admin']);
// });
