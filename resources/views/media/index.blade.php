<style>
    body{
        background: #fff;
    }
    #media{
        position: relative;
        min-height: 100vh;
    }

    .container{
        max-width: 1200px;
        margin: auto;
    }

    #media #title{
        /*background: #fff0f0;*/
        /*background: #362626;*/
        /*background: #000;*/
        padding-top: 7.5em;
        padding-bottom: 3.5em;
    }

    #media #title h1{
        color: #f8f8f8;
        font-size: 4em;
        letter-spacing: 4px;
        font-family: "Gotham ultra", sans-serif;
        margin-bottom: 0.3em;
    }

    #media #title p{
        margin-top: 10px;
        line-height: 1.5em;
        font-size: 1.3em;
        max-width: 800px;
        color: #eee;
    }

    .channel{
        padding: 3em 0;
    }

    .channel .container{
        padding-top: 3em;
    }

    .channel .title{
        background-color: #000;
        -webkit-background-size:20%;
        margin-right: 10px;
        width: calc(50% - 20px);
        max-width: calc(50% - 20px);
    }

    .channel .channel-image{
        background: #f0ad4e;
        height: 295px;
    }

    .channel .title h2{
        color: #000;
        font-size: 2em;
        letter-spacing: 2px;
        font-family: "Gotham bold", sans-serif;
        padding: 0.1em 0;
    }

    .channel .title p{
        margin-top: 2px;
        line-height: 1.2em;
        font-size: 1em;
        color: #555;
    }

    .channel .channel-items{
        /*grid-column: 3 / 4;*/
    }

    .channel .channel-item{
        position: relative;
        background: #ffe1d0;
        margin: 5px;
        margin-left: 2px;
        margin-top: 2px;
        width: calc(50% - 10px);
        max-width: calc(50% - 10px);
        height: 235px;
        box-shadow: 0 0 1px rgba(0,0,0,0.2);
    }

    .channel .channel-item .caption{
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100%;
        /*background: rgba(0,0,0,0.2);*/
    }

    .channel .channel-item .bg{
        /*background: #ffe1d0;*/
    }

    .channel .channel-item .caption .text{
        background: #f5f5f5;
        padding: 16px;
        background-color: #fff;
        /*padding-left: 8px;*/
    }

    .channel .channel-item .caption .text h3{
        font-family: "Gotham medium", sans-serif;
        font-size: 1.2em;
        margin-bottom: 4px;
    }

    .channel .channel-item .caption .text span{
        font-family: "Gotham light", sans-serif;
        font-size: 12px;
    }

    #polyCover{
        background: #362626; opacity: 0.95;
    }

    #polyBg{
        background-image: url({{asset('images/pt.png')}}); background-size: 50%;
    }
</style>

@verbatim
<div id="media" ng-controller="listCtrl as vm">
    <section id="title" style="position: relative;">
        <div id="polyBg" class="fill-above">
        </div>
        <div id="polyCover" class="fill-above"></div>
        <div class="container layout vertical center-center" style="text-align: center;">
            <h1>MEDIA</h1>
            <p>
                Stay in touch with all you favorite tv shows, series and online platforms from your favorite loveartists right here, don't forget to subscribe.
            </p>
        </div>
    </section>

    <div class="channel" ng-repeat="channel in vm.movie_items">
        <div class="container layout">
            <a href="{{vm.media_url + channel.id}}" class="title layout vertical">
                <div class="channel-image flex" style="-webkit-background-size: cover;background-size: cover; background-position: 0 0;background-image: url({{channel.cover}})"></div>
                <div class="layout start" style="background: #f5f5f5; padding: 25px 30px; padding-bottom: 30px; padding-right: 25px;">
                    <div class="flex layou center">
                        <h2 style="display: inline-block">{{channel.name}}</h2>
                        <p>{{channel.description}}</p>
                    </div>
                    <button class="lv-btn" style="margin-left: auto; font-size: 1em;">SUBSCRIBE</button>
                </div>
            </a>

            <div class="channel-items flex layout start wrap">
                <a href="{{ vm.media_url + channel.id + '/' + episode.id }}" class="channel-item" style="-webkit-background-size: cover;background-size: cover;background-image: url({{episode.cover}})" ng-repeat="episode in channel.videos">
                    <div class="caption layout vertical">
                        <div class="bg flex"></div>
                        <div class="text layout vertical">
                            <h3>{{episode.name}}</h3>
                            <span>Posted on: {{episode.date}}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div style="height: 5em"></div>
</div>
@endverbatim