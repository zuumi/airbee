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
            <tr>
                <input type="hidden" name="id" value="{{$items->id}}">
                <input type="text" name="name" value="{{$items->name}}">
            </tr>
            <tr>
                <input type="submit" value="更新する">
            </tr>
        </table>
    </form>
@endsection

@section('footer')
@endsection
