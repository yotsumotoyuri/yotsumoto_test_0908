@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="w1600">
    <div class="top pd50">
        <h2 class="top__ttl center">contact</h2>
    </div>

    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item form__label--after">お名前</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="first_name" placeholder="例:山田">
                    <input type="text" name="last_name" placeholder="例:太郎">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item form__label--after">性別</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label><input type="radio" checked="checked" name="gender">男性</label>
                    <label><input type="radio" name="gender">女性</label>
                    <label><input type="radio" name="gender">その他</label>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item form__label--after">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <input type="text" name="email" placeholder="例:test@example.com">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item form__label--after">電話番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <input type="tel" name="tell" placeholder="080">-
                    <input type="tel"  name="tell" placeholder="1234">-
                    <input type="tel"  name="tell" placeholder="5678">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item form__label--after">住所</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item">建物</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--txt">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item form__label--after">お問い合わせの種類</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--select">
                    <select id="" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}" disabled selected style="display:none;">選択してください</option>
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-ttl">
                <span class="form__label--item form__label--after">お問い合わせ内容</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" cols="30" rows="3" id="" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>
        </div>
        <div class="pd50"></div>
        <div class="form__button center">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
    </div>
@endsection

