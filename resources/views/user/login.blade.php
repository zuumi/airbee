@extends('layouts.app')

@section('title','新宿トラベル')
    <style media="screen">
    form{
        padding: 16px 32px;
    }
    .forms{
        margin-top:16px;
    }
    .adduser{
        padding: 10px;
    }
    </style>
@section('menubar')
    @parent
    <div class="adduser">
        <a id="links" href="{{url('/toroku')}}">会員登録する</a>
    </div>
@endsection

@section('content')
    <hr size = "1">
    @if(isset($message))
        <p>{{$message}}</p>
    @endif
<form action="/user/auth" method="post">
  <table>
    @csrf
    <tr><td>Email:</td><td><input class="forms" type="text" name="email" placeholder='メールアドレス入力'></td></tr>
    <tr><td>Pass:</td><td><input class="forms" type="password" name="password" placeholder='パスワードを入力'></td></tr>
    <tr>
        <td></td><td></td><td><input class="forms" type="submit" value="ログイン"></td>
    </tr>
  </table>
</form>
@endsection

@section('footer')
@endsection
