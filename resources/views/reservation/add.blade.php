@extends('layouts.app')

@section('title','予約画面')

@section('menubar')
    @parent
    予約画面
@endsection

@section('content')
@if (count($errors) > 0)
<p>入力に誤りがあります。再入力してください。</p>
@endif
<form action="/user/inn/reservation" method="post">
  <table>
    @csrf
    <tr><input type="hidden" name="user_id" value="{{$userid}}"></tr>
    <tr><input type="hidden" name="inn_id" value="{{$innid}}"></tr>
    <tr><td>何日から</td><td><input type="date" name="firstday" placeholder='2020/05/19'></td></tr>
    @error('firstday')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
        @enderror
    <tr><td>何日まで</td><td><input type="date" name="endday" placeholder='2020/05/23'></td></tr>
    @error('endday')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><td>何人</td><td><input type="number" name="guestscount" placeholder='4'></td></tr>
    @error('guestscount')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr>
        <td></td><td></td><td><input type="submit" value="内容確認"></td>
    </tr>
  </table>
</form>
@endsection

@section('footer')
@endsection
