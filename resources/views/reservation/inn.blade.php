@extends('layouts.app')

@section('title','inn')

@section('menubar')
    @parent
    <p>宿詳細画面</p>
@endsection

@section('content')
<p>{{$items->name}}</p>
@endsection

@section('footer')
@endsection
