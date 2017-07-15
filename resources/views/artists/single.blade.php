@extends('layouts.app-inner')

@section('content')
    <style>
        #artist{
            min-height: 100vh;
            padding-bottom: 3em !important;
        }

        .container{
            max-width: 1200px;
            margin: auto;
        }

        #backBg{
            background: #f0f0f0;
        }

        #artistName{
            padding: 6em 7em;
        }

        #artistName h1, #artistName p{
            color: #000;
        }

        #artistName h1{
            font-family: "Gotham ultra", sans-serif;
            font-size: 5em;
            line-height: 1.2em;
            letter-spacing: 4px;
        }

        #artistName P{
            font-family: "Gotham light", sans-serif;
            font-size: 2em;
            line-height: 1.6em;
            letter-spacing: 2px;
        }

        #artistSocials{
            /*display: none;*/
            padding-top: 20px;
        }

        #artistSocials a{
            text-decoration: none;
            color: inherit;
            padding: 20px;
            font-size: 24px;
            /*background: #333;*/
            color: #333;
            /*margin-right: 10px;*/
        }

        #artistSocials a:hover{
            background: #f8f8f8;
        }

        #artistTopPictures{
            position: absolute;
            width: 100%;
            max-width: 700px;
            height: 100%;
            top: 0;
            right: 0;
            /*margin-left: auto;*/
            background: #333333;
        }
        
        #coverPhoto{
            height: 100%;
            background: #333;
            /*box-shadow: 0 0 34px rgba(0,0,0,0.2);*/
        }

        #instaThumbs{
            display: none;
            margin-top: 10px;
            overflow: hidden;
            margin-right: 50px;
        }

        #instaThumbs #thumbsList{
            padding-left: 10px;
        }

        #instaThumbs .insta-thumbnail{
            background: #ddd;
            min-width: 120px;
            width: 120px;
            height: 120px;
            margin-right: 10px;
        }

        #artistSectionLinks{
            padding: 3.5em;
            padding-top: 5em;
            padding-bottom: 2em;
        }

        #artistSectionLinks label{
            font-size: 1.3em;
            color: #aaa;
            cursor: pointer;
        }

        #artistSectionLinks label:nth-child(2){
            margin: 0 35px;
        }

        #about, #works, #pictures{
            display: none;
        }

        #about:checked ~ #artistSectionLinks label[for="about"],
        #works:checked ~ #artistSectionLinks label[for="works"],
        #pictures:checked ~ #artistSectionLinks label[for="pictures"]{
            color: #000;
        }

        #worksWrapper{
            margin-bottom: 3em;
            height: 500px;
            border-top: 1px solid #ddd;
        }

        #worksWrapper section{
            width: 100%;
            min-width: 100%;
            height: 100%;
        }

        #worksWrapper section h3{
            font-family: "Gotham bold", sans-serif;
            font-size: 1.2em;
            padding: 2em 0;
        }

        #worksWrapper section:nth-child(even){
            background: #252525;
            color: #eee;
        }

        #about:checked ~ #worksWrapper .layout{
            -webkit-transition: layout 0.35s ease-out;
            -moz-transition: layout 0.35s ease-out;
            -ms-transition: layout 0.35s ease-out;
            -o-transition: layout 0.35s ease-out;
            transition: layout 0.35s ease-out;
        }

        #about:checked ~ #worksWrapper .layout{
            transform: translateX(0);
        }

        #works:checked ~ #worksWrapper .layout{
            transform: translateX(-100%);
        }

        #pictures:checked ~ #worksWrapper .layout{
            transform: translateX(-200%);
        }
    </style>

    <div id="artist">
        <div class="container">
            <div id="backBg" class="layout">
                <div id="artistTopPictures">
                    <div id="coverPhoto" style="position: relative; overflow: hidden;">
                        <img src="{{asset('images/banner/im4.jpg')}}" alt="" style="width: 100%;height: 100%;">
                        <div class="fill-above" style="background: #b14b4b; opacity: 0.7;"></div>
                    </div>
                </div>
                
                <div id="artistName">
                    {{--<h1>Anelinikisra Masingelirwe</h1>--}}
                    <h1>{{$artist->name}}</h1>
                    <p>{{strtoupper($artist->type()->name)}}</p>
                    <div id="artistSocials" class="layout">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <input type="radio" name="artistSection" id="about" checked>
            <input type="radio" name="artistSection" id="works">
            <input type="radio" name="artistSection" id="pictures">

            <div id="artistSectionLinks" class="layout center-justified">
                <label for="about">ABOUT</label>
                <label for="works">WORKS</label>
                <label for="pictures">PICTURES</label>
            </div>

            <div id="worksWrapper" style="overflow: hidden;">
                <div class="layout">
                    <section>
                        @include('artists.single.section-about')
                    </section>
                    <section>
                        @include('artists.single.section-works')
                    </section>
                    <section>
                        @include('artists.single.section-pictures')
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var artists = angular.module('lovearts', ['lovearts.controllers']);
        var asset_path = "{{asset('images/artists/')}}";
        var cModule = angular.module("lovearts.controllers", []);

        cModule.controller('ArtistListCtrl', function ($scope, $timeout) {
            var vm = this;

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
@endsection