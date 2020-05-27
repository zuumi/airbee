@extends('layouts.app')

@section('title','更新画面')

@section('menubar')
    @parent
    更新フォーム
@endsection

@section('content')
    <form action="/admin/user/edit" method="post">
        @csrf
        <table>
              <input type="hidden" name="id" value="{{$items->id}}">
              <tr><th>性</th><td><input type="text" name="familyname" value="{{$items->familyname}}"></td></tr>
                @error('familyname')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
                @enderror
                <tr><th>名</th><td><input type="text" name="firstname" value="{{$items->firstname}}"></td></tr>
                @error('firstname')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
                @enderror
                <tr><th>郵便番号</th><td><input type="text" name="postal" value="{{$items->postal}}"></td></tr>
                @error('postal')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
                @enderror
                <tr><th>住所</th><td><input type="text" name="address" value="{{$items->address}}"></td></tr>
                @error('address')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
                @enderror
                <tr><th>電話番号</th><td><input type="text" name="tel" value="{{$items->tel}}"></td></tr>
                @error('tel')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
                @enderror
                <tr><th>Eメール</th><td><input type="mails" name="email" value="{{$items->email}}"></td></tr>
                @error('email')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
                @enderror
                <tr><th>生年月日</th><td><input type="text" name="birthday" value="{{$items->birthday}}"></td></tr>
                @error('fbirthday')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
                @enderror
                <tr><th>パスワード</th><td><input type="text" name="password" value="{{$items->password}}"></td></tr>
                @error('password')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
                @enderror
              <tr><th></th><td><input type="submit" value="更新"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
@endsection
