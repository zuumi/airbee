@extends('layouts.app')
<style media="screen">
    .container{
        margin-top: 16px;
        text-align: center;
    }
</style>
@section('title','Delete')

@section('menubar')

@endsection

@section('content')
<div class="container">
    <form action="/admin/user/del/{{$items->id}}" method="post">
        @csrf
        <table>
            <input type="hidden" name="id" value="{{$items->id}}">
            <tr><th>名前</th><td>{{$items->familyname}} {{$items->firstname}}</td></tr>
            <tr><th>誕生日</th><td>{{$items->birthday}}</td></tr>
            <tr><th>郵便番号</th><td>{{$items->postal}}</td></tr>
            <tr><th>住所</th><td>{{$items->address}}</td></tr>
            <tr><th>電話番号</th><td>{{$items->tel}}</td></tr>
            <tr><th>Eメール</th><td>{{$items->email}}</td></tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="削除">
                    <input type="button" value="削除しない" onClick="history.back()">
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection

@section('footer')

@endsection
