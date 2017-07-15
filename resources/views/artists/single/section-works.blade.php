<style>
    .work-preview{
        background: #000;
        width: 600px;
        min-width: 600px;
        height: 340px;
        margin-right: 1.3em;
    }

    .work-list.au{
        box-shadow: 0 0 13px rgba(0,0,0,0.1);
        max-width: 400px;
        margin-left: auto;
    }

    .work-list.au .title{
        position: relative;
        height: 220px;
        background: #f0f0f0;
    }

    .work-list.au .work-item{
        min-height: 60px;
    }

    #artistWorks > h3{
        text-align: center;
        color: #000;
        font-family: "Gotham light", sans-serif;
        font-size: 1.8em;
        padding-top: 1.3em;
        padding-bottom: 2em;
    }

    .au-image{
        height: 40px;
        width: 40px;
        min-width: 40px;
        max-width: 40px;
        background: #777;
        margin: 0 8px;
        margin-right: 12px;
        overflow: hidden;
    }

    .au-image img{
        width: 100%;
        min-height:100%;
    }

    .au-text{
        font-size: 0.8em;
        font-family: "Gotham light", sans-serif;
    }

    .au-text .au-title{
        display: block;
        font-size: 1em;
        font-family: "Gotham medium", sans-serif;
        margin-bottom: 8px;
    }
</style>

<h3 style="padding-bottom: 0;">RECENT WORKS</h3>
<div style="margin: auto; width: 180px; border-top: 1px solid #ccc; margin-top: 1.5em; margin-bottom: 3.2em"></div>

<div class="layout" style="max-width: 1050px; margin: auto;">
    <?php
        $yupo = ($artist->portrait_url && strlen($artist->portrait_url) > 0);
        $portrait = $yupo ? 'images/artists/' . $artist->portrait_url : asset('images/defpotrait.jpg');

        if($yupo){
            $sound_cloud_url = '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=';
            $sound_cloud_url .= $artist->portrait_url; //'https://soundcloud.com/walter-j-kimaro/sets/me-n-tinas-birthday';
            $sound_cloud_url .= '&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>';
        }else{
            $def_src = asset('images/music_def.png');
            $sound_cloud_url = "<img src='$def_src' style='height: 450px; width: 100%'>";
        }

        $landMap = [
            1 => $sound_cloud_url,
            2 => "<img src='$portrait' style='height: 450px; width: 100%'>"
        ];

        function get_view_group($id){
            return $view_group_id = $id === 1 ? 1 : 2;
        }

        if($artist->video_url && strlen($artist->video_url) > 0){
            $url = "https://www.youtube.com/embed/PqbmBM-z72s";
            $frame = '<iframe id="ytIframe" src="';
            $frame .= $artist->video_url;
            $frame .= '" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>';
        }else{
            $url = asset('images/video_placeholder.jpg');
            $frame = "<img src='$url' style='height: 100%; width: 100%'>";
        }
    ?>

    <div class="work-preview">
        {!! $frame !!}
    </div>

    <div class="flex work-list au" style="position: relative;">
        {!! $landMap[get_view_group($artist->pillar_id)] !!}
    </div>
</div>