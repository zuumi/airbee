@extends('layouts.app')
<style media="screen">
    table tr td a{
        text-decoration: none;
        border: 1px solid black;
        padding: 5px 7px;
    }
</style>
@section('title','Index')

@section('menubar')
    @parent
    <div class="menus">
        <table>
            <tr>
                <th>メニュー</th>
            </tr>
            <tr>
                <td></td><td><a href="/admin/userlist">会員情報を操作</a></td>
                <td><a href="/inn/show">宿情報を操作</a></td>
                <td><a id="logout" href="/admin/logout">ログアウト</a></td>
            </tr>
        </table>
    </div>
@endsection

@section('content')

@endsection

@section('footer')
@endsection
