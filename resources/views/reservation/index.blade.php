@extends('layouts.app')

@section('title','Index')

@section('menubar')
    @parent
    メニュー
    <a href="/user/auth">会員画面</a>
    <p>宿一覧</p>
@endsection

@section('content')

<table>
  <form action="/user/inn/show" method="post">
    @csrf
    <div class="input_wrap">
    <input class="inputtext" type="text" name="input" value="{{ old('input')}}">
    <input type="submit" value="検索">
    </div>
  </form>
  @foreach ($items as $item)
    <p><a href="/user/inn/detail/{{$item->id}}">{{$item->name}}</a></p>
  @endforeach
  </table>
@endsection

@section('footer')
@endsection
