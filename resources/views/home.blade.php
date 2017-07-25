<?php
    $long_footer = true;
?>
@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endsection

@section('content')
    <div id="homePage">
        @include('landing.banner.indexol')
        @include('landing.pillars.pillars-inset-ol')
        @include('landing.featured.featured_artist')
        @include('landing.downvideo')
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/lib/buffer-loader.js')}}"></script>
    <script>
//        var controller = new ScrollMagic.Controller();
//        var instaParallaxScene = new ScrollMagic.Scene({
//            triggerElement: '#instagramElement',
//            triggerHook: 0.9,
//            duration: '890'
//        })
//        .setTween(TweenMax.to('#instaBg', 1, {y: '-60%', ease: Power0.easeNone}))
////        .addIndicators()
//        .addTo(controller);
    </script>
@endsection