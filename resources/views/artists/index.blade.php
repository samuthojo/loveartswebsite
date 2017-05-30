<?php
    $for_inner = true;
?>
@extends('layouts.app-inner')

@section('content')
    <style>
        #artists{
            min-height: 100vh;
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            -ms-perspective: 1000px;
            perspective: 1000px;
        }

        #artists #banner{
            background: var(--app-main-color);
        }

        #artists .container{
            max-width: 1200px;
            margin: auto;
        }

        #artists h1{
            font-family: "Ultra", sans-serif;
            font-size: 2.5em;
            letter-spacing: 7px;
            color: #000;
            text-transform: uppercase;
            /*transform: translateY(100px) rotateX(8deg);*/
        }

        .category-shape{
            display: inline-block;
            background: #fff;
            background: var(--app-contrast-color);
            padding: 3em;
            -webkit-transform: translate3d(-50px, 4.3em, 0) rotateX(-8deg);
            -moz-transform: translate3d(-50px, 4.3em, 0) rotateX(-8deg);
            -ms-transform: translate3d(-50px, 4.3em, 0) rotateX(-8deg);
            -o-transform: translate3d(-50px, 4.3em, 0) rotateX(-8deg);
            transform: translate3d(-50px, 4.3em, 0) rotateX(-8deg);
            margin:auto;
            box-shadow: 0 0 16px rgba(0,0,0,0.12);
        }

        .artist-group-title{
            z-index: 1;
        }

        .artist-list{
            min-height: 500px;
        }

        .artist-group{
            margin-bottom: 6em;
        }

        .artist-group:nth-child(odd) .artist-list{
            /*background: #eee;*/
            /*background: #f7f7f7;*/
        }

        .artist-group:nth-child(even) .artist-group-title{
            /*background: #eee;*/
            /*background: #f7f7f7;*/
        }

        .artist{
            min-width: calc(33.33% - 4px);
            max-width: calc(33.33% - 4px);
            margin-bottom: 6px;
        }

        .artist .image{
            width: 100%;
            height: 300px;
            background-color:#cccccc;
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <?php
            $for_inner = true;
    ?>
    <div id="artists">
        <div id="banner">
            @include('landing.banner.nav')
        </div>

        <div class="container">
            <div class="artist-group">
                <div class="artist-group-title" style="padding-top: 12em;">
                        <div class="category-shape layout center-center">
                            <h1>MUSICIANS</h1>
                        </div>
                </div>
                <div class="artist-list layout justified wrap">
                    @for($i = 0; $i < 6; $i++)
                        <div class="artist">
                            <div class="image" style="background-image: url({{asset('images/artists/m'.($i + 1).'.png')}});"></div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="artist-group">
                <div class="artist-group-title">
                    <div class="category-shape layout center-center">
                        <h1>dancers</h1>
                    </div>
                </div>
                <div class="artist-list layout justified wrap">
                    @for($i = 0; $i < 4; $i++)
                        <div class="artist">
                            <div class="image" style="background-image: url({{asset('images/artists/d'.($i + 1).'.png')}});"></div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="artist-group">
                <div class="artist-group-title">
                    <div class="category-shape layout center-center">
                        <h1>PAINTERS</h1>
                    </div>
                </div>
                <div class="artist-list layout justified wrap">
                    {{--@for($i = 0; $i < 7; $i++)--}}
                        <div class="artist">
                            <div class="image" style="background-image: url({{asset('images/artists/p1.png')}});"></div>
                        </div>
                    {{--@endfor--}}
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    var artists = angular.module('lovearts', ['ui.router', 'lovearts.controllers']);
    var asset_path = "{{asset('images/artists/')}}";

    artists.config(function($stateProvider, $urlRouterProvider) {
        $stateProvider

            .state('artistList', {
                url: '/artistList',
                abstract: true,
                template: '<div>Artist List.</div>'
            })

            .state('artistInfo', {
                url: '/artistInfo',
                template: '<div>Artist Info.</div>'
            })
    });

    var artistsPage = angular.module("lovearts.controllers", []);

    artistsPage.controller('ArtistsListCtrl', function ($scope) {
        var vm = this;
        vm.cur_filter = 1;
        vm.filters = [
            "ALL",
            "MUSICIANS",
            "DANCERS",
            "PAINTERS"
        ];

        vm.names = [
            "James Nyole",
            "Kimberly James",
            "Emmanuel Nyagawa",
            "Ashumta Kingi",
            "Mgosi Amile",
            "Jackueline Kisuke",
            "Edgar Bwigane",
            "Balinze Mokti",
            "Sharukh Kacha",
            "Michael Lukemi",
            "Millian Kilawe",
            "Gasper Kiluvyo"
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
</script>