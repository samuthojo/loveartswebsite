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

        #bannerTopBar a.active{
            background-color: rgba(255, 255, 255, 0.9) !important;
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
            width: 100%;
            background-color: #e5e5e5;
            height: 480px;
        }

        .info-image .title{
            font-size: 1.5em;
            margin-top: 25px;
            text-align: center;
        }

        .info-image .image-subtitle{
            display: block;
            font-size: 0.8em;
            margin-top: 5px;
            text-align: center;
        }
    </style>

    <div id="infos">
        <div class="container" style="padding-top: 2em;">
            <div class="layout">
                <div style="width: 75vw; height: 34vw; background-colo: #e5e5e5; border: 1px solid #ccc; margin-right: -48vw; margin-lef: 4vw;"></div>
                <div id="title" class="flex" style="padding-top: 8em; background: #f0f0f0;">
                    <h1>
                        Be informed
                    </h1>
                    <p style="margin-top: 10px; font-size: 1.7em; font-family: 'Gotham light', sans-serif; line-height: 1.5em">
                        (or <span style="color: var(--app-main-color)">Sanuka</span> as they say),
                        there are beautiful art joints and experiences happening all around you, keep an open eye and raised an eyebrow every now and then.
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
                @for($i = 0; $i <10; $i++)
                    <div class="info-image">
                        <div class="image"></div>
                        <div class="title">
                            Image title
                        </div>
                        <span class="image-subtitle">
                            Lorem ipsum dolor sit amet
                        </span>
                    </div>
                 @endfor
            </div>
        </div>
    </div>
@endsection