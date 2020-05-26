@extends('layouts.app')
<style media="screen">
    table tr td a{
        text-decoration: none;
        border: 1px solid black;
        padding: 5px 7px;
    }
</style>
@section('title','Index')

@section('menubar')
    @parent
    <div class="menus">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a href="{{ url('/admin/userlist') }}" class="nav-link">会員一覧</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">宿情報を操作</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/inn/show') }}">宿一覧</a>
                    <a class="dropdown-item" href="{{ url('/inn/add') }}">宿登録</a>
                </div>
            </li>
            <li class="nav-item"><a id="logout" href="/admin/logout" class="nav-link">ログアウト</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <h3 style="margin-top:16px; text-align:center;">ようこそ、管理者ページへ</h3>
@endsection

@section('footer')
@endsection
