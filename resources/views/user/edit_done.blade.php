@extends('layouts.app')

@section('title','Edit')

@section('menubar')
    @parent
    更新確認画面
    <a href="{{url('/user/auth')}}">ホームに戻る</a>
@endsection

@section('content')
        更新が完了しました。
@endsection

@section('footer')
@endsection
