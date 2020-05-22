@extends('layouts.app')

@section('title','Index')

@section('menubar')
    @parent
    メニュー
    <a href="/user/auth">会員画面</a>
    <p>検索結果</p>
@endsection

@section('content')
  <form action="/user/inn/show" method="post">
    @csrf
    <div class="input_wrap">
    <input class="inputtext" type="text" name="input" value="{{ old('input')}}">
    <input type="submit" value="検索">
    </div>
  </form>
    @foreach($item as $i)
      <p>・<a href="/user/inn/detail/{{$i->id}}">{{$i->name}}</a></p>
    @endforeach
@endsection

@section('footer')
@endsection
