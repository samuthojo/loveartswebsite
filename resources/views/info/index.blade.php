@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #ff4d4d;
            background: #f0f0f0;
        }

        #bannerTopBar{
            position: absolute !important;
            background-color: transparent;
            /*background-color: rgba(0,0,0,1);*/
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #bannerTopBar a{
            color: #000 !important;
        }

        #bannerTopBar a:hover{
            background-color: rgba(255, 255, 255, 0.45) !important;
        }

        #bannerTopBar a.active{
            background-color: rgba(255, 255, 255, 0.9) !important;
        }

        #authOptions a{
            background-color: rgba(5, 5, 5, 0.05) !important;
            color: #000 !important;
        }

        .container{
            max-width: 1000px;
            margin: auto;
        }

        #infos{
            position: relative;
            padding: 3em 0;
            padding-bottom: 5em;
            min-height: 100vh;
        }

        #infos #title{
            padding: 3em 0;
            padding-bottom: 5em;
        }

        #infos #title h1{
            font-size: 3em;
            font-family: "Gotham ultra", sans-serif;
            /*letter-spacing: 3px;*/
        }

        #theInfos{
            padding: 10em 0;
        }

        .info-image{
            width: 400px;
            margin-bottom: 6em;
        }

        .info-image:nth-child(even){
            transform: translateY(250px);
        }

        .info-image .image{
            position: relative;
            margin: auto;
            width: 80%;
            background-color: #fff;
            /*height: 480px;*/
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0,0,0,0.2);
            border-radius: 3px;
            transition: 0.35s transform ease-out;
        }

        .info-image .image:hover{
            transform: scale(1.2);
        }

        .info-image .image img:not(.gify){
            min-width:200%;
            min-height: 200%;
            max-width:200%;
            max-height: 200%;
        }

        .info-image .image:hover img{
            transition: 0.25s transform ease-out;
        }
        .info-image .image:hover img:not(.gify){
            transform: scale(0.5);
        }

        .info-image .title{
            font-size: 1.2em;
            margin-top: 30px;
            text-align: center;
            color: #000;
        }

        .info-image .image-subtitle{
            display: block;
            font-size: 0.8em;
            margin-top: 5px;
            text-align: center;
            width: 100%;
            overflow: hidden;
            -ms-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .info-image .title,
        .info-image .image-subtitle{
            transition: 0.25s opacity ease-out;
        }

        .info-image .image:hover + .title,
        .info-image .image:hover ~ .image-subtitle{
            opacity: 0;
        }

        .info-image .image .scrim{
            position: absolute;
            left: 0;
            top: 0;
            height: 100%; width: 100%;
        }

        .info-image .image:not(:hover) .gify{
            /*opacity: 0;*/
        }
    </style>

    <div id="infos">
        <div class="container" style="padding-top: 2em;">
            <div class="layout">
                <div style="width: 75vw; height: 34vw; background-colo: #e5e5e5; border: 1px solid #aaa; margin-right: -48vw; margin-lef: 4vw;"></div>
                <div id="title" class="flex" style="padding-top: 8em; background: #f0f0f0;">
                    <h1>
                        Be informed
                    </h1>
                    <p style="margin-top: 10px; font-size: 1.7em; font-family: 'Gotham light', sans-serif; line-height: 1.5em">
                        (or <span style="color: var(--app-main-color)">Sanuka</span> as they say),
                        there are beautiful art joints and experiences happening all around you, keep an open eye and give an 'ooooh yeah' nod every now and then.
                    </p>
                </div>
            </div>

            <div style="text-align: right; display: inline-block; position: absolute; right: 120px;">
                <hr style="height: 200px; width: 0; margin: auto; margin-bottom: 60px; margin-top: -30px;">
                <span style="font-size: 1.3em; font-family: 'Gotham light', sans-serif; line-height: 1.5em; display: inline-block; max-width: 300px;">
                    Here are some few that will get you properly hooked up
                </span>
            </div>
            <div id="theInfos" class="layout justified wrap">
                @foreach($infos as $info)
                    <div class="info-image">
                        <div class="image layout center-center" style="width: {{$info->type == 0 ? '80%' : '120%'}}; height: {{$info->type == 0 ? '480px' : ''}}">
                            @if($info->type==1)
                                {{--<img src="{{asset('images/infos/img' . $info->url)}}" alt="">--}}
                                <img class="gify" src="{{asset('images/infos/img' . $info->url)}}" alt="">
                                <div class="scrim layout center-center" style="background: rgba(0, 0, 0, 0.5);">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" width="64" height="64" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
                                </div>
                            @else
                                <img src="{{asset('images/events/' . $info->url)}}" alt="">
                            @endif
                        </div>
                        <div class="title">
                            {{$info->title}}
                        </div>
                        <span class="image-subtitle">
                            {{str_limit($info->description, 30)}}
                        </span>
                    </div>
                 @endforeach
            </div>
        </div>
    </div>
@endsection