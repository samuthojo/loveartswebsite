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
        <a href="/about">ABOUT</a>
        <a href="{{url('/artists')}}">ARTISTS</a>
        <a href="#media">MEDIA</a>
        <a href="#ubunifu">UBUNIFU CHALLENGE</a>
        <a href="#events">EVENTS</a>
        <a href="#artists">INFO KITAA</a>
        {{--<a href="#contact">CONTACTS</a>--}}
    </div>

    <div id="authOptions" class="layout center">
        <a href="#">LOGIN</a>
    </div>
</div>