@extends('layouts.app')

@section('title','新宿トラベル')

@section('menubar')
    @parent
    <a href="url('')">会員登録する</a>
@endsection

@section('content')
<form action="/user/auth" method="post">
  <table>
    @csrf
    <tr><td>email:</td><td><input type="text" name="email" placeholder='メールアドレス入力'></td></tr>
    <tr><td>pass:</td><td><input type="password" name="password" placeholder='パスワードを入力'></td></tr>
    <tr>
        <td></td><td></td><td><input type="submit" value="ログイン"></td>
    </tr>
  </table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
