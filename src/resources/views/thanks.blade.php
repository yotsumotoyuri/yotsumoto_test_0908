@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
    <div class="w1600">
    <div class="thanks center">
        <h2 class="thanks__ttl">お問い合わせありがとうございました</h2>
    </div>
    <div class="form__button center mg-150">
        <button class="form__button-home" type="submit">home</button>
    </div>
    </div>
@endsection