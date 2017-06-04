@extends('layouts.app-inner')

@section('content')
    @include('about.index')
@endsection

@section('scripts')
    <script>
        var controller = new ScrollMagic.Controller();
        var instaParallaxScene = new ScrollMagic.Scene({
            triggerElement: '#instagramElement',
            triggerHook: 0.9,
            duration: '890'
        })
        .setTween(TweenMax.to('#instaBg', 1, {y: '-60%', ease: Power0.easeNone}))
        .addTo(controller);
    </script>
@endsection