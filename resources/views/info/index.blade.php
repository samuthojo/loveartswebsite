@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #fff;
        }

        .container{
            max-width: 1200px;
            margin: auto;
        }

        #infos{
            position: relative;
            padding: 4em 0;
            min-height: 100vh;
        }

        #infos #title{
            padding: 3em 0;
        }

        #infos #title h1{
            font-size: 3em;
            font-family: "Gotham ultra", sans-serif;
            letter-spacing: 3px;
            color: #ecd3d3;
        }

        .event{
            min-width: calc(50% - 50px);
            max-width: calc(50% - 50px);
        }
    </style>

    <div id="infos">
        <div id="bg" class="fill-above"></div>
        <div class="container">
            <div id="title">
                <h1>
                    Events
                </h1>
            </div>
            <div class="layout justified wrap">
                @for($i = 0; $i < 10; $i++)
                    @include('info.info_item')
                @endfor
            </div>
        </div>
    </div>
@endsection