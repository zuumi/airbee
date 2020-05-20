@extends('layouts.app')

@section('title','Delete')

@section('menubar')
    DELETE PAGE
@endsection

@section('content')
    <p>下記の宿情報を削除しようとしています。</p>
    <p></p>
    <form action="/inn/delconfirm/{{$items->id}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$items->id}}">
        <table>
            <tr><th>宿名</th><td>{{$items->name}}</td></tr>
            <tr><th>郵便番号</th><td>{{$items->postal}}</td></tr>
            <tr><th>住所</th><td>{{$items->address}}</td></tr>
            <tr><th>Eメールアドレス</th><td>{{$items->mail}}</td></tr>
            <tr><th>チェックイン時間</th><td>{{$items->checkintime}}</td></tr>
            <tr><th>チェックアウト時間</th><td>{{$items->checkouttime}}</td></tr>
            <tr><th>分類コード</th><td>{{$items->code}}</td></tr>
            <tr><th></th><td></td><td><input type="submit" value="削除"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')

@endsection
