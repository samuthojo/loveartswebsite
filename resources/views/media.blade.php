@extends('layouts.app-inner')

@section('content')
    @include('media.index-newer')
@endsection

@section('scripts')
    <script src="{{asset('js/lib/angular-youtube-api-factory.js')}}"></script>
    <script>
        const API_KEY = "AIzaSyB4ts37fbq9XYLcOBySltoN3E5U5J-7mIQ";
//        angular.module("jtt_youtube",[]).

        angular.module('lovearts', ['jtt_youtube'])

        .controller('listCtrl', function ($scope, youtubeFactory) {
            var vm = this;
            vm.loading = true;
            vm.media_url = "{{url('/media/')}}/";

            youtubeFactory.getPlaylistById({
                id: "PL70298B8E028D372C, PL5uUen04IQNlXgsP0RTwak6fxHbVL8ovW, PLhuEyf1go4nUmbJO-ZF8b3877WxcGF53E, PL5uUen04IQNktzf6JMMzE1XMnqAK81xrY, PL5uUen04IQNkhWApvhXaoYfad3j9Gvmx0'",
                key: API_KEY
            }).then(function (_data) {
                console.log(_data);
                vm.movie_items = _data.data.items.map(function(f){
                    var date = new Date(f.snippet.publishedAt);

                    return {
                        id: f.id,
                        name: f.snippet.title,
                        date: date.getDay() + " - " + date.getMonth() + " - " + date.getFullYear(),
                        cover: f.snippet.thumbnails.standard.url,
                        description:f.snippet.description
//                        , videos: vm.getPlaylistVideos(f.id)
                    };
                });
                console.log("Playlist results");
                console.log(vm.movie_items);
                vm.loading = false;
            }).catch(function (err) {
                console.log("Error found!!");
                console.log(err);
                vm.loading = false;
            });
        });
    </script>
@endsection