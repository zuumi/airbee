@extends('layouts.app')

@section('title','Edit')

@section('menubar')
    @parent

@endsection

@section('content')
<div class="container">
    <h4>更新内容確認画面</h4>
    <hr>
    <table>
        <form action="/user/edit" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$id}}">
            <tr><th>性</th><td><input type="hidden" name="familyname" value="{{$familyname}}">{{$familyname}}</td></tr>
            <tr><th>名</th><td><input type="hidden" name="firstname" value="{{$firstname}}">{{$firstname}}</td></tr>
            <tr><th>郵便番号</th><td><input type="hidden" name="postal" value="{{$postal}}">{{$postal}}</td></tr>
            <tr><th>住所</th><td><input type="hidden" name="address" value="{{$address}}">{{$address}}</td></tr>
            <tr><th>電話番号</th><td><input type="hidden" name="tel" value="{{$tel}}">{{$tel}}</td></tr>
            <tr><th>Eメール</th><td><input type="hidden" name="email" value="{{$email}}">{{$email}}</td></tr>
            <tr><th>生年月日</th><td><input type="hidden" name="birthday" value="{{$birthday}}">{{$birthday}}</td></tr>
            <tr><th>パスワード</th><td><input type="hidden" name="password" value="{{$password}}">{{$password}}</td></tr>
            <tr><th></th><td><input type="submit" value="更新完了"></td></tr>
        </form>
    </table>
</div>
@endsection

@section('footer')
@endsection
