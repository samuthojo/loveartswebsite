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
                    <span></span><span></span><span></span>
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