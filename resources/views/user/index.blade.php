@extends('layouts.app')

@section('title','宿予約システム')

@section('menubar')
    @parent
    会員メニュー
    <a href="{{url('/user/inn/show')}}">宿一覧</a>
    <a href="">宿予約履歴</a>
    <a href="/user/edit/{{$items->id}}">会員情報変更</a>
    <a href="">退会</a>
    <a href="/user/logout">ログアウト</a>
@endsection

@section('content')

@endsection

@section('footer')
@endsection
