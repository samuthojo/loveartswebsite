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
