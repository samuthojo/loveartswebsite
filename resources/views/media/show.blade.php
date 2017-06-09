@extends('layouts.app-inner')

@section('content')
<style>
    body{
        background: #fff;
    }

    #show{
        position: relative;
        min-height: 100vh;
    }

    #bg{
        overflow: hidden;
    }

    #bg .fill-above{
        background: rgba(52, 25, 25, 0.9);
    }

    .container{
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
    }

    #show #title{
        padding-top: 8.5em;
        padding-bottom: 1.5em;
    }

    #show #title span{
        color: #e0e0e0;
        font-size: 1.1em;
    }

    #show #title h1{
        color: #f8f8f8;
        font-size: 2.8em;
        letter-spacing: 2px;
        font-family: "Gotham bold", sans-serif;
        margin-bottom: 0.2em;
    }

    #show #nav{
        background: #f3f3f3;
        padding: 24px 0;
    }

    #show #nav a{
        position: relative;
        color: #333;
        font-size: 1em;
        margin-right: 28px;
        letter-spacing: 2px;
    }

    #show #nav a.active{
        color: var(--app-main-color);
    }

    #show #nav a:not(:last-child):after{
        content: "";
        width: 3px;
        height: 3px;
        border-radius: 50%;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        background-color: #000;
        right: -14px;
    }

    #show .channel-items{
        margin-top: 2em;
        margin-left: -10px;
        width:calc(100% + 20px);
    }

    #show .channel-items .channel-item{
        width: calc(33.333% - 20px);
        max-width: calc(33.333% - 20px);
        height: 280px;
        overflow: hidden;
        margin: 10px;
    }
    
    .channel-item img{
        background: #ccc;
        width: 100%; min-height: 100%
    }

    .channel-item .caption .text{
        padding: 16px 0;
        background: #ffffff;
    }

    .channel-item .caption .text h3{
        color: #333;
        margin-bottom: 2px;
        font-size: 1.3em;
    }
</style>

<div id="show">
    <div id="bg" class="layout end">
        <img src="{{asset('images/banner/im4.jpg')}}" alt="" style="position: absolute; top: 0; left: 0; width: 100%; height: auto; min-height: 100%">
        <div class="fill-above layout vertical end"></div>
        <div id="title" class="container layout center">
            <div>
                <h1>Kijana Wajibika</h1>
                <span><span style="color:var(--app-main-color)">Host :</span> <strong style="font-weight: bold;">Abella Bateyunga</strong></span>
            </div>
            <span style="margin-top: 0.2em;margin-left: auto;">New episodes every Tuesday</span>
        </div>
    </div>
    <div id="nav">
        <div class="container layout">
            <a href="#videos" class="active">VIDEOS</a>
            <a href="#about">ABOUT</a>
            <a href="#schedule">SCHEDULE</a>
        </div>
    </div>

    <div class="container">
        <section class="channel-items layout wrap">
            @for($j = 1; $j < 5; $j++)
                <a href="{{url('/media/'.$show.'/'.$j)}}" class="channel-item" style="position: relative;">
                    <img src="{{asset('images/shows/'.((($show - 1)*5) + $j).'.jpg')}}" alt="">
                    <div class="fill-above caption layout vertical">
                        <div class="bg flex"></div>
                        <div class="text layout vertical">
                            <h3>Episode Name</h3>
                            <span>Posted on: 22nd July</span>
                        </div>
                    </div>
                </a>
            @endfor
        </section>
    </div>

    <div style="height: 5em"></div>
</div>
@endsection