<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- 追加箇所 linkタグ。 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style media="screen">
        header{
            background-color: #ff7300;
            color:white;
            padding: 20px 40px;
            font-size: 24px;
        }
        main{
            /* height: 400px; */
            text-align: left;
            flex:1;/* 追加箇所２個目 */
            /* text-align: center; */
            /* padding-top:40px;
            padding-left: 20px; */
        }
        body{
            margin:0;
            display: flex;
            flex-flow: column;
            min-height: 100vh;
        }
        .copy{
            margin-top: 32px;
        }
        footer{
            background-color: gray;
            color:white;
            /* width: auto; */
            height: 80px;
            text-align: center;
            border-top: 10px solid #555555;
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

        <div class="content">
          @yield('content')
        </div>
    </main>
    <footer>
        <div class="footers">
            @yield('footer')
            <!-- 追加箇所3個目 -->
            <div class="copy">
                &copy; 2020 aribee
            </div>
        </div>
    </footer>
    <!-- 追加箇所 ４箇所目-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
