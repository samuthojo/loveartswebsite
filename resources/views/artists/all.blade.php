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
    </style>
    <?php
    $artists_str = '[
            {name: "James Nyole"},{name: "Kimberly James"}, {name: "Emmanuel Nyagawa"},
            {name: "Ashumta Kingi"}, {name: "Mgosi Amile"}, {name: "Catheryn Thomas Massamu"},
            {name: "Edgar Bwigane"}, {name: "Balinze Mokti"}, {name: "Sharukh Kacha"},
            {name: "Michael Lukemi"}, {name: "Millian Kilawe"}, {name: "Gasper Kiluvyo"}
            ]';

    $artists = json_decode($artists_str);
    ?>

    <div id="artists" ui-view>
        <div class="layout center-center" style="position: absolute; height: 400px; width: 100%; left: 0; top: 0; font-size: 2em; font-family: 'Gotham light', sans-serif">
            Loading Content....
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/lib/angular-1.6.4.min.js')}}"></script>
    <script src="{{asset('js/lib/angular-ui-router.min.js')}}"></script>
    <script>
        var artists = angular.module('lovearts', ['ui.router', 'lovearts.controllers', 'lovearts.directives']);
        var asset_path = "{{asset('images/artists/')}}";
        var cModule = angular.module("lovearts.controllers", []);

        cModule.controller('ArtistsController', function ($scope, $state) {
            $scope.goTo = function(i){
                if(i)
                    $state.go('artistInfo', {id: i});
                else if(!i && $state.is('artistList'))
                    $state.go('artistList');
            };
        });

        cModule.controller('ArtistsListCtrl', function ($scope, $timeout) {
            var vm = this;
            vm.cur_filter = 1;
            vm.filters = ["ALL", "MUSICIANS", "DANCERS", "PAINTERS"];

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