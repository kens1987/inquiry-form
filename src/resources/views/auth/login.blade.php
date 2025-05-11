<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inquiry-form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
            <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">FashionablyLate</a>
        </div>
        <div class="header__nav">
            <a class="header__nav-item" href="/register">register</a>
        </div>
    </header>
        <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Login</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-tiile">
                        <span class="form__label--item">メールアドレス</span>
                        <!-- <span class="form__label--required">必殺</span> -->
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例 zuga@email.jp" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-tiile">
                        <span class="form__label--item">パスワード</span>
                        <!-- <span class="form__label--required">必殺</span> -->
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="password" name="password" placeholder="例 abc123456789def" />
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit">ログイン</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>