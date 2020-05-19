@extends('layouts.app')

@section('title','Index')

@section('menubar')
    @parent
    メニュー
    <a href="/admin/userlist">会員情報を操作</a>
    <a href="/admin/innlist">宿情報を操作</a>
    <a href="/admin/logout">ログアウト</a>
@endsection

@section('content')

@endsection

@section('footer')
@endsection
