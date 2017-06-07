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

    .container{
        max-width: 1000px;
        margin: auto;
    }

    #show #title{
        background: #362626;
        padding-top: 5.5em;
        padding-bottom: 2em;
    }

    #show #title h1{
        color: #f8f8f8;
        font-size: 2em;
        letter-spacing: 2px;
        font-family: "Gotham ultra", sans-serif;
        margin-bottom: 0.3em;
    }

    #show #title p{
        margin-top: 10px;
        line-height: 1.1em;
        font-size: 1.2em;
        max-width: 800px;
        color: #eee;
    }

    #show .channel-items{
        display: none;
    }
</style>

<div id="show">
    <section id="title">
        <div class="container">
            <h1>Maisha Shule</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam cupiditate debitis deleniti dolorem eius enim eum excepturi fugit incidunt ipsa!
            </p>
        </div>
    </section>

    <section class="channel-items">
        <div class="container layout wrap">
            @for($j = 1; $j < 5; $j++)
                <div class="channel-item" style="-webkit-background-size: cover;background-size: cover;background-image: url({{asset('images/shows/'.(($show*5) + $j + 1).'.jpg')}})">
                    <div class="caption layout vertical">
                        <div class="bg flex"></div>
                        <div class="text layout vertical">
                            <h3>Episode Name</h3>
                            <span>Posted on: 22nd July</span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <div style="height: 5em"></div>
</div>
@endsection