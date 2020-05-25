@extends('layouts.app')

@section('title','退会確認ページ')

@section('menubar')
    @parent
@endsection

@section('content')
<p>本当に退会しますか？下記の情報が完全に削除されます</p>
<p></p>
<form action="/user/del" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$items->id}}">
    <table>
        <tr><th>名前</th><td>{{$items->familyname}} {{$items->firstname}}</td></tr>
        <tr><th>郵便番号</th><td>{{$items->postal}}</td></tr>
        <tr><th>住所</th><td>{{$items->address}}</td></tr>
        <tr><th>電話番号</th><td>{{$items->tel}}</td></tr>
        <tr><th>メール</th><td>{{$items->email}}</td></tr>
        <tr><th>誕生日</th><td>{{$items->birthday}}</td></tr>
        <tr><th></th><td></td><td><input type="submit" value="確認して退会"></td>
        </tr>
    </table>
</form>
@endsection

@section('footer')
@endsection
