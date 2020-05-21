@extends('layouts.app')

@section('title','DELETE')

@section('menubar')
    @parent
    完全に削除されました。
    <a style="text-decoration:none; border:1px black solid;" href="{{ url('/inn/show') }}">ホームに戻る</a>
@endsection

@section('content')

@endsection

@section('footer')
@endsection
