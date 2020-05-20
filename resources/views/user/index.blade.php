@extends('layouts.app')

@section('title','宿予約システム')

@section('menubar')
    @parent
    <p>{{$message}}</p>
    会員メニュー
    <a href="">会員情報変更</a>
    <a href="">退会</a>
    <a href="">宿一覧</a>
    <a href="">宿予約履歴</a>
@endsection

@section('content')

@endsection

@section('footer')
@endsection
