@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #fff;
        }

        #bg{
            height: 300px;
            /*background: #2a2c33;*/
            background: #623333;
        }

        .container{
            max-width: 1200px;
            margin: auto;
        }

        #events{
            position: relative;
            padding: 4em 0;
            min-height: 100vh;
        }

        #events #title{
            padding: 3em 0;
        }

        #events #title h1{
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

    <div id="events">
        <div id="bg" class="fill-above"></div>
        <div class="container">
            <div id="title">
                <h1>
                    Events
                </h1>
            </div>
            <div class="layout justified wrap">
                @for($i = 0; $i < 10; $i++)
                    @include('events.event')
                @endfor
            </div>
        </div>
    </div>
@endsection