@extends('layouts.app')

@section('title','Add')

@section('menubar')
    @parent
    メニュー
    <a href="">会員情報を操作</a>
    <a href="">宿情報を操作</a>
@endsection

@section('content')
  <h1>確認画面</h1>
  <p>以下の内容に間違いがないかご確認ください。</p>

  <form action="{{action('AdminController@create')}}" method="post">
    @csrf
    <p>宿名： {{$inn->name}}</p>
    <p>宿の郵便番号： {{$inn->postal}}</p>
    <p>宿の住所： {{$inn->address}}</p>
    <p>チェックイン時間： {{$inn->checkintime}}</p>
    <p>チェックアウト時間： {{$inn->chekuouttime}}</p>
    <p>分類コード： {{$inn->code}}</p>
    <p>Eメールアドレス： {{$inn->mail}}</p>
    <p><input type="submit" value="登録する"></p>
  </form>
@endsection

@section('footer')
@endsection
