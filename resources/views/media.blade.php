@extends('layouts.app-inner')

@section('content')
    <div ui-view style="min-height: calc(100vh - 120px)"></div>
@endsection

@section('scripts')
    <script src="{{asset('js/lib/angular-ui-router.min.js')}}"></script>
    <script src="{{asset('js/lib/localforage.js')}}"></script>
    <script src="{{asset('js/lib/angular-localForage.js')}}"></script>
    <script src="{{asset('js/lib/angular-youtube-api-factory.js')}}"></script>

    @verbatim
    <script>
        const API_KEY = "AIzaSyB4ts37fbq9XYLcOBySltoN3E5U5J-7mIQ";

        var app = angular.module('lovearts', ['ui.router', 'jtt_youtube', 'LocalForageModule']);

        app.controller('showsCtrl', function ($scope, youtubeFactory, $localForage) {
            var vm = this;
            vm.loading = true;
            vm.media_url = "{{url('/media/')}}/";
            vm.episode = {
                name: "Some episode name"
            };

            youtubeFactory.getPlaylistById({
                id: "PL70298B8E028D372C, PL5uUen04IQNlXgsP0RTwak6fxHbVL8ovW, PLhuEyf1go4nUmbJO-ZF8b3877WxcGF53E, PL5uUen04IQNktzf6JMMzE1XMnqAK81xrY, PL5uUen04IQNkhWApvhXaoYfad3j9Gvmx0'",
                key: API_KEY
            }).then(function (_data) {
                vm.movie_items = _data.data.items.map(function(f){
                    var date = new Date(f.snippet.publishedAt);

                    return {
                        id: f.id,
                        name: f.snippet.title,
                        date: date.getDay() + " - " + date.getMonth() + " - " + date.getFullYear(),
                        cover: f.snippet.thumbnails.standard.url,
                        description:f.snippet.description
                    };
                });

                var showsMap = {};
                vm.movie_items.map(function(c){
                    showsMap[c.id] = {
                        name: c.name,
                        description: c.description
                    };

                });

                var date = new Date();
                showsMap['last-sync'] = date.getTime();

                $localForage.setItem('showsList', showsMap);
                vm.loading = false;
            }).catch(function (err) {
                console.log("Error found!!");
                console.log(err);
                vm.loading = false;
            });
        })


        .controller('showCtrl', function ($scope, youtubeFactory, $stateParams, $localForage) {
            var vm = this;
            vm.loading = true;
            vm.show_id = $stateParams.id;
            vm.longDesc = false;

            vm.toggleDesc = function(){
                vm.longDesc = !vm.longDesc;
                console.log("Switched!!");
            };

            $localForage.getItem('showsList')
                .then(function(shows) {
                    vm.showInfo = shows[vm.show_id];
                });

            youtubeFactory.getVideosFromPlaylistById({
                playlistId: $stateParams.id,
                key: API_KEY
            }).then(function (_data) {
                vm.episodes = _data.data.items.map(function(f){
                    var date = new Date(f.snippet.publishedAt);
                    return {
                        id: f.snippet.resourceId.videoId,
                        name: f.snippet.title,
                        date: date.getDay() + " - " + date.getMonth() + " - " + date.getFullYear(),
                        cover: f.snippet.thumbnails.standard.url
                    };
                });

                var episodesMap = {};
                vm.episodes.map(function(c){
                    episodesMap[c.id] = {
                        id: c.id,
                        cover: c.cover,
                        name: c.name,
                        description: c.description
                    };

                    var date = new Date();
                    episodesMap['last-sync'] = date.getTime();
                });

                $localForage.setItem('episodesList', episodesMap);

                vm.loading = false;
            }).catch(function (err) {
                console.log("Error found!!");
                console.log(err);
                vm.loading = false;
            });
        })

        .controller('showVideoCtrl', function ($scope, youtubeFactory, $stateParams, $localForage) {
            var vm = this;
            vm.loading = true;
            vm.show_id = $stateParams.show_id;
            vm.episode_id = $stateParams.video_id;
            vm.video_url = "http://www.youtube.com/embed/" + vm.episode_id;

            vm.other_episodes = [];
            var cur_date = new Date();


            $localForage.getItem('episodesList')
                .then(function(episodes) {
                    vm.episodeInfo = episodes[$stateParams.video_id];

                    for (var key in episodes) {
                        if(key != 'last-sync' && key != vm.episode_id)
                            vm.other_episodes.push(episodes[key]);
                        else
                            console.log(cur_date.getTime() - episodes[key]);
                    }
                });
        })


        .config(function($stateProvider, $urlRouterProvider) {

            $stateProvider

            .state('shows', {
                url: '/shows',
                abstract: true
            })

            .state('shows.list', {
                url: '/list',
                template: '<show-list></show-list>'
            })

            .state('shows.single', {
                url: '/:id',
                template: '<show-detail></show-detail>'
            })

            .state('shows.video', {
                url: '/:show_id/:video_id',
                template: '<show-video></show-video>'
//                , resolve: {
//                    video: function($stateParams){
//                        return {
//                            show_id: $stateParams.show_id,
//                            video_id: $stateParams.video_id,
//                            name: "Busara za mzee babu"
//                        };
//                    }
//                }
            });

            $urlRouterProvider.otherwise('/shows/list');
        })


        .component('showList',{
            templateUrl: "templates/show-list.html",
            controller: 'showsCtrl',
            controllerAs: 'vm'
        })

        .component('showDetail',{
            bindings: {
                show : '='
            },
            templateUrl: "templates/show-detail.html",
            controller: 'showCtrl',
            controllerAs: 'vm'
        })

        .component('showVideo',{
            bindings: {
                show : '='
            },
            templateUrl: "templates/show-video.html",
            controller: 'showVideoCtrl',
            controllerAs: 'vm'
        })

        .filter('trusted', ['$sce', function ($sce) {
            return $sce.trustAsResourceUrl;
        }]);


        function filterByKeys(obj, keep) {
            var result = {},
                unfiltered = keep === undefined,
                keys = listToSet(keep);
            if (isObj(obj)) {
                for (var key in obj) {
                    if (unfiltered ||  (!unfiltered && keys[key])) {
                        result[key] = obj[key];
                    }
                };
            }
            return result;
        };
    </script>
    @endverbatim
@endsection