@extends('layouts.app')

@section('title','Add')

@section('menubar')
    @parent
 登録完了画面
@endsection

@section('content')
  <h1>登録完了画面</h1>
  <p>以下の内容で登録しました。</p>

  <p>宿名： {{$inn->name}}</p>
  <p>宿の郵便番号： {{$inn->postal}}</p>
  <p>宿の住所： {{$inn->address}}</p>
  <p>チェックイン時間： {{$inn->checkintime}}</p>
  <p>チェックアウト時間： {{$inn->checkouttime}}</p>
  <p>分類コード： {{$inn->code}}</p>
  <p>Eメールアドレス： {{$inn->mail}}</p>
@endsection

@section('footer')
@endsection
