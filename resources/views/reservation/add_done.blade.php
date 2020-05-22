@extends('layouts.app')

@section('title','予約完了画面')

@section('menubar')
    @parent
    予約完了画面
@endsection

@section('content')
<p>予約が完了しました。</p>
<a href="{{url('/user/inn/show')}}">ホームへ</a>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
