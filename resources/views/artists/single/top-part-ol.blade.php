<style>
    #artist #backBg{
        background: #f0f0f0;
    }

    #artist #artistName{
        padding: 6em 7em;
    }

    #artist #artistName h1, #artist #artistName p{
        color: #000;
    }

    #artist #artistName h1{
        font-family: "Gotham ultra", sans-serif;
        font-size: 5em;
        line-height: 1.2em;
        letter-spacing: 4px;
    }

    #artist #artistName P{
        font-family: "Gotham light", sans-serif;
        font-size: 2em;
        line-height: 1.6em;
        letter-spacing: 2px;
    }

    #artist #artistSocials{
        padding-top: 10px;
        margin-bottom: 42px;
    }

    #artist #artistSocials a{
        text-decoration: none;
        padding: 15px 20px;
        font-size: 24px;
        color: #333;
        background: rgba(0,0,0,0.05);
        min-width: 60px;
        text-align: center;
    }

    #artist #artistSocials a:hover{
        background: #f8f8f8;
    }

    #artist #artistTopPictures{
        position: absolute;
        width: 100%;
        max-width: 700px;
        height: 100%;
        top: 0;
        right: 0;
        /*margin-left: auto;*/
        background: #333333;
    }

    #artist #coverPhoto{
        height: 100%;
        background: #bbb;
        position: relative;
        /*overflow: hidden;*/
    }

    #artist #coverPhoto img{
        width: 200px;
        height: 200px;
        position: absolute;
        bottom: -60px;
        right: 120px;
        border: 3px solid #000;
    }

    #artist #instaThumbs{
        display: none;
        margin-top: 10px;
        overflow: hidden;
        margin-right: 50px;
    }

    #artist #instaThumbs #thumbsList{
        padding-left: 10px;
    }

    #artist #instaThumbs .insta-thumbnail{
        background: #ddd;
        min-width: 120px;
        width: 120px;
        height: 120px;
        margin-right: 10px;
    }

    #editLink{
        color: #000;
        font-size: 1.4em;
        font-family: "Gotham medium", sans-serif;
    }
</style>
<div class="container">
    <div id="backBg" class="layout">
        <div id="artistTopPictures">
            <div id="coverPhoto">
                <img src="{{$artist->avatar}}" alt="{{$artist->first_name()}}'s profile pictur4">
                {{--<img src="{{asset('images/asac.jpg')}}" alt="" style="width: 100%;height: 100%;">--}}
                {{--<div class="fill-above" style="background: #b14b4b; opacity: 0.7;"></div>--}}
            </div>
        </div>

        <div id="artistName">
            <h1>{{$artist->name}}</h1>
            <p>{{strtoupper($artist->type()->name)}}</p>
            <div id="artistSocials" class="layout" style="opacit: 0;">
                @if($artist->facebook_link)
                    <a href="{{$artist->facebook_link}}" target="_blank"><i class="fa fa-facebook"></i></a>
                @endif

                @if($artist->instagram_link)
                    <a href="{{$artist->instagram_link}}" target="_blank"><i class="fa fa-instagram"></i></a>
                @endif

                @if($artist->twitter_link)
                    <a href="{{$artist->twitter_link}}" target="_blank"><i class="fa fa-twitter"></i></a>
                @endif

                @if($artist->youtube_link)
                    <a href="{{$artist->youtube_link}}" target="_blank"><i class="fa fa-youtube-play"></i></a>
                @endif
            </div>

            @if(!Auth::guest() && ($artist->id === Auth::user()->id))
                <a id="editLink" href="{{url('/editProfile')}}"> Edit Profile</a>
            @endif
        </div>
    </div>
</div>