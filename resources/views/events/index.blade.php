@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #fff;
        }

        #bg{
            height: 300px;
            /*background: #2a2c33;*/
            /*background: #623333;*/
        }

        .container{
            max-width: 1200px;
            margin: auto;
        }

        #events{
            position: relative;
            padding-bottom: 6em;
            padding-top: 2em;
            min-height: 100vh;
        }

        #events #title{
            padding: 1em 0;
        }

        #events #title h1{
            margin: auto;
            margin-top: 0.5em;
            font-size: 4em;
            font-family: "Gotham light", sans-serif;
            letter-spacing: 3px;
            color: #000;
            text-align: center;
            display: inline-block;
            /*text-transform: uppercase;*/
            margin-bottom: 70px;
        }

        #events #title h1:after{
            content: "";
            border-bottom: 1px solid #333;
            width: 50%;
            height: 120px;
            position: absolute;
            left: 0;
            right: 0;
            top: -40px;
            margin: auto;
        }

        .an-event{
            min-width: calc(33.333% - 10px);
            max-width: calc(33.333% - 10px);
            margin-bottom: 20px;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .an-event .image{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .an-event .text{
            padding: 2em;
            position: relative;
            z-index: 1;
            min-height: 100%;
            background: rgba(0,0,0,0.8);
        }

        .an-event .date{
            font-size: 1.9em;
            padding: 10px 0;
        }

        .an-event img{
            /*display: none;*/
            width: 100%;
        }

        .an-event .name{
            font-size: 1.6em;
            padding: 10px 0;
            min-height: 50px;
            margin-bottom: 10px;
            color: #ccc;
        }

        .an-event .excerpt{
            margin-bottom: 10px;
            color: #999;
        }
    </style>

    <div id="events">
        <div id="bg" class="fill-above"></div>
        <div class="container">
            <div id="title" class="layout center">
                <h1>
                    Events
                </h1>
            </div>
            <div class="layout justified wrap">
                <?php //$other_events = true; ?>
                @foreach($events as $event)
                    @include('events.event')
                @endforeach
            </div>
        </div>
    </div>
@endsection