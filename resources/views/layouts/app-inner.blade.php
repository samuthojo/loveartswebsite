<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="lovearts">
<head>
    <!-- CSRF Token -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Tanzania music,drama ,poetry,Tanzania ndio mimi,Love Arts Tanzania | Passion - Impact - Change">
    <meta name="description" content="A platform that unites individuals who share passion for arts to bring impact and positive changes.">
    <meta name="author" content="iPF Softwares ">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('fav.png')}}" rel="shortcut icon" type="image">
    <title>Love Arts Tanzania | Passion - Impact - Change</title>

    <!-- Styles -->

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flex.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        #bannerTopBar{
            z-index: 99;
            width: 100%;
            background: #ff4d4d;
            padding: 10px 42px;
            position: fixed;
            top: 0;
        }

        #bannerTopBar #title {
            font-size: 32px;
            display: inline-block;
        }

        #bannerTopBar #title img{
            height: 45px !important;
        }

        #bannerTopBar #links, #bannerTopBar #authOptions{
            margin-top: 10px;
        }

        #bannerTopBar #links > a, #bannerTopBar #authOptions a{
            padding: 12px 20px;
            font-family: "Gotham medium", sans-serif;
            font-weight: 200;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 0.75em;
            margin-bottom: 11px;
            color: #fff;
        }

        #bannerTopBar #authOptions > a{
            background-color: rgba(255,255,255,0.1);
            color: #fff;
        }

        #bannerTopBar #authOptions > a:hover{
            background-color: rgba(255,255,255,0.2);
            color: #fff;
        }

        #bannerTopBar #links > a:hover{
            background-color: rgba(255,255,255,0.2);
        }

        #bannerTopBar #links > a.active{
            background-color: rgb(232, 74, 74);
        }

        #authOptions img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border: 2px solid #fff;
            margin-top: -10px;
        }

        #authOptions #miniProfile{
            padding: 20px;
            padding-right: 70px;
            padding-top: 25px;
            padding-bottom: 30px;
            background-color: #fff;
            box-shadow: 0 0 50px rgba(0,0,0,0.2);
            position: absolute;
            right: -16px;
            top: -26px;
            color: #000000;
            opacity: 0;
            pointer-events: none;
            transition: all 0.25s ease-out;
        }

        #authOptions:hover #miniProfile{
            opacity: 1;
            pointer-events: auto;
        }

        #loggedUserName{
            display: block;
            letter-spacing: 0 !important;
            color: #000 !important;
            text-transform: none !important;
            font-family: "Gotham medium", sans-serif !important;
            font-size: 1em !important;
            margin-bottom: 15px !important;
            white-space: nowrap;
            padding-left: 0 !important;
            padding-top: 0 !important;
        }

        #authOptions img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border: 2px solid #fff;
            position: relative;
            z-index: 1
        }
    </style>
    @yield('styles')

    <!-- Scripts -->
    <script src="{{asset('js/lib/jquery-3.1.0.min.js')}}"></script>
</head>
<body style="padding-top: 70px;">
    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{asset('js/scripts.js')}}"></script>
    @yield('scripts')


    <script>
        function toggleMobileMenu(){
            $('body').toggleClass('show-nav');
        }
    </script>
</body>
</html>
