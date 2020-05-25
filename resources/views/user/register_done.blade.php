@extends('layouts.app')

@section('title','登録完了画面')

@section('menubar')
    @parent
    登録完了
    <a href="{{url('/user/auth')}}">ホームに戻る</a>
@endsection

@section('content')
        登録が完了しました。
@endsection

@section('footer')
@endsection
