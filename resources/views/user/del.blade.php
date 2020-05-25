@extends('layouts.app')

@section('title','退会ページ')

@section('menubar')

@endsection

@section('content')
<p>下記の会員情報を削除しようとしています。</p>
<p></p>
<form action="/user/delconfirm/{{$items->id}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$items->id}}">
    <table>
        <tr><th>名前</th><td>{{$items->familyname}} {{$items->firstname}}</td></tr>
        <tr><th>郵便番号</th><td>{{$items->postal}}</td></tr>
        <tr><th>住所</th><td>{{$items->address}}</td></tr>
        <tr><th>電話番号</th><td>{{$items->tel}}</td></tr>
        <tr><th>メール</th><td>{{$items->email}}</td></tr>
        <tr><th>誕生日</th><td>{{$items->birthday}}</td></tr>
        <tr><th></th><td></td><td><input type="submit" value="退会する"></td>
        </tr>
    </table>
</form>
@endsection

@section('footer')

@endsection
