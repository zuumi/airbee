@extends('layouts.app')

@section('title','Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/admin/user/edit" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$items->id}}">
        <input type="text" name="firstname" value="{{$items->firstname}}">
        <input type="submit" value="更新">
    </form>
@endsection

@section('footer')
@endsection
