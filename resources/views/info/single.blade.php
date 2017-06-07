@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #fff;
        }

        #info{
            padding-top: 5em;
            padding-bottom: 3em;
        }

        .container{
            margin: auto;
            max-width: 1300px;
        }

        #info #title{
            padding-top: 1em;
            width: 60%;
            min-width: 60%;
        }

        #info #title h1{
            font-size: 3em;
            font-family: "Gotham ultra", sans-serif;
            letter-spacing: 3px;
        }

        #info #title .sub-info{
            padding: 20px 0;
        }

        #info #title .sub-info > span{
            padding: 20px 0;
            margin-right: 10px;
            letter-spacing: 2px;
            color: #000;
        }

        #info #title p{
            font-family:"Gotham light", sans-serif;
            font-size: 1.5em;
            line-height: 1.5em;
            padding-right: 2em;
        }

        #otherEvents > h3{
            font-size: 1.2em;
            padding-bottom: 20px;
            letter-spacing:2px;
        }
    </style>

    <div id="info">
        <div class="container layout justified">
            <div id="title">
                <h1>
                    Publication Name
                </h1>
                <div class="sub-info">
                    <button class="lv-btn">GET IT</button>
                    <button class="lv-btn">PREVIEW</button>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate, delectus eveniet illo nemo pariatur reiciendis repellat sapiente ut voluptatem. Ducimus eaque illo iure magnam magni nobis rem tempora voluptatem.
                </p>
            </div>

            <div id="otherEvents" class="flex layout vertical">
                <h3>OTHER RESOURCES</h3>
                @for($i = 0; $i < 2; $i++)
                    @include('info.info_item')
                @endfor
            </div>
        </div>
    </div>
@endsection