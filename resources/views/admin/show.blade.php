@extends('layouts.app')

@section('title','Show Users')

@section('menubar')
    @parent
    メニュー
    <table>
        <tr>
            <!-- 河住圭紀 更新部分 start -->
            <td><a href="{{ url('/admin/userlist') }}">会員情報を操作</a></td>
            <td><a href="{{ url('/inn/show') }}">宿情報を操作</a></td>
            <!-- 河住圭紀 更新部分 end -->
            <form action="/admin/usershow" method="get">
                @csrf
                <td><input type="text" name="keyword" value="{{ old('keyword')}}"placeholder="キーワードを入力してください。"></td>
                <td><input type="submit" value="検索"></td>
            </form>
        </tr>
    </table>
@endsection

@section('content')
<table>
    <tr>
        <th>名前</th><th>郵便番号</th>
        <th>住所</th><th>電話番号</th>
        <th>Eメールアドレス</th>
        <th>生年月日</th>
    </tr>
    @foreach($lists as $li)
        <tr>
            <td>{{$li->familyname}}{{$li->firstname}}</td>
            <td>{{$li->postal}}</td><td>{{$li->address}}</td>
            <td>{{$li->tel}}</td><td>{{$li->email}}</td>
            <td>{{$li->birthday}}</td>
        </tr>
    @endforeach
</table>

@endsection

@section('footer')
@endsection
