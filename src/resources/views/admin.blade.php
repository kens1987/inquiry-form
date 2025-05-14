<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inquiry form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
</head>
<body>
            <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">FashionablyLate</a>
        </div>
        @if(Auth::check())
        <div class="header__nav">
            <form action="/logout" method="post">
                @csrf
                <button class="header__nav-item" type="submit">logout</button>
            </form>
        </div>
        @endif
    </header>
    <main>
                <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Admin</h2>
            </div>
    </main>
</body>
</html>