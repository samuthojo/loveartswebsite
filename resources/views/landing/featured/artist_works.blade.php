<style>
    #works{
        /*display: inline-block;*/
        /*margin: auto;*/
        padding: 10px 0;
        margin-bottom: 10px;
    }
    .song{
        padding: 12px;
        margin-bottom: 4px;
        min-width: 430px;
        cursor: pointer;
    }

    .song .song-image{
        width: 45px;
        height: 35px;
        /*background-color: #ccc;*/
        -webkit-background-size:cover;
        background-size:cover;
        background-position: center;
        margin-right: 12px;
        margin-left: 3px;
    }

    .song .song-image .song-bars,
    .song .song-loading,
    .song .song-image .song-visualizer{
        /*background: #f2f2f2;*/
        background: var(--app-cool-white);
    }

    .song .song-image .song-bars,
    .song .song-loading,
    .song .song-image .song-visualizer{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /*padding: 0 10px;*/
    }

    .song .song-image .song-bars span{
        margin-right: 0.9px;
        width: 0.5px;
        height: 2px;
        background: #777;
        align-self: flex-end;
    }

    .song:not(.current) .song-bars,
    .song:not(.current) .song-visualizer{
        display: none;
    }

    .song:not(.playing) .song-visualizer, .song:not(.playing) .song-time-in{
        display: none;
    }

    .song.playing .song-length{
        display: none;
    }

    .song:not(.loading) .song-loading{
        display: none;
    }

    .song:hover, .song:hover .song-bars, .song:hover .song-visualizer, .song:hover .song-loading{
        background: #e5e5e5;
    }
    
    .song-info{
        /*background: #000;*/
        padding-right: 4px;
    }

    .song .song-title{
        color: #000;
        font-size: 1.1em;
        font-family: "Gotham light", sans-serif;
        /*margin-top: 3px;*/
        margin-bottom: 6px;
    }

    .song .song-album{
        color: #555;
        font-size: 0.8em;
        font-family: "Gotham light", sans-serif;
        margin-bottom: 6px;
    }

    .song-length, .song-time-in{
        color: #555;
        font-size: 0.7em;
        font-family: "Gotham light", sans-serif;
    }
</style>

<div id="works">
    <?php
        $songs = [
            [
                "title" => "If My Lungs Don't Fail",
                "album" => "Barua Kwa mpenzi",
                "length" => "03:13"
            ],
            [
                "title" => "Blue Dress Song",
                "album" => "Barua Kwa mpenzi",
                "length" => "03:12"
            ],
            [
                "title" => "Ethiopian Coffee",
                "album" => "Out n' About",
                "length" => "01:05"
            ],
            [
                "title" => "Don't Wanna Fight",
                "album" => "Out n' About",
                "length" => "03:25"
            ],
            [
                "title" => "Made Up Her Mind",
                "album" => "Out n' About",
                "length" => "04:02"
            ]
        ];
    ?>

    @for($i = 0; $i < count($songs); $i++)
        <?php
            $song = $songs[$i];
            $lowerCaseTitle = strtolower($song['title']);
            $noApTitle = str_replace("'", "", $lowerCaseTitle);
            $noSpaceTitle = str_replace(" ", "-", $noApTitle);
            $src = $noSpaceTitle . ".mp3";
            $songs[$i]['src'] = $src;

            $lowerCaseAlbum = strtolower($song['album']);
            $noApAlbum = str_replace("'", "", $lowerCaseAlbum);
            $noSpaceAlbum = str_replace(" ", "-", $noApAlbum);
            $img = $noSpaceAlbum . ".jpg";
            $songs[$i]['artwork'] = $img;
        ?>

        <div class="song layout {{$i == 0 ? "loadin curren playin" : ""}}" data-src="{{asset('music/'.$songs[$i]['src'])}}">
            <div class="song-image" style="background-image: url({{asset('music/'.$img)}})">
                <div class="song-bars layout">
                    {{--@for($i = 0; $i < 3; $i++)--}}
                        <span></span><span></span><span></span>
                    {{--@endfor--}}
                </div>
                <canvas class="song-visualizer"></canvas>
                <div class="song-loading layout center-center">
                    <img src="{{asset('images/loading.gif')}}" width="100%" alt="">
                </div>
            </div>
            <div class="flex song-info layout vertical">
                <span class="song-title">{{$song['title']}}</span>

                <div class="layout justified">
                    <span class="song-album">{{$song['album']}}</span>
                    <span>
                        <span class="song-length">{{$song['length']}}</span>
                        <span class="song-time-in">00:00</span>
                    </span>
                </div>
            </div>
        </div>
    @endfor
    {{--<audio id="audioPlayer" sr="{{asset('music/'.$songs[0]['src'])}}"></audio>--}}
</div>