@extends('layouts.app-inner')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/events.css')}}">
@endsection

@section('content')
    <div id="events">
        <div id="bg" class="fill-above"></div>
        <div class="container">
            <div id="title" class="layout center">
                <h1>
                    Events
                </h1>
            </div>
            <div class="layout justified wrap">
                @foreach($events as $event)
                    @include('events.event')
                @endforeach
            </div>
        </div>
    </div>
@endsection