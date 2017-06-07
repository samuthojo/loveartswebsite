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
        width: 850px;
        position: relative;
        color: #000000;
    }

    #video{
        overflow: hidden;
        border-radius: 8px;
        position: relative;
        width: 100%;
        height: 450px;
        background-color: #000;
        box-shadow: 0 0 32px rgba(120,0,0,0.1);
        -webkit-background-size: cover;
        background-size: cover;
        background-image: url({{asset('images/shows/'.((($show - 1)*5) + $item).'.jpg')}})
    }

    #videoTitle h1{
        /*font-family: "Gotham medium", sans-serif !important;*/
        font-family: Avenir, sans-serif;
        font-weight: 600;
        font-size: 1.8em;
        letter-spacing: 1px;
        margin-top: 35px;
        margin-bottom: 8px;
    }

    #videoTitle p{
        font-family: "Verdana", sans-serif;
        font-size: 1.2em;
        line-height: 1.3em;
    }
</style>

<div id="showItem">
    <section id="title">
        <div class="container layout start">
            <div id="videoContent">
                <div id="video" style="position: relative;">
                    <div class="fill-above layout center-center" style="background: rgba(0,0,0,0.5);">
                        <button style="background: transparent; border: none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="124" height="124" viewBox="0 0 24 24"><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        </button>
                    </div>
                </div>
                <div id="videoTitle">
                    <h1>Kusadikika Seaseon 1 episode 12</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda atque aut dolorum ea eligendi est in itaque laudantium, maiores perspiciatis, quidem recusandae sunt ut veniam veritatis vero voluptas voluptatibus.
                    </p>

                    <hr style="margin-top: 25px; margin-bottom: 20px;border: none; border-bottom: 1px solid #dfdfdf;">

                    <div class="layout end-justified" style="color: #777">
                        <span>12 LIKES</span>&emsp;
                        <span>34 COMMENTS</span>&emsp;
                        <span>123 VIEWS</span>
                        {{--<span></span>--}}
                    </div>
                </div>
            </div>
            <div class="layout vertical flex" style="padding: 20px; padding-top: 0;">
                <div style="padding: 15px 0; padding-top: 0;">
                    <h5 style="font-size: 1.2em; margin: 0; padding: 0;">Other Sessions</h5>
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