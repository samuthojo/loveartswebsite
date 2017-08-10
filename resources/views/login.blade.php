@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #f0f0f0;
        }

        #bannerTopBar{
            position: absolute !important;
            padding: 30px 60px !important;
            margin-bottom: 30px !important;
            background-color: transparent !important;
        }

        #loginWrapper{
            min-height:calc(100vh - 190px);
            position: relative;
            top: 90px;
        }

        #bg{
            position: absolute;
            top: 0;
            width: 100%;
            height: 350px;
            background: #ff4d4d;
        }

        #loginForm{
            width:700px;
            margin: auto;
            /*min-height: 400px;*/
            box-shadow: 0 0 22px rgba(0,0,0,0.1);
            position: relative;
            top: 30px;
            margin-bottom: 200px;
            background-color: #fff;
            overflow: hidden;
        }

        #rotatedImage{
            position: absolute;
            top: -10%;
            left: -48%;
            width: 100%;
            height: 100%;
            transform: rotate(45deg);
            background: #000;
            overflow: hidden;
        }

        #rotatedImage img{
            /*transform: rotate(-45deg);*/
            width: 100%;
            opacity: 0.5;
        }

        #quote{
            font-size: 28px;
            text-align: center;
            width: 320px;
            padding: 20px 0;
            position: absolute;
            left: 10px;
            top: 155px;
            line-height: 1.16em;
            color: #f0f0f0;
            font-family: "Lora Italic", serif;
        }

        #quote span{
            font-size: 0.7em; font-family: 'Gotham light', sans-serif;
        }

        #theForm{
            position: relative;
            width: 70%;
            height: 100%;
            left: 30%;
            top: 0;
            padding-bottom: 50px;
        }

        #theForm h3{
            font-size: 42px;
            padding-left: 1.8em;
            padding-right: 1em;
            padding-top: 2em;
            text-align: right;
            font-family: "Gotham bold", sans-serif;
        }

        #theForm #buttons{
            /*background: #000;*/
            padding: 20px;
            padding-top: 35px;
            padding-right: 40px;
        }

        #theForm #buttons a{
            border-radius: 4px;
            padding: 16px 20px;
            color: #f5f5f5;
            background: #000;
            font-size: 1em;
            box-shadow: 0 0 8px rgba(0,0,0,0.3);
            border: none;
            min-width: 200px;
            text-align: center;
            margin-bottom: 8px;
        }

        #loginMob{
            display: none;
            min-height: 100vh;
            min-height: calc(100vh - 100px);
        }

        #loginMob #mobBg{
            height: 240px;
            background: #000;
            -webkit-background-size: cover;
            background-size: cover;
            background-image: url({{asset('images/bulbs.jpeg')}});
        }

        #mobQuote{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            background: rgba(230, 84, 78, 0.7);
            color: #ffc8c8;
            padding: 0 35px;
            padding-top: 20px;
            font-size: 1.3em;
            font-family: "Lora Italic", serif;
        }

        #mobQuote span{
            font-size: 0.8em;
            padding-top: 5px;
            font-family: "Gotham light", sans-serif;
        }

        #mobButtons a{
            display: inline-block;
            border-radius: 4px;
            padding: 22px 20px;
            color: #f5f5f5;
            background: #000;
            letter-spacing: 2px;
            font-family: "Gotham bold", sans-serif;
            font-size: 1em;
            box-shadow: 0 0 8px rgba(0,0,0,0.3);
            border: none;
            text-align: center;
            margin-bottom: 8px;
            max-width: 310px;
            min-width: 310px;
        }

        #loginMob h3{
            background: #fff;
            color: #000;
            padding: 20px 30px;
            display: inline-block;
            position: relative;
            left: 0;
            right: 0;
            margin: 30px auto;
            margin-top: -30px;
            min-width: 200px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
            font-family: "Calson", sans-serif;
            letter-spacing: 5px;
            font-size: 1.5em;
            text-align: center;
        }

        @media all and (max-width: 768px) {
            #bannerTopBar #title{
                padding: 12px !important;
            }

            #bg{
                display: none;
            }

            body{
                padding-top: 0 !important;
                background: #fff0f0;
            }

            #loginWrapper{
                display: none;
            }

            #loginMob{
                display: block;
            }
        }
    </style>

    @include('layouts.nav')

    <div id="loginMob">
        <div id="mobBg">
            <p id="mobQuote" class="layout vertical center-center">
                “Art enables us to find ourselves and lose ourselves at the same time.”<br>
                <span>
                    - Thomas Merton.
                </span>
            </p>
        </div>

        <div id="mobButtons" class="layout vertical center-center">
            <h3>
                LOGIN
            </h3>

            <a href="{{url('login/facebook/')}}" style="background: #3b5998;;">FACEBOOK LOGIN</a>
            <a href="{{url('login/google/')}}" style="background: #d62d20;">GOOGLE LOGIN</a>
        </div>
    </div>

    <div id="bg"></div>
    <div id="loginWrapper">
        <div id="loginForm">
            <div id="theForm">
                <h3>Choose a login option below</h3>
                <div id="buttons" class="layout vertical end">
                    <a href="{{url('login/facebook/')}}" style="background: #3b5998;;"><i class="fa fa-facebook"></i> &emsp; FACEBOOK</a>
                    <a href="{{url('login/google/')}}" style="background: #d62d20;"><i class="fa fa-google"></i> &emsp;GOOGLE</a>
                </div>
            </div>

            <div id="rotatedImage">
                <img src="{{asset('images/bulbs.jpeg')}}" alt="">
            </div>

            <p id="quote">
                “Art enables us to find ourselves and lose ourselves at the same time.”<br>
                <span>
                    - Thomas Merton.
                </span>
            </p>
        </div>
    </div>
@endsection