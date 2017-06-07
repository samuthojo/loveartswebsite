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
        background: #362626;
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
        background: #000;
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
</style>

<div id="media">
    <section id="title">
        <div class="container">
            <h1>MEDIA</h1>
            <p>
                Stay in touch with all you favorite tv shows, series and online platforms from your favorite loveartists right here, don't forget to subscribe.
                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam cupiditate debitis deleniti dolorem eius enim eum excepturi fugit incidunt ipsa!--}}
            </p>
        </div>
    </section>

    @for($i = 1; $i < 5; $i++)
        <div class="channel">
            <div class="container layout">
                <a href="{{url('/media/'.$i)}}" class="title layout vertical">
                    <div class="channel-image flex" style="-webkit-background-size: cover;background-size: cover;background-image: url({{asset('images/shows/'.((($i - 1)*5) +1).'.jpg')}})"></div>
                    <div class="layout start" style="background: #f5f5f5; padding: 25px 30px; padding-bottom: 30px; padding-right: 25px;">
                        <div class="flex layou center">
                            <h2 style="display: inline-block">Show Name</h2>
                            <p>This is an awesome channel, there is no other channel like this, you shall. subscribe to this channel.</p>
                        </div>
                        <button style="margin-left: auto; font-size: 1em;">SUBSCRIBE</button>
                    </div>
                </a>

                <div class="channel-items flex layout start wrap">
                    <?php
                        $count = 5;
                        if($i == 2)
                            $count = 2;
                        else if($i == 4)
                            $count = 3;
                    ?>
                    @for($j = 1; $j < $count; $j++)
                        <a href="{{url('/media/'.$i.'/'.$j)}}" class="channel-item" style="-webkit-background-size: cover;background-size: cover;background-image: url({{asset('images/shows/'.((($i - 1)*5) + $j).'.jpg')}})">
                            <div class="caption layout vertical">
                                <div class="bg flex"></div>
                                <div class="text layout vertical">
                                    <h3>Episode Name</h3>
                                    <span>Posted on: 22nd July</span>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    @endfor

    <div style="height: 5em"></div>
</div>