@extends('layouts.app-inner')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/infos.css')}}">
@endsection

@section('content')
    <div id="infos">
        <div class="container" style="padding-top: 2em;">
            <div class="layout">
                <div id="leftyImage" style="width: 75vw; height: 34vw; background-colo: #e5e5e5; border: 1px solid #aaa; margin-right: -48vw; margin-lef: 4vw;"></div>
                <div id="title" class="flex" style="padding-top: 8em; background: #f0f0f0;">
                    <h1>
                        Be informed
                    </h1>
                    <p>
                        (or <span style="color: var(--app-main-color)">Sanuka</span> as they say),
                        there are beautiful art joints and experiences happening all around you, keep an open eye and give an 'ooooh yeah' nod every now and then.
                    </p>
                </div>
            </div>

            <div id="pointerDeco">
                <hr>
                <span>
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