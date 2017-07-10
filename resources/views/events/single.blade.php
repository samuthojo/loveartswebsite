@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #fff;
        }

        #event{
            padding-top: 5em;
            padding-bottom: 3em;
            min-height: 100vh;
            min-height: calc(100vh - 60px);
        }

        .container{
            margin: auto;
            max-width: 1300px;
        }

        #event #title{
            padding-top: 1em;
            width: 60%;
            min-width: 60%;
        }

        #event #title h1{
            font-size: 3em;
            font-family: "Gotham ultra", sans-serif;
            letter-spacing: 3px;
        }

        #event #title .sub-info{
            padding: 20px 0;
        }

        #event #title .sub-info > span{
            padding: 20px 0;
            margin-right: 10px;
            letter-spacing: 2px;
            color: #000;
        }

        #event #title p{
            font-family:"Gotham light", sans-serif;
            font-size: 1.5em;
            line-height: 1.5em;
            padding-right: 2em;
        }

        #otherEvents > h3{
            font-size: 1.2em;
            padding-bottom: 20px;
            letter-spacing:2px;
        }
    </style>

    <div id="event">
        <div class="container layout justified">
            <div id="title">
                <h1>
                    {{$event->title}}
                </h1>
                <div class="sub-info">
                    <span>
                        <sup class="fa fa-calendar" style="font-size: 0.7em; margin-to: -143px;"></sup>
                        <span>{{$event->date->diffForHumans()}}</span>&nbsp;
                    </span>

                    <span>
                        <span class="fa fa-map-marker" style="font-size: 1em;"></span>
                        <span>{{$event->location}}</span>
                    </span>
                </div>
                <p>
                    {{$event->description}}
                </p>
            </div>

            <div id="otherEvents" class="flex layout vertical">
                <h3>OTHER EVENTS</h3>
                <?php $other_events = true?>
                @for($i = 0; $i < 2; $i++)
                    @include('events.event')
                @endfor
            </div>
        </div>
    </div>
@endsection