@extends('layouts.app')

@section('title','Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/inn/edit" method="post">
        @csrf
        <table>
            <tr><td><input type="hidden" name="id" value="{{$items->id}}"></td></tr>
            <tr><th>宿命</th><td><input type="text" name="name" value="{{$items->name}}"></td></tr>
            <tr><th>住所</th><td><input type="text" name="address" value="{{$items->address}}">
            <tr><th>郵便番号</th><td><input type="text" name="postal" value="{{$items->postal}}"></td></tr>
            <tr><th>Eメール</th><td><input type="text" name="mail" value="{{$items->mail}}"></td></tr>
            <tr><th>チェックイン時間</th><td><input type="time" name="checkintime" value="{{$items->checkintime}}"></td></tr>
            <tr><th>チェックアウト時間</th><td><input type="time" name="checkouttime" value="{{$items->checkouttime}}"></td></tr>
            <tr><th>分類コード</th><td><input type="number" name="code" value="{{$items->code}}"></td></tr>
            <tr><th>　　</th></tr>
            <tr><td></td><td><input type="submit" value="更新する"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
@endsection
