@extends('layouts.app')

@section('title','Edit')

@section('menubar')
    @parent
@endsection

@section('content')
<div class="container">
    <h4>更新確認画面</h4>
    <a href="{{url('/user/auth')}}">ホームに戻る</a>
    <hr>
    <p>更新が完了しました。</p>
</div>
@endsection

@section('footer')
@endsection
