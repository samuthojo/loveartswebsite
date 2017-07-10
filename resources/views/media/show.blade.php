@extends('layouts.app-inner')

@section('content')
<style>
    body{
        background: #fff;
    }

    #show{
        position: relative;
        min-height: 100vh;
    }

    #bg{
        overflow: hidden;
    }

    #bg .fill-above{
        background: rgba(52, 25, 25, 0.9);
    }

    .container{
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
    }

    #show #title{
        padding-top: 8.5em;
        padding-bottom: 1.5em;
    }

    #show #title span{
        color: #e0e0e0;
        font-size: 1.1em;
    }

    #show #title h1{
        color: #f8f8f8;
        font-size: 2em;
        /*letter-spacing: 2px;*/
        font-family: "Gotham bold", sans-serif;
        margin-bottom: 0.2em;
    }

    #show #nav{
        background: #f3f3f3;
        padding: 24px 0;
    }

    #show #nav a{
        position: relative;
        color: #333;
        font-size: 1em;
        margin-right: 28px;
        letter-spacing: 2px;
    }

    #show #nav a.active{
        color: var(--app-main-color);
    }

    #show #nav a:not(:last-child):after{
        content: "";
        width: 3px;
        height: 3px;
        border-radius: 50%;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        background-color: #000;
        right: -14px;
    }

    #show .channel-items{
        margin-top: 2em;
        margin-left: -10px;
        width:calc(100% + 20px);
    }

    #show .channel-items .channel-item{
        width: calc(33.333% - 20px);
        max-width: calc(33.333% - 20px);
        height: 280px;
        overflow: hidden;
        margin: 10px;
    }
    
    .channel-item img{
        background: #ccc;
        width: 100%; min-height: 100%
    }

    .channel-item .caption .text{
        padding: 16px 0;
        background: #ffffff;
    }

    .channel-item .caption .text h3{
        color: #333;
        margin-bottom: 2px;
        font-size: 1em;
    }
</style>

<div id="show" ng-controller="listDetailCtrl as vm">
    <div id="bg" class="layout end">
        <img src="{{asset('images/banner/im4.jpg')}}" alt="" style="position: absolute; top: 0; left: 0; width: 100%; height: auto; min-height: 100%">
        <div class="fill-above layout vertical end"></div>
        <div id="title" class="container layout center">
            <div>
                <h1>@{{ vm.show_name }}</h1>
                {{--<span><span style="color:var(--app-main-color)">Host :</span> <strong style="font-weight: bold;">Abella Bateyunga</strong></span>--}}
            </div>
            {{--<span style="margin-top: 0.2em;margin-left: auto;">New episodes every Tuesday</span>--}}
        </div>
    </div>
    <div id="nav">
        <div class="container layout">
            <a href="#videos" class="active">VIDEOS</a>
            <a href="#about">ABOUT</a>
            <a href="#schedule">SCHEDULE</a>
        </div>
    </div>

    <div class="container">
        <section class="channel-items layout wrap">
            @verbatim
                <a href="{{vm.show_url + '/' + episode.id}}"
                   class="channel-item" style="position: relative;"
                    ng-repeat="episode in vm.episodes">
                    <img ng-src="{{episode.cover}}" alt="{{episode.name}}">
                    <div class="fill-above caption layout vertical">
                        <div class="bg flex"></div>
                        <div class="text layout vertical">
                            <h3>{{episode.name}}</h3>
                            <span>{{episode.date}}</span>
                        </div>
                    </div>
                </a>
            @endverbatim
        </section>
    </div>

    <div style="height: 5em"></div>
</div>
@endsection


@section('scripts')
    <script src="{{asset('js/lib/angular-youtube-api-factory.js')}}"></script>
    <script>
        const API_KEY = "AIzaSyB4ts37fbq9XYLcOBySltoN3E5U5J-7mIQ";
        //        angular.module("jtt_youtube",[]).

        angular.module('lovearts', ['jtt_youtube'])

            .controller('listDetailCtrl', function ($scope, youtubeFactory) {
                var vm = this;
                vm.loading = true;
                vm.show_url = "{{url('/view_episode/' . $show . '/')}}";

                youtubeFactory.getVideosFromPlaylistById({
                    playlistId: "{{$show}}",
                    key: API_KEY
                }).then(function (_data) {
                    console.log(_data);
                    vm.episodes = _data.data.items.map(function(f){
                        if(!vm.show_name)
                            vm.show_name = f.snippet.channelTitle;

                        var date = new Date(f.snippet.publishedAt);
                        return {
                            id: f.snippet.resourceId.videoId,
                            name: f.snippet.title,
                            date: date.getDay() + " - " + date.getMonth() + " - " + date.getFullYear(),
                            cover: f.snippet.thumbnails.standard.url
                        };
                    });
                    console.log("Episode results");
//                    console.log(vm.episodes);
                    vm.loading = false;
                }).catch(function (err) {
                    console.log("Error found!!");
                    console.log(err);
                    vm.loading = false;
                });
            });
    </script>
@endsection