@extends('layouts.app')

<style media="screen">
    form{
        margin: 32px auto 32px 32px;
    }
    p a{
        margin-left: 32px;
    }
</style>
@section('title','宿泊先')

@section('menubar')
    @parent
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="{{url('/user/auth')}}" class="nav-link">ホーム</a></li>
        <li class="nav-item"><a href="{{url('/user/inn/show')}}" class="nav-link active">宿一覧</a></li>
        <li class="nav-item"><a href="#" class="nav-link">宿予約履歴</a></li>
        <li class="nav-item dropdown diactive">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" disactive>会員</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">会員情報変更</a>
                <a class="dropdown-item" href="#">退会</a>
            </div>
        </li>
        <li class="nav-item"><a href="/user/logout" class="nav-link">ログアウト</a></li>
    </ul>
@endsection

@section('content')

        <form action="/user/inn/show" method="post">
            @csrf
           <div class="input_wrap d-inline-flex">
               <input class="inputtext form-control mr-sm-2" type="search" name="input"  placeholder="検索..." aria-label="検索..." value="{{ old('input')}}">
               <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="検索"></button>
           </div>
       </form>
       <hr border="2">
<table>
  @foreach ($items as $item)
    <p><a href="/user/inn/detail/{{$item->id}}">{{$item->name}}</a></p>
  @endforeach
</table>
@endsection

@section('footer')
@endsection
