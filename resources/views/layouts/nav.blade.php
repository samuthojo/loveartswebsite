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

    #bannerTopBar #authOptions a{
        background-color: rgba(255,255,255,0.1);
        color: #fff;
    }

    #bannerTopBar #authOptions a:hover{
        background-color: rgba(255,255,255,0.2);
        color: #fff;
    }

    #bannerTopBar #links > a:hover{
        background-color: rgba(255,255,255,0.2);
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
        <a href="{{url('/')}}">HOME</a>
        <a href="{{url('/about')}}">ABOUT</a>
        <a href="{{url('/artists')}}">ARTISTS</a>
        <a href="{{url('/media)}}">MEDIA</a>
        <a href="#ubunifu">UBUNIFU CHALLENGE</a>
        <a href="{{url('/events)}}">EVENTS</a>
        <a href="#info">INFO KITAA</a>
        {{--<a href="#contact">CONTACTS</a>--}}
    </div>

    <div id="authOptions" class="layout center">
        <a href="#">LOGIN</a>
    </div>
</div>