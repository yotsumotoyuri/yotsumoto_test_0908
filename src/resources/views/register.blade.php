@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('button')
    <div class="header__button">
        <button class="header_button-submit" type="submit">register</button>
    </div>
@endsection

@section('content')
    <div class="form__color">
        <div class="w1600">
            <div class="top pd50">
                <h2 class="top__ttl center">register</h2>
            </div>
            <form class="form">
                <div class="form__block-bac pd50">
                    <div class="form__block pd50">
                        <div class="form__block-ttl">
                            <span class="form__block-ttl">お名前</span>
                        </div>
                        <div class="form__block-content">
                            <input type="text">
                        </div>
                    </div>
                    <div class="form__block pd50">
                        <div class="form__block-ttl">
                            <span class="form__block-ttl">メールアドレス</span>
                        </div>
                        <div class="form__block-content">
                            <input type="text">
                        </div>
                    </div>
                    <div class="form__block pd50">
                        <div class="form__block-ttl">
                            <span class="form__block-ttl">パスワード</span>
                        </div>
                        <div class="form__block-content">
                            <input type="text">
                        </div>
                    </div>
                    <div class="form__button center pd50">
                        <button class="form__button-submit" type="submit">登録</button>
                    </div>
                </div>
            </form>
            <div class="pd50"></div>
        </div>
    </div>
@endsection