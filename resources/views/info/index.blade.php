@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #fff;
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
            letter-spacing: 3px;
            /*color: #ecd3d3;*/
        }

        .publication{
            border: 1px solid #ddd;
            /*box-shadow: 0 0 10px rgba(0,0,0,0.1);*/
            /*background: #fcfcfc;*/
            min-width: calc(33% - 20px);
            max-width: calc(33% - 20px);
            margin: 20px 10px;
            margin-top: 0;
            text-align: center;
            padding-bottom: 20px;
        }

        .publication .pimage{
            text-align: center;
            margin-bottom: 16px;
        }

        .publication .pimage img{
            height: 200px
        }

        .publication .pname{
            font-family: "Gotham bold", sans-serif;
            font-size: 1.3em;
            margin-bottom: 10px;
        }

        .publication .psummary{
            display: none;
            font-family: "Gotham light", sans-serif;
            font-size: 1.1em;
            margin-bottom: 10px;
        }
    </style>

    <div id="infos">
        <div id="bg" class="fill-above"></div>
        <div class="container">
            <div id="title">
                <h1>
                    Be informed
                </h1>
                <p style="margin-top: 10px; font-size: 1.7em; font-family: 'Gotham light', sans-serif; line-height: 1.5em">
                    (or <span style="color: var(--app-main-color)">Sanuka</span> as they say), stay on top of the situation,
                    there are laws guarding your work, there are art policies that are probably out of date or need revisitting;
                    read them, critique them, never get blindsighted.
                    Below are some resources to get you started.
                </p>
            </div>
            <div class="layout wrap">
                @for($i = 0; $i < 8; $i++)
                    @include('info.info_item')
                @endfor
            </div>
        </div>
    </div>
@endsection