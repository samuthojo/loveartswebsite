<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="loveartsAdmin">
<head>
    <!-- CSRF Token -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="iPF Softwares ">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('fav.png')}}" rel="shortcut icon" type="image">
    <title>Love Arts Tanzania | Admin</title>

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flex.css') }}" rel="stylesheet">

    @yield('styles')

    <style>
        body{
            background: #f0f0f0;
            padding-left: 250px;
        }

        #adminAside{
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            height: 100vh;
            overflow: hidden;
            overflow-y: auto;
            width: 250px;
            background: #000;
            color: #fff;
        }

        #adminNavBar{
            position: absolute;
            top: 0;
            height: 68px;
            left: 250px;
            width: calc(100vw - 40px);
            border-bottom: 1px solid #ccc;
            padding: 0 20px;
            background: #fff;
            z-index: 99;
        }

        #adminContent{
            min-height: calc(100vh - 70px);
            padding: 60px 30px;
            padding-left: 50px;
        }

        #footer{
            background: #fff !important;
            height: 60px !important;
            border-top: 1px solid #ccc;
        }


        form{
            display: inline-block;
            background: #fff;
            padding: 24px;
            box-shadow: 0 0 20px rgba(0,0,0, 0.1);
            position: relative;
            border-radius: 4px;
            width: 450px;
        }

        .form-title{
            padding: 20px 0;
            font-size: 30px;
        }

        input:not([type="submit"]):not([type="file"]),
        select, textarea{
            width: 100%;
            border-radius: 3px;
            background-color: transparent;
            border: 1px solid #ccc;
            font-size: 20px;
            padding: 8px;
        }

        input, select, textarea{
            display: block;
            margin-top: 8px;
            max-width: 100%;
        }

        form .layout{
            position: relative;
        }

        form label{
            display: block;
            margin: 20px 0;
            width: 100%;
            position: relative;
        }

        .layout > label{
            width: 50%;
        }

        .layout > label:first-child{
            margin-right: 20px;
            width: calc(50% - 20px);
        }

        button{
            border-radius: 3px;
            padding: 13px 24px;
            background: #c61916;
            color: #fff;
            border: 1px solid #9c1a17;
            display: block;
            margin-left: auto;
            margin-bottom: 10px;
        }
    </style>
    <script src="{{asset('js/lib/jquery-3.1.0.min.js')}}"></script>
</head>
<body style="padding-top: 70px;">
    @include('admin.nav')

    <main id="adminContent">
        @yield('content')
    </main>

    <script src="{{asset('js/lib/angular-1.6.4.min.js')}}"></script>

    @include('layouts.footer')
    @yield('scripts')
</body>
</html>
