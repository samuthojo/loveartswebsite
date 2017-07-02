@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #f0f0f0;
        }
        #loginWrapper{
            min-height:calc(100vh - 190px);
            position: relative;
        }

        #bg{
            position: absolute;
            width: 100%;
            height: 200px;
            background: #ff4d4d;
        }

        #loginForm{
            width:700px;
            margin: auto;
            min-height: 400px;
            box-shadow: 0 0 22px rgba(0,0,0,0.1);
            position: relative;
            top: 90px;
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
            font-size: 1.6em;
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
            position: absolute;
            width: 70%;
            height: 100%;
            left: 30%;
            top: 0;
        }

        #theForm h3{
            font-size: 2.7em;
            padding-left: 1.8em;
            padding-right: 1em;
            padding-top: 2em;
            text-align: right;
            font-family: "Gotham bold", sans-serif;
        }

        #theForm #buttons{
            /*background: #000;*/
            padding: 20px;
            padding-top: 30px;
            padding-right: 40px;
        }

        #theForm #buttons a{
            border-radius: 4px;
            padding: 20px;
            color: #f5f5f5;
            background: #000;
            font-size: 1em;
            box-shadow: 0 0 8px rgba(0,0,0,0.3);
            border: none;
            min-width: 230px;
            text-align: center;
            margin-bottom: 8px;
        }
    </style>
    <div id="loginWrapper">
        <div id="bg"></div>

        <div id="loginForm">
            <div id="theForm">
                <h3>Choose a login option below</h3>
                <div id="buttons" class="layout vertical end">
                    <a href="{{url('login/facebook/')}}" style="background: #3b5998;;">LOGIN WITH FACEBOOK</a>
                    <a href="{{url('login/google/')}}">LOGIN WITH GOOGLE</a>
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