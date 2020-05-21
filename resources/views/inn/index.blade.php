@extends('layouts.app')

@section('title','Index')

@section('menubar')
    @parent
    メニュー
    <!-- 河住圭紀 更新部分 start -->
    <table>
        <tr>
            <td><a href="{{ url('/admin/userlist') }}">会員情報を操作</a></td>
            <td><a href="{{ url('/inn/show') }}">宿情報を操作</a></td>
            <td>
            <form action="/inn/show" method="post">
                @csrf
                <div class="input_wrap">
                    <input class="inputtext" type="text" name="input" value="{{$input}}">
                    <input type="submit" value="検索">
                </div>
            </form>
            <td>
        </tr>
    </table>
    <!-- 河住圭紀 更新部分 end -->
@endsection

@section('content')
<!-- 会員とメニューの見た目を揃えるため、menubarに移しました。 -->

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
@endsection

@section('footer')
@endsection
