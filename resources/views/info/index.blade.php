@extends('layouts.app-inner')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/infos.css')}}">
@endsection

@section('content')
    <div id="infos">
        <div class="container" style="padding-top: 2em;">
            <div class="layout">
                <div id="title" class="flex">
                    <h1>
                        Art is everywhere
                    </h1>
                    <p>
                        Above and below, all around you,
                        you just need to open your eyes and let it in.
                    </p>
                </div>
                <div id="rightyImage"></div>
            </div>

            <div id="pointerDeco">
                <hr>
                <span>
                    Here are some few that will get you properly hooked up
                </span>
            </div>

            <div id="theInfos" class="layout justified wrap">
                <div class="layout vertical">
                    @foreach($infos as $info)
                        @if($loop->iteration %2 != 0)
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
                        @endif
                    @endforeach
                </div>

                <div class="layout vertical">
                    @foreach($infos as $info)
                        @if($loop->iteration %2 == 0)
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
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection