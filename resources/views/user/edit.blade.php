@extends('layouts.app')

@section('title','Edit')

@section('menubar')
    @parent
    更新フォーム
@endsection

@section('content')
<table>
    <form action="/user/edit/{{$items->id}}" method="post">
        @csrf
        <tr><input type="hidden" name="id" value="{{$items->id}}"></tr>
        <tr><th>性</th><td><input type="text" name="familyname" value="{{$items->familyname}}"></td></tr>
        <tr><th>名</th><td><input type="text" name="firstname" value="{{$items->firstname}}"></td></tr>
        <tr><th>郵便番号</th><td><input type="text" name="postal" value="{{$items->postal}}"></td></tr>
        <tr><th>住所</th><td><input type="text" name="address" value="{{$items->address}}"></td></tr>
        <tr><th>電話番号</th><td><input type="text" name="tel" value="{{ $items->tel }}"></td></tr>
        <tr><th>Eメール</th><td><input type="text" name="email" value="{{$items->email}}"></td></tr>
        <tr><th>生年月日</th><td><input type="text" name="birthday" value="{{$items->birthday}}"></td></tr>
        <tr><th>パスワード</th><td><input type="text" name="password" value="{{$items->password}}"></td></tr>
        <tr><th></th><td><input type="submit" value="更新する"></td></tr>
    </form>
</table>
@endsection

@section('footer')
@endsection
