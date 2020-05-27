@extends('layouts.app')

@section('title','管理者ログイン画面')

@section('menubar')
    @parent
@endsection

@section('content')
    <table style="margin:32px 32px;">
        <form action="/admin" method="post">
            @csrf
            <tr><td>Eメール</td><td><input type="text" name="mail"></td></tr>
            <tr><td>PASS</td><td><input type="password" name="password"></td></tr>
            <tr>
                <td></td><td></td><td><input type="submit" value="ログイン"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
@endsection
