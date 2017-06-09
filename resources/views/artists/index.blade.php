@extends('layouts.app-inner')

@section('content')
    <style>
        #artists{
            min-height: 100vh;
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            -ms-perspective: 1000px;
            perspective: 1000px;
            padding-top: 4em;
        }

        #artists .container{
            max-width: 1200px;
            margin: auto;
        }

        .page-title{
            font-family: "Gotham ultra", sans-serif;
            font-size: 3.5em;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .artist{
            position: relative;
            min-width: calc(33.33% - 4px);
            max-width: calc(33.33% - 4px);
            margin-bottom: 6px;
            height: 300px;
            overflow: hidden;
            text-decoration: none;
        }

        .artist-text{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: rgba(0,0,0,0.4);
            color: #fff;
            font-family: "Gotham light", sans-serif;
            padding: 0 1em;

            -webkit-transition: all 0.35s;
            -moz-transition: all 0.35s;
            -ms-transition: all 0.35s;
            -o-transition: all 0.35s;
            transition: all 0.35s;
        }

        .artist-text:hover{
            background: rgba(0,0,0,0.8);
        }

        .artist-name{
            font-size: 2em;
            -webkit-transition: all 0.15s;
            -moz-transition: all 0.15s;
            -ms-transition: all 0.15s;
            -o-transition: all 0.15s;
            transition: all 0.15s;
        }

        .artist .image{
            width: 100%;
            height: 100%;
            background-color:#cccccc;
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .artist:hover .artist-name{
            opacity: 0;
        }

        .artist:hover .artist-names{
            font-family: "Gotham ultra", sans-serif;
            letter-spacing: 3px;
            transform: scale(1.8);
            padding: 0.5em 3em;
            color: #555;
        }

        .artist:not(:hover) .artist-quote{
            display: none;
        }

        .artist:hover .artist-quote{
            font-size: 1.5em;
            position: absolute;
        }

        #artistFilters{

        }

        #artistFilters .artist-filter{
            position: relative;
            color: #888;
            padding: 15px 20px;
            min-width: 100px;
            text-align: center;
            margin: 0 8px;
            letter-spacing: 2px;
        }

        #artistFilters .artist-filter:before{
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            transform: rotateX(18deg);
            background: #f7f7f7;
            z-index: -1;
        }

        #artistFilters .artist-filter:hover:before{
            background: #f0f0f0;
        }

        #artistFilters .artist-filter.active{
            color: #fff;
            color: #000;
            font-weight: bold;
        }

        #artistFilters .artist-filter.active:before{
            background: var(--app-contrast-color);
        }
    </style>

    @verbatim
        <div id="artists" ng-controller="ArtistsListCtrl as vm">
            <div style="padding-top: 4em; margin-bottom: 4.6em; backgroun: #ff4d4d;">
                <div class="container">
                    <div class="layout center justified">
                        <h1 class="page-title">ARTISTS</h1>
                        <div id="artistFilters" class="layout center">
                            <a href="javascript:void(0);" class="artist-filter"
                               ng-repeat="filter in vm.filters"
                               ng-class="{'active' : vm.isCur($index)}"
                               ng-click="vm.setFilter($index)">{{filter}}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-bottom: 8.6em;">
                <div class="layout wrap justified">
                    <a class="artist" href="{{vm.getPath($index)}}"
                       ng-repeat="artist in artists"
                       ng-show="$index % vm.cur_filter === 0">
                        <div class="image" style="background-image: {{vm.artistImage($index)}}"></div>
                        <div class="artist-text layout vertical center-center text-center">
                            <div class="artist-name">
                                {{artist.name}}
                            </div>
                            <div class="artist-quote">
                                <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, doloremque, velit. Alias facilis magni necessitatibus.</q>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endverbatim
@endsection

@section('scripts')
    {{--<script src="{{asset('js/lib/angular-ui-router.min.js')}}"></script>--}}
    <script>
        var artists = angular.module('lovearts', ['lovearts.controllers']);
        var asset_path = "{{asset('images/artists/')}}";
        var url_path = "{{url('artists/')}}";

        var cModule = angular.module("lovearts.controllers", []);

        cModule.controller('ArtistsListCtrl', function ($scope, $timeout) {
            var vm = this;
            vm.cur_filter = 1;
            vm.filters = ["ALL", "MUSICIANS", "DANCERS", "PAINTERS"];
            vm.path = url_path;

            $scope.artists = [
                {name: "James Nyole"},{name: "Kimberly James"}, {name: "Emmanuel Nyagawa"},
                {name: "Ashumta Kingi"}, {name: "Mgosi Amile"}, {name: "Catheryn Thomas Massamu"},
                {name: "Edgar Bwigane"}, {name: "Balinze Mokti"}, {name: "Sharukh Kacha"},
                {name: "Michael Lukemi"}, {name: "Millian Kilawe"}, {name: "Gasper Kiluvyo"}
            ];

            vm.setFilter = function(filter){
                vm.cur_filter = filter + 1;
            };

            vm.isCur = function(filter){
                return filter + 1 === vm.cur_filter;
            };

            vm.artistImage = function(i){
                return "url("+asset_path + "/im" + (i + 1) + ".png);";
            };

            vm.getPath = function($index){
                return vm.path + "/" + ($index + 1);
            }
        });

        cModule.controller('ArtistInfoCtrl', function ($scope, $state, $stateParams) {
            var vm = this;
            var id = $stateParams.id;
            var lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis dolorum fuga harum necessitatibus reiciendis vitae. Consequatur, ducimus, voluptatem. Alias consequatur corporis debitis exercitationem facilis incidunt necessitatibus possimus, sequi temporibus! Deleniti, doloremque, velit. Alias facilis necessitatibus.";
            var artists = [
                "James Nyole", "Kimberly James", "Emmanuel Nyagawa",
                "Ashumta Kingi", "Mgosi Amile", "Catheryn Thomas Massamu",
                "Edgar Bwigane", "Balinze Mokti", "Sharukh Kacha",
                "Michael Lukemi", "Millian Kilawe", "Gasper Kiluvyo"
            ];

            $scope.artist = {
                name: artists[id - 1],
                shortname: shortenName(artists[id - 1]),
                bio: lorem,
                age: 29,
                skills: "Singer, Musician, Composer",
                since: 2009
            };

            vm.goBack = function () {
                $state.go('artistList');
            };

            $scope.artistImage = function(){
                return "url("+asset_path + "/im" + id + ".png);";
            };

            function shortenName(name){
                var lower = name.toLowerCase();
                var split = lower.split(" ");
                return split[0] + "_" + split[1];
            }
        });
    </script>
@endsection