<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital_Libraray</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background: url(../img/balloon.jpg) no-repeat 50% fixed;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        {{-- <a href="{{ url('/home') }}"style="color:#fff">Home</a> --}}
                        <a href=""style="color:#fff">Home</a>
                    @else
                        <a href="{{ route('login') }}"style="color:#fff">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"style="color:#fff">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <h6 style="padding-top:70px; color:#fff">WELCOME TO LOVEWORLD DIGITAL LIBRARY</h6>
                </div>

                <div class="links">
                    <a href=""style="color:#fff">Digital Tapes</a>
                    <a href=""style="color:#fff">Digital Books</a>
                    <a href=""style="color:#fff">Latest News</a>
                    <a href=""style="color:#fff">Latest Events</a>
                    <a href=""style="color:#fff">Loveworld Next</a>
                    <a href=""style="color:#fff">IMM Next</a>
                    <a href=""style="color:#fff">New Loveworld</a>
                </div>
            </div>
        </div>
    </body>
</html>
