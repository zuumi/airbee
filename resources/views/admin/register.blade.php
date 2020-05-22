@extends('layouts.app')

@section('title','管理者登録ページ')

@section('menubar')

@parent
メニュー
<a href="/admin">管理者画面</a>

@endsection

@section('content')
  <form action="{{action('AdminController@register_confirm')}}" method="post">
    @csrf
    <table>
      <tr><th>管理者名</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      <tr><th>郵便番号</th><td><input type="text" name="postal" value="{{old('postal')}}"></td></tr>
      <tr><th>住所</th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
      <tr><th>電話番号</th><td><input type="text" name="tel" value="{{old('tel')}}"></td></tr>
      <tr><th>Eメール</th><td><input type="mails" name="mails" value="{{old('mails')}}"></td></tr>
      <tr><th>生年月日</th><td><input type="text" name="birthday" value="{{old('birthday')}}"></td></tr>
      <tr><th>パスワード</th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
      <tr><th>　　</th></tr>
      <tr><td></td><td><input type="submit" value="登録する"></td></tr>
    </table>
  </form>
@endsection

@section('footer')
@endsection
