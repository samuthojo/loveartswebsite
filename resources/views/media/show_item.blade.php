@extends('layouts.app-inner')

@section('content')
<style>
    body{
        background: #fff;
    }

    #showItem{
        position: relative;
        min-height: 100vh;
    }

    .container{
        max-width: 1200px;
        margin: auto;
    }

    #showItem #title{
        padding-top: 3.5em;
        padding-bottom: 3.5em;
    }

    #videoContent{
        width: 100%;
        max-width: 800px;
        margin: auto;
        position: relative;
        color: #000000;
    }

    #video{
        overflow: hidden;
        border-radius: 3px;
        position: relative;
        width: 100%;
        height: 450px;
        background-color: #000;
        box-shadow: 0 0 32px rgba(120,0,0,0.1);
        -webkit-background-size: cover;
        background-size: cover;
    }

    #videoTitle h1{
        /*font-family: "Gotham medium", sans-serif !important;*/
        font-family: Avenir, sans-serif;
        font-weight: 600;
        font-size: 1.4em;
        letter-spacing: 1px;
        margin-top: 35px;
        margin-bottom: 8px;
    }

    #videoTitle p{
        font-family: "Verdana", sans-serif;
        font-size: 1em;
        line-height: 1.3em;
    }
</style>

<div id="showItem">
    <section id="title">
        <div class="container layout start">
            <div id="videoContent">
                <div id="video" style="position: relative;">
                    <iframe id="ytIframe" src="http://www.youtube.com/embed/W7qWa52k-nE" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
                    {{--<div class="fill-above layout center-center" style="background: rgba(0,0,0,0.5);">--}}
                        {{--<button style="background: transparent; border: none">--}}
                            {{--<i class="fa fa-youtube-play" style="font-size: 104px; color: red"></i>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                </div>
                <div id="videoTitle">
                    <h1>Kusadikika Seaseon 1 episode 12</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda atque aut dolorum ea eligendi est in itaque laudantium, maiores perspiciatis, quidem recusandae sunt ut veniam veritatis vero voluptas voluptatibus.
                    </p>
                </div>
            </div>
            <div class="layout vertical flex" style="padding: 20px; padding-top: 0; display: non">
                <div style="padding: 15px 0; padding-top: 0;">
                    <h5 style="font-size: 1.2em; margin: 0; padding: 0;">Other episodes for kusadikika</h5>
                </div>

                @for($i = 1; $i < 3; $i++)
                    <div style="height: 200px; background: #eee; margin-bottom: 8px;">

                    </div>
                @endfor
            </div>
        </div>
    </section>

    <div style="height: 5em"></div>
</div>
@endsection