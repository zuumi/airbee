@extends('layouts.app')

@section('title','宿予約システム')

@section('menubar')
    @parent
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="/user/auth" class="nav-link active">ホーム</a></li>
        <li class="nav-item"><a href="{{url('/user/inn/show')}}" class="nav-link">宿一覧</a></li>
        <li class="nav-item"><a href="#" class="nav-link">宿予約履歴</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">会員</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/user/edit/{{$items->id}}">会員情報変更</a>
                <a class="dropdown-item" href="#">退会</a>
            </div>
        </li>
        <li class="nav-item"><a href="/user/logout" class="nav-link">ログアウト</a></li>
    </ul>
@endsection

@section('content')
    <h1 style="text-align:center; margin-top:64px;">ようこそ！エアビーへ。</h1>
@endsection

@section('footer')
@endsection
