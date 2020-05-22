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
          <tr><td><input type="hidden" name="id" value="{{$items->id}}"></td></tr>
          @error('name')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
          @enderror
          <tr><th>宿名</th><td><input type="text" name="name" value="{{$items->name}}"></td></tr>
          @error('address')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
          @enderror
          <tr><th>住所</th><td><input type="text" name="address" value="{{$items->address}}">
          @error('postal')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
          @enderror
          <tr><th>郵便番号</th><td><input type="text" name="postal" value="{{$items->postal}}"></td></tr>
          @error('mail')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
          @enderror
          <tr><th>Eメール</th><td><input type="email" name="mail" value="{{$items->mail}}"></td></tr>
          @error('checkintime')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
          @enderror
          <tr><th>チェックイン時間</th><td><input type="time" name="checkintime" value="{{$items->checkintime}}"></td></tr>
          @error('checkouttime')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
          @enderror
          <tr><th>チェックアウト時間</th><td><input type="time" name="checkouttime" value="{{$items->checkouttime}}"></td></tr>
          @error('code')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
          @enderror
          <tr><th>分類コード</th><td><input type="number" name="code" value="{{$items->code}}"></td></tr>
          <tr><th>　　</th></tr>
            <tr><td></td><td><input type="submit" value="更新する"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
@endsection
