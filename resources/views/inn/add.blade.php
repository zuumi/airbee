@extends('layouts.app')

@section('title','Add')

@section('menubar')
    @parent
    メニュー
    <a href="">会員情報を操作</a>
    <a href="">宿情報を操作</a>
@endsection

@section('content')
  <form action="{{action('AdminController@add_confirm')}}" method="post">
    @csrf
    <p>宿名：<input type="text" name="name" value="{{old('name')}}"></p>
    <p>宿の郵便番号：<input type="text" name="postal" value="{{old('postal')}}"></p>
    <p>宿の住所：<input type="text" name="address" value="{{old('address')}}"></p>
    <p>チェックイン時間：<input type="time" name="checkintime" value="{{old('checkintime')}}"></p>
    <p>チェックアウト時間：<input type="time" name="checkouttime" value="{{old('checkouttime')}}"></p>
    <p>分類コード：<input type="number" name="code" value="{{old('code')}}"></p>
    <p>Eメールアドレス：<input type="email" name="mail" value="{{old('mail')}}"></p>
    <p><input type="submit" value="確認画面へ"></p>
  </form>
@endsection

@section('footer')
@endsection
