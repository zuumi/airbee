@extends('layouts.app')

@section('title','Show Users')

@section('menubar')
    @parent
    <p>Userリスト画面です。</p>
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
            <td>{{$li->family_name}}</td>
        </tr>
    @endforeach
</table>

@endsection

@section('footer')
@endsection
