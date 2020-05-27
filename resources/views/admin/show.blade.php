@extends('layouts.app')
<!-- 河住　更新 0526 -->
<style media="screen">
    .container{
        margin-top:16px;
    }
    .showform{
        margin:8px 8px;
    }

</style>
@section('title','会員一覧')

@section('menubar')
    @parent
    メニュー
    <!-- 河住　更新 0526 -->
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="{{ url('/admin/userlist') }}" class="nav-link active">会員一覧</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">宿情報を操作</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/inn/show') }}">宿一覧</a>
                <a class="dropdown-item" href="{{ url('/inn/add') }}">宿登録</a>
            </div>
        </li>
        <li>
            <form class="showform" action="/admin/usershow" method="get">
                    @csrf
                    <div class="input_wrap">
                        <td><input type="text" name="keyword" value="{{ old('keyword')}}"placeholder="キーワードを入力してください。"></td>
                        <td><input type="submit" value="検索"></td>
                    </div>
            </form>
        </li>
    </ul>
    <!--  -->
@endsection

@section('content')
<!-- 河住　更新 0526 -->
<div class="container">
<!--  -->
    <table border="1">
        <tr>
            <th>名前</th><th>郵便番号</th>
            <th>住所</th><th>電話番号</th>
            <th>Eメールアドレス</th>
            <th>生年月日</th><th></th><th></th>
        </tr>
        @foreach($lists as $li)
            <tr>
                <td>{{$li->familyname}}{{$li->firstname}}</td>
                <td>{{$li->postal}}</td><td>{{$li->address}}</td>
                <td>{{$li->tel}}</td><td>{{$li->email}}</td>
                <td>{{$li->birthday}}</td>
                <!-- 河住圭紀　更新　start 0522 -->
                <td><a href="/admin/user/edit/{{$li->id}}">更新</a></td>
                <td><a href="/admin/user/del/{{$li->id}}">削除</a></td>
                <!-- 河住圭紀　更新　end 0522 -->
            </tr>
        @endforeach
    </table>
</div>
@endsection

@section('footer')
@endsection
