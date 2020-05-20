@extends('layouts.app')

@section('title','Index')

@section('menubar')
    @parent
    メニュー
    <a href="">会員情報を操作</a>
    <a href="">宿情報を操作</a>
@endsection

@section('content')
  <form action="/inn/show" method="post">
    @csrf
    <div class="input_wrap">
    <input class="inputtext" type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </div>
  </form>
  <table border="1">
    <tr>
      <th>宿ID</th><th>宿名</th><th>郵便番号</th><th>住所</th>
      <th>チェックイン時間</th><th>チェックアウト時間</th><th>分類コード</th>
      <th>Eメール</th><th></th><th></th>
    </tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->postal}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->checkintime}}</td>
      <td>{{$item->checkouttime}}</td>
      <td>{{$item->code}}</td>
      <td>{{$item->mail}}</td>
      <!-- 河住圭紀　追加　start -->
      <td><a href="">更新</a></td>
      <td><a href="">削除</a></td>
      <!-- 河住圭紀　追加　end -->
    </tr>
  @endforeach
  </table>
@endsection

@section('footer')
@endsection
