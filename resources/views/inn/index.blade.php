@extends('layouts.app')
<!-- 河住 更新 0526  -->
<style media="screen">
    .container{
        margin-top: 16px;
    }
</style>
@section('title','Index')

@section('menubar')
    @parent
    メニュー
    <!-- 河住 更新部分 0526 start -->
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="{{ url('/admin/userlist') }}" class="nav-link">会員一覧</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">宿情報を操作</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/inn/show') }}">宿一覧</a>
                <a class="dropdown-item" href="{{ url('/inn/add') }}">宿登録</a>
            </div>
        </li>
        <li>
            <form action="/inn/show" method="post">
                @csrf
                <div class="input_wrap">
                    <input class="inputtext" type="text" name="input" value="{{$input}}">
                    <input type="submit" value="検索">
                </div>
            </form>
        </li>
    </ul>
    <!-- 河住 更新 0526 end -->
@endsection

@section('content')
<!-- 会員とメニューの見た目を揃えるため、menubarに移しました。 -->
<!-- 河住　更新　0526 -->
<div class="container">
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
          <td><a href="/inn/edit/{{$item->id}}">更新</a></td>
          <td><a href="/inn/del/{{$item->id}}">削除</a></td>
          <!-- 河住圭紀　追加　end -->
        </tr>
      @endforeach
  </table>
</div>
@endsection

@section('footer')
@endsection
