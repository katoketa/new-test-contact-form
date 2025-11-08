@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<div class="content">
    <div class="content__title">
        <h2>Contact</h2>
    </div>
    <div class="content__item">
        <form action="/confirm" method="post" class="contact-form">
            @csrf
            <table class="contact-form__inner">
                <tr class="contact-form__row">
                    <th class="contact-form__header contact-form__header--required">お名前</th>
                    <td class="contact-form__item">
                        <div class="contact-form__item-error">
                        </div>
                        <div class="contact-form__item-name">
                            <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
                            <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
                        </div>
                    </td>
                </tr>
                <tr class="contact-form__row">
                    <th class="contact-form__header contact-form__header--required">性別</th>
                    <td class="contact-form__item">
                        <div class="contact-form__item-radio">
                            <input type="radio" name="gender" id="man" value="1">
                            <label for="man">男性</label>
                            <input type="radio" name="gender" id="woman" value="2">
                            <label for="woman">女性</label>
                            <input type="radio" name="gender" id="others">
                            <label for="others">その他</label>
                        </div>
                    </td>
                </tr>
                <tr class="contact-form__row">
                    <th class="contact-form__header contact-form__header--required">メールアドレス</th>
                    <td class="contact-form__item">
                        <div class="contact-form__item-email">
                            <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                        </div>
                    </td>
                </tr>
                <tr class="contact-form__row">
                    <th class="contact-form__header contact-form__header--required">電話番号</th>
                    <td class="contact-form__item">
                        <div class="contact-form__item-tel">
                            <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}">
                            <span>-</span>
                            <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}">
                            <span>-</span>
                            <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
                        </div>
                    </td>
                </tr>
                <tr class="contact-form__row">
                    <th class="contact-form__header contact-form__header--required">住所</th>
                    <td class="contact-form__item">
                        <div class="contact-form__item-address">
                            <input type="text" name="address" placeholder="例: 東京渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                        </div>
                    </td>
                </tr>
                <tr class="contact-form__row">
                    <th class="contact-form__header">建物名</th>
                    <td class="contact-form__item">
                        <div class="contact-form__item-building">
                            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
                        </div>
                    </td>
                </tr>
                <tr class="contact-form__row">
                    <th class="contact-form__header contact-form__header--required">お問い合わせの種類</th>
                    <td class="contact-form__item">
                        <div class="contact-form__item-category">
                            <select name="category_id">
                                <option value="" selected hidden>選択してください</option>
                                @foreach($categories as $category)
                                <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </td>
                </tr>
                <tr class="contact-form__row">
                    <th class="contact-form__header contact-form__header--required">お問い合わせ内容</th>
                    <td class="contact-form__item">
                        <div class="contact-form__item-detail">
                            <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="contact-form__button">
                <button type="submit" class="contact-form__button-submit">確認画面</button>
            </div>
        </form>
    </div>
</div>
@endsection