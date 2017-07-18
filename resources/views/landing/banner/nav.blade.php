<style>
    #bannerTopBar{
        /*position: relative;*/
        /*padding: 30px;*/
        padding: 24px 42px;
        z-index: 99;
        /*background-color: #ff5555;*/
        /*position: fixed;*/
        width: 100%;
    }

    #bannerTopBar.light{
        /*background: #fefefe;*/
        background: #ff4d4d;
        padding: 10px 42px;
        position: fixed;
    }

    #bannerTopBar #title {
        /*margin-left: 40px;*/
        font-size: 32px;
        /*font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;*/
    }

    #bannerTopBar.light #title{
        /*opacity: 0;*/
        display: inline-block;
    }

    #bannerTopBar.light #title img{
        height: 45px !important;
    }

    #bannerTopBar #links, #bannerTopBar #authOptions{
        /*background-color: greenyellow;*/
        margin-top: 10px;
    }

    #bannerTopBar #links > a, #bannerTopBar #authOptions a{
        padding: 12px 20px;
        font-family: "Gotham medium";
        font-size: 0.9em;
        font-weight: 200;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        color: #000;
        color: #f0f0f0;
    }

    #bannerTopBar.light #links > a, #bannerTopBar.light #authOptions > a{
        /*padding: 0 20px;*/
        /*background: #000;*/
        font-size: 0.75em;
        margin-bottom: 11px;
        color: #fff;
    }

    #bannerTopBar #authOptions a{
        background-color: rgba(255,255,255,0.1);
        color: #ffbcbc;
        color: #fff;
    }

    #bannerTopBar #authOptions a:hover{
        background-color: rgba(0,0,0,0.1);
        color: #000;

        background-color: rgba(255,255,255,0.2);
        color: #fff;
    }

    #bannerTopBar #links > a:hover{
        /*background-color: rgba(0,0,0,0.15);*/
        background-color: rgba(255,255,255,0.2);
    }

    #bannerTopBar #links > a.active{
        background-color: rgb(232, 74, 74);
    }

    #bannerTopBar #topBar:not(.light) #links > a,
    #bannerTopBar #topBar:not(.light) #authOptions > a,
    #bannerTopBar #topBar:not(.light) #title{
        color: #333;
    }

    #bannerTopBar #topBar:not(.light) #title{
        color: #626262;
        color: #000 !important;
        /*color: #fff;*/
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
        top: -16px;
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
        z-index: 1;
        margin-top: -10px;
    }
</style>

<?php
        $nav_class = isset($for_inner) ? "light" : "";
?>
<div id="bannerTopBar" class="layout center justified {{$nav_class}}">
    <div id="title" class="layout center" style="color: #555">
        {{--<div id="logo"></div>--}}
        {{--Love Arts--}}

        <img src="{{asset('images/logoactive.png')}}" alt="" style="height: 60px">
    </div>

    <div id="links" class="layout center">
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