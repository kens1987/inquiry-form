<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">FashionablyLate</a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
                <form class="form" action="/contacts/confirm" method="POST">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--name-row">
                            <div class="form__input--text name-field">
                                <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}" />
                            </div>
                            <div class="form__input--text name-field">
                                <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}" />
                            </div>
                        </div>
                        <div class="form__error">
                        @error('last_name'){{$message}}@enderror
                        @error('first_name'){{$message}}@enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <!-- <div class="form__input--text"> -->
                            <label><input type="radio" name="gender" value="男性" checked />男性</label>
                            <label><input type="radio" name="gender" value="女性" />女性</label>
                            <label><input type="radio" name="gender" value="その他" />その他</label>
                        <!-- </div> -->
                        <div class="form__error">
                        @error('gender'){{$message}}@enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                        @error('email'){{$message}}@enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--tel">
                            <input type="tel" name="tel1" maxlength="5" placeholder="080" value="{{ old('tel1') }}" />
                            <span class="dash">-</span>
                            <input type="tel" name="tel2" maxlength="5" placeholder="1234" value="{{ old('tel2') }}" />
                            <span class="dash">-</span>
                            <input type="tel" name="tel3" maxlength="5" placeholder="5678" value="{{ old('tel3') }}" />
                        </div>
                            <div class="form__error">
                            @error('tel1'){{$message}}@enderror
                            @error('tel2'){{$message}}@enderror
                            @error('tel3'){{$message}}@enderror
                            </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                        </div>
                        <div class="form__error">
                            @error('address'){{$message}}@enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問合せ種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name="detail" value="{{ old('detail') }}" >
                                <option value="">選択してください</option>
                                <option value="商品のお届けについて">商品のお届けについて</option>
                                <option value="商品の交換について">商品の交換について</option>
                                <option value="商品トラブル">商品トラブル</option>
                                <option value="ショップへのお問合せ">ショップへのお問合せ</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            @error('detail'){{$message}}@enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="お問合せ内容をご記載ください" >{{ old('content') }}</textarea>
                        </div>
                            <div class="form__error">
                            @error('content'){{$message}}@enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
