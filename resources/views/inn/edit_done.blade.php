@extends('layouts.app')

@section('title','Edit DONE')

@section('menubar')
    @parent
    更新完了ページ
    <a href="{{ url('/inn/show') }}">ホームに戻る</a>
@endsection

@section('content')
<table>
    この内容で更新しました。
    <table>
        <tr>
            <td>{{$items->name}}</td>
        </tr>
    </table>
</table>
@endsection

@section('footer')
@endsection
