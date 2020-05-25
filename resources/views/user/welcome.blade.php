<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .wrap{
                width: 100%;
                height: 100vh;
            }

            #bg-video{
                position: absolute; /*positionプロパティを指定*/
                right: 0;
                top: 0;
                bottom:0;
                z-index: 0; /*z-indexプロパティを指定*/
                min-width: 100%;
                height: 100%;
                opacity:0.7;
            }

            .m-b-md {
                margin-bottom: 30px;
                color:black;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid mb-0 wrap">
            <!--背景用の動画ファイル-->
            <video id="bg-video" autoplay loop muted>
                <source src="{{ asset('/assets/video/Hotel.mp4') }}" />
            </video>
            <div class="container flex-center position-ref full-height">
                <div class="top-right links">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link" style="margin-right: 3px;background:black ;color:white;" href="{{ url('/admin/login') }}">管理者画面</a></li>
                        <li class="nav-item"><a class="nav-link" style="background:black ;color:white;" href="{{ url('/user/login') }}">会員画面</a></li>
                    </ul>
                </div>
                <div class="content">
                    <div class="title m-b-md" style="color:black;">
                        Airbee
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
