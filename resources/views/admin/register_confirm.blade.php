@extends('layouts.app')

@section('title','登録確認画面')

@section('menubar')

@endsection

@section('content')
  <p>以下の内容に間違いがないかご確認ください。</p>

  <form action="{{action('AdminController@register_create')}}" method="post">
    @csrf
    <table>
        <tr><th>管理者名</th><td>{{$admin->name}}</td></tr>
        <tr><th>郵便番号</th><td>{{$admin->postal}}</td></tr>
        <tr><th>住所</th><td>{{$admin->address}}</td></tr>
        <tr><th>電話番号</th><td>{{$admin->tel}}</td></tr>
        <tr><th>Eメールアドレス</th><td>{{$admin->mails}}</td></tr>
        <tr><th>生年月日</th><td>{{$admin->birthday}}</td></tr>
        <tr><th>パスワード</th><td>{{$admin->password}}</td></tr>
        <tr><th></th><td></td><td><input type="submit" value="登録する"></td>
        </tr>
    </table>
  </form>
@endsection

@section('footer')
@endsection
