@extends('layouts.app')

@section('title','DELETE')

@section('menubar')
    @parent
    更新完了しました。
    <a href="{{ url('/admin/userlist') }}">会員情報を操作</a>
@endsection

@section('content')

@endsection

@section('footer')
@endsection
