@extends('layouts.app')

@section('title','inn')

@section('menubar')
    @parent
    <p>宿詳細画面</p>
@endsection

@section('content')
<p>{{$inn->name}}</p>
<form action="/user/inn/reservation" method="get">
    @csrf
    <input type="hidden" name="innid" value="{{$inn->id}}">
    <input type="hidden" name="userid" value="{{$user}}">
    <input type="submit" value="この宿を予約する">
</form>
@endsection

@section('footer')
@endsection
