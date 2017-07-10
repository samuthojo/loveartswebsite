@extends('layouts.app-inner')

@section('content')
<style>
    body{
        background: #fff;
    }

    #showItem{
        position: relative;
        min-height: 100vh;
    }

    .container{
        max-width: 1200px;
        margin: auto;
    }

    #showItem #title{
        padding-top: 3.5em;
        padding-bottom: 3.5em;
    }

    #videoContent{
        width: 100%;
        max-width: 800px;
        position: relative;
        color: #000000;
    }

    #video{
        overflow: hidden;
        border-radius: 3px;
        position: relative;
        width: 100%;
        height: 450px;
        background-color: #000;
        box-shadow: 0 0 32px rgba(120,0,0,0.1);
        -webkit-background-size: cover;
        background-size: cover;
    }

    #videoTitle h1{
        /*font-family: "Gotham medium", sans-serif !important;*/
        font-family: Avenir, sans-serif;
        font-weight: 600;
        font-size: 1.4em;
        letter-spacing: 1px;
        margin-top: 35px;
        margin-bottom: 8px;
    }

    #videoTitle p{
        font-family: "Verdana", sans-serif;
        font-size: 1em;
        line-height: 1.3em;
    }
</style>

<div id="showItem" ng-controller="episodeCtrl as vm">
    <section id="title">
        <div class="container layout start">
            <div id="videoContent">
                <div id="video" style="position: relative;">
                    <iframe id="ytIframe" src="http://www.youtube.com/embed/{{$item}}" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
                    {{--<div class="fill-above layout center-center" style="background: rgba(0,0,0,0.5);">--}}
                        {{--<button style="background: transparent; border: none">--}}
                            {{--<i class="fa fa-youtube-play" style="font-size: 104px; color: red"></i>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                </div>
                <div id="videoTitle">
                    @verbatim
                    <h1>{{vm.episode.name}}</h1>
                    <p>
                        {{vm.episode.description}}
                    </p>
                    @endverbatim
                </div>
            </div>
            <div class="layout vertical flex" style="padding: 20px; padding-top: 0; display: non">
                <div style="padding: 15px 0; padding-top: 0;">
                    <h5 style="font-size: 1.2em; margin: 0; padding: 0;">Other episodes</h5>
                </div>

                @verbatim
                <a href="{{vm.show_url + '/' + episode.id}}"
                   ng-repeat="episode in vm.other_episodes"
                   ng-if="$index < 2 && $index != vm.item_id">
                    <div style="height: 200px; background: #eee; -webkit-background-size: cover;background-size: cover;background-image: url({{episode.cover}}); margin-bottom: 8px;"></div>
                    <h3>{{episode.name}}</h3><br>
                </a>
                @endverbatim
            </div>
        </div>
    </section>

    <div style="height: 5em"></div>
</div>
@endsection


@section('scripts')
    <script src="{{asset('js/lib/angular-youtube-api-factory.js')}}"></script>
    <script>
        const API_KEY = "AIzaSyB4ts37fbq9XYLcOBySltoN3E5U5J-7mIQ";
        //        angular.module("jtt_youtube",[]).

        angular.module('lovearts', ['jtt_youtube'])

            .controller('episodeCtrl', function ($scope, youtubeFactory) {
                var vm = this;
                vm.loading = true;
                vm.show_url = "{{url('/view_episode/' . $show . '/')}}";
                vm.item_id = "{{$item}}";

                youtubeFactory.getVideoById({
                    id: "{{$item}}",
                    key: API_KEY
                }).then(function (_data) {
                    console.log(_data);
                    vm.episode = _data.data.items.map(function(f){
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


                youtubeFactory.getVideosFromPlaylistById({
                    playlistId: "{{$show}}",
                    key: API_KEY
                }).then(function (_data) {
                    console.log(_data);
                    vm.other_episodes = _data.data.items.map(function(f){
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