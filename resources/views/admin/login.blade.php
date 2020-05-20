@extends('layouts.app')

@section('title','Login')

@section('menubar')
    @parent
    <h3>これは管理者ログイン画面です</h3>
    <p>mail:aribee@airbee.com <br> password:himitu</p>
@endsection

@section('content')
    <table>
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
