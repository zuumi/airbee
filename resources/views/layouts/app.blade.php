<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style media="screen">
        header{
            background-color: #ff7300;
            color:white;
            padding: 20px 40px;
            font-size: 24px;
        }
        main{
            height: 400px;
            text-align: left;
            /* text-align: center; */
            padding-top:40px;
            padding-left: 20px;
        }
        footer{
            background-color: gray;
            color:white;
            width: auto;
            height: 40px;
            text-align: center;
            border-top: 10px solid #555555;
        }
        .red{
            color:red;
        }
    </style>
</head>
<body>
<header>
    <h2>@yield('title')</h2>
</header>
<main>
    @section('menubar')
    <h3 class="menutitle"></h3>
        @show
    <hr size = "1">
    <div class="content">
      @yield('content')
    </div>
</main>
<footer>
    <div class="footers">
        @yield('footer')
        @slot('copywrite')
            &copy; 2020 aribee
        @endslot
    </div>
</footer>
</body>
</html>
