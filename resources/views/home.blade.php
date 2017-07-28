<?php
    $long_footer = true;
?>
@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endsection


<style>
    @media all and (max-width: 768px){
        #menuToggler{
            display: block !important;
        }
        #bannerTopBar{
            padding: 20px !important;
        }

        #bannerTopBar #title{
            position: fixed;
            left: 0;
            top: 0;
            background: rgba(230, 84, 78, 0.7);
            padding: 20px;
            min-height: 75px;
            min-width: 75px;
        }

        #bannerTopBar #title img{
            height: 35px !important;
        }

        #bannerTopBar #links,
        #bannerTopBar #authOptions{
            display: none !important;
        }

        #navMob > a{
            position: relative;
            left: 0 !important;
            display: block;
            color: #000 !important;
            width: 100%;
        }

        #navMob > a.active{
            background: rgba(0,0,0,0.1) !important;
        }

        #homePage #banner{
            position: relative;
            height: calc(100vh + 10px);
            max-height: 400px;
        }

        #homePage #banner .faded-bg,
        #homePage #banner .faded-bg + div{
            display: none !important;
        }

        #homePage #banner video{
            display: none !important;
        }

        #homePage #banner,
        #homePage #banner #bannerImage{
            height: 230px !important;
        }

        #homePage #banner #bannerImage{
            display: block !important;
        }

        #pillars{
            flex-direction: column;
            padding: 2em 1px !important;
        }

        #pillars #text{
            padding: 0 1em !important;
            margin: 0 !important;
        }
        #pillars h2{
            padding-top: 10px;
            padding-bottom: 5px;
            text-align: center;
            font-size: 2em !important;
            letter-spacing: 5px !important;
            margin-bottom: 0.2em !important;
        }

        #pillars p{
            text-align: center;
            padding-bottom: 20px;
        }

        #pillars .inspire-shot{
            width: calc(50% - 2px);
            height: 200px;
        }

        #pillars .inspire-shot .pillar-name{
            font-size: 1.25em;
            line-height: 1.3em;
            padding: 0 20px;
        }

        #featured{
            padding-top: 3em !important;
        }
        #featured > .layout{
            flex-direction: column;
        }

        #featured #artistImage{
            position: relative;
            max-width: 100% !important;
            padding: 30px 20px !important;
            padding-top: 0 !important;
            margin-bottom: 40px;
        }

        #featured #artistImage #image{
            height: 340px !important;
            background: #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.05) !important;
            margin-bottom: -30px !important;
        }


        #featured #header h2{
            display: block !important;
            text-align: center;
            margin-top: 0 !important;
        }

        #featured #header p{
            text-align: center;
            font-size: 2.1em !important;
        }

        #artistLinks{
            justify-content: center;
            padding: 0 10px;
        }

        #artistLinks span{
            font-size: 0.75em;
            text-align: center;
            align-self: center;
        }

        #artistSections section .just-text{
            font-size: 1.3em;
            line-height: 1.9em;
            padding: 0 20px;
        }

        #featuredArtistQuestions .question .question-number{
            height:50px !important;
            margin-right: 0 !important;
            font-size: 0.4em;
            background-color: transparent !important;
        }

        .song-length, .song-time-in{
            padding-right: 20px;
        }

        #downVideo{
            height: auto !important;
        }

        #downVideo video{
            display: none !important;
        }

        #downVideo img{
            position: relative !important;
            display: block !important;
        }

        #downVideo p{
            display: none !important;
        }

        #downVideo a{
            font-size: 14px !important;
            margin-top: 0 !important;
            min-width: 150px !important;
        }

        #downVideo a{
            font-size: 14px !important;
            margin-top: 0 !important;
            min-width: 150px !important;
        }
    }
</style>
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