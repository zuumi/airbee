@extends('layouts.app')

@section('title','予約確認画面')

@section('menubar')
    @parent
    予約確認画面
@endsection

@section('content')
<form action="/user/inn/reservation_done" method="post">
  <table>
    @csrf
    <tr><input type="hidden" name="user_id" value="{{$reservation->user_id}}"></tr>
    <tr><input type="hidden" name="inn_id" value="{{$reservation->inn_id}}"></tr>
    <tr><td>{{$reservation->firstday}}から</td><td><input type="hidden" name="firstday" value="{{$reservation->firstday}}"></td></tr>
    <tr><td>{{$reservation->endday}}まで</td><td><input type="hidden" name="endday" value="{{$reservation->endday}}"></td></tr>
    <tr><td></td></tr>
    <tr><td>{{$reservation->guestscount}}人</td><td><input type="hidden" name="guestscount" value="{{$reservation->guestscount}}"></td></tr>
    <tr>
        <td></td><td></td><td><input type="submit" value="この内容で予約"></td>
    </tr>
  </table>
</form>
@endsection

@section('footer')
@endsection
