@extends('layouts.app')

@section('title','登録完了画面')

@section('menubar')

    <a href="/admin/login">管理者ログイン画面</a>
@endsection

@section('content')
  <p>以下の内容で登録しました。</p>

  <table>
      <tr><th>管理者名</th><td>{{$admin->name}}</td></tr>
      <tr><th>郵便番号</th><td>{{$admin->postal}}</td></tr>
      <tr><th>住所</th><td>{{$admin->address}}</td></tr>
      <tr><th>電話番号</th><td>{{$admin->tel}}</td></tr>
      <tr><th>Eメールアドレス</th><td>{{$admin->mails}}</td></tr>
      <tr><th>生年月日</th><td>{{$admin->birthday}}</td></tr>
      <tr><th>パスワード</th><td>{{$admin->password}}</td></tr>
  </table>

@endsection

@section('footer')
@endsection
