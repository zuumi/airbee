@extends('layouts.app')

@section('title','Add')

@section('menubar')
    宿登録ページ
@endsection

@section('content')
  @if (count($errors) > 0)
  <p>入力に誤りがあります。再入力してください。</p>
  @endif

  <form action="{{action('AdminController@add_confirm')}}" method="post">
    @csrf
    <table>
        @error('name')
          <tr><th>ERROR</th>
          <td>{{$message}}</td></tr>
        @enderror
        <tr><th>宿名</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        @error('address')
          <tr><th>ERROR</th>
          <td>{{$message}}</td></tr>
        @enderror
        <tr><th>住所</th><td><input type="text" name="address" value="{{old('address')}}">
        @error('postal')
          <tr><th>ERROR</th>
          <td>{{$message}}</td></tr>
        @enderror
        <tr><th>郵便番号</th><td><input type="text" name="postal" value="{{old('postal')}}"></td></tr>
        @error('mail')
          <tr><th>ERROR</th>
          <td>{{$message}}</td></tr>
        @enderror
        <tr><th>Eメール</th><td><input type="email" name="mail" value="{{old('mail')}}"></td></tr>
        @error('checkintime')
          <tr><th>ERROR</th>
          <td>{{$message}}</td></tr>
        @enderror
        <tr><th>チェックイン時間</th><td><input type="time" name="checkintime" value="{{old('checkintime')}}"></td></tr>
        @error('checkouttime')
          <tr><th>ERROR</th>
          <td>{{$message}}</td></tr>
        @enderror
        <tr><th>チェックアウト時間</th><td><input type="time" name="checkouttime" value="{{old('checkouttime')}}"></td></tr>
        @error('code')
          <tr><th>ERROR</th>
          <td>{{$message}}</td></tr>
        @enderror
        <tr><th>分類コード</th><td><input type="number" name="code" value="{{old('code')}}"></td></tr>
        <tr><th>　　</th></tr>
        <tr><td></td><td><input type="submit" value="確認画面へ"></td></tr>
    </table>
  </form>
@endsection

@section('footer')
@endsection
