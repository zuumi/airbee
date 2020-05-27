@extends('layouts.app')

@section('title','更新画面')

@section('menubar')
    @parent
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="/user/auth" class="nav-link">ホーム</a></li>
        <li class="nav-item"><a href="{{url('/user/inn/show')}}" class="nav-link">宿一覧</a></li>
        <li class="nav-item"><a href="#" class="nav-link">宿予約履歴</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" active>会員</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/user/edit/{{$items->id}}">会員情報変更</a>
                <a class="dropdown-item" href="#">退会</a>
            </div>
        </li>
        <li class="nav-item"><a href="/user/logout" class="nav-link">ログアウト</a></li>
    </ul>
@endsection

@section('content')
<div class="container" style="margin-top:16px;">
    <h5>更新フォーム</h5>
    <hr>
    <table>
        <form action="/user/edit/{{$items->id}}" method="post">
            @csrf
                 <tr><input type="hidden" name="id" value="{{$items->id}}"></tr>
                 <tr><th>性</th>
                     <td><input type="text" name="familyname" value="{{$items->familyname}}"></td></tr>
                 @error('familyname')
                 <tr><th>ERROR</th><td>{{$message}}</td></tr>
                 @enderror
                 <tr><th>名</th>
                     <td><input type="text" name="firstname" value="{{$items->firstname}}"></td></tr>
                 @error('firstname')
                 <tr><th>ERROR</th><td>{{$message}}</td></tr>
                 @enderror
                 <tr><th>郵便番号</th>
                     <td><input type="text" name="postal" value="{{$items->postal}}"></td></tr>
                 @error('postal')
                 <tr><th>ERROR</th><td>{{$message}}</td></tr>
                 @enderror
                 <tr><th>住所</th>
                     <td><input type="text" name="address" value="{{$items->address}}"></td></tr>
                 @error('address')
                 <tr><th>ERROR</th><td>{{$message}}</td></tr>
                 @enderror
                 <tr><th>電話番号</th>
                     <td><input type="text" name="tel" value="{{ $items->tel }}"></td></tr>
                 @error('tel')
                 <tr><th>ERROR</th><td>{{$message}}</td></tr>
                 @enderror
                 <tr><th>Eメール</th>
                     <td><input type="text" name="email" value="{{$items->email}}"></td></tr>
                 @error('email')
                 <tr><th>ERROR</th><td>{{$message}}</td></tr>
                 @enderror
                 <tr><th>生年月日</th>
                     <td><input type="text" name="birthday" value="{{$items->birthday}}"></td></tr>
                 @error('birthdaye')
                 <tr><th>ERROR</th><td>{{$message}}</td></tr>
                 @enderror
                 <tr><th>パスワード</th>
                     <td><input type="text" name="password" value="{{$items->password}}"></td></tr>
                 @error('password')
                 <tr><th>ERROR</th><td>{{$message}}</td></tr>
                 @enderror
                 <tr><th></th><td><input type="submit" value="更新する"></td></tr>
        </form>
    </table>
</div>
@endsection

@section('footer')
@endsection
