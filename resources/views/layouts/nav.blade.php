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

<?php
        $nav_class = isset($for_inner) ? "light" : "";
?>
<div id="bannerTopBar" class="layout center justified {{$nav_class}}">
    <a href="{{url('/')}}" id="title" class="layout center" style="color: #555">
        <img src="{{asset('images/logoactive.png')}}" alt="" style="height: 60px">
    </a>

    <div id="mobNav" class="layout vertical">
        <button href="#openMenu" id="menuToggler" class="layout center-center" onclick="toggleMobileMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        </button>

        <div id="theLinks" class="layout vertical main-nav" style="padding-bottom: {{Auth::guest() ? 80 : 60}}px;">
            <div id="mobNavTitle" class="layout center-center">
                MENU
            </div>
            <div style="width: 100%; height: 100%; position: fixed; right: 0; top: 0; background-size: cover; pointer-events: none; opacity: 0.1; background-image: url({{asset('images/banner/im4.jpg')}});"></div>

            @include('layouts.nav_links')

            @if(!Auth::guest())
                <a style="background: #000;" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('mobLogoutBtnForm').submit();">
                    LOGOUT
                </a>

                <form id="mobLogoutBtnForm" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>


        @if(Auth::guest())
            <a href="{{url('/login')}}" id="mobLoginBtn" class="layout center-center">
                LOGIN / SIGNUP
            </a>
        @endif
    </div>

    <div id="links" class="layout center main-nav">
        @include('layouts.nav_links')
    </div>

    <div id="authOptions" class="layout center">
        @if(Auth::guest())
            <a href="{{url('/login')}}">LOGIN</a>
        @else
            <img src="{{Auth::user()->avatar_url()}}" alt="{{Auth::user()->first_name()}}'s profile pictur4">

            <div id="miniProfile" class="layou vertical start">
                <a href="{{url('artists/'.Auth::user()->id)}}" id="loggedUserName">
                    {{Auth::user()->name}}
                </a>

                <a style="background: #000; align-self:" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    LOGOUT
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endif
    </div>
</div>