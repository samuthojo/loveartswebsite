<style>
    #artist #backBg{
        position: absolute;
        background: #f8f8f8 !important;
        height: 20em;
        width: 100%;
    }

    #artist #artistBasics{
        padding: 10em 2em;
        padding-bottom: 4em;
    }

    #profilePic{
        width: 120px;
        height: 120px;
        overflow: hidden;
        border-radius: 50%;
        border: 3px solid #fff;
        margin-right: 20px;
    }

    #profilePic img{
        width: 100%;
        min-height: 100%;
    }

    #artistName{
        color: #000000;
    }

    #artistName h1{
        font-size: 2em;
    }

    #artistName p{
        font-family: "Gotham light", sans-serif;
        margin-top: 4px;
        font-size: 1.4em;
        color: #555;
    }

    #editLink{
        display: block;
        margin-top: 16px;
        text-transform: uppercase;
    }
    
    #artistSocials{
        padding-bottom: 0.2em;
    }

    #artistSocials a{
        display: flex;
        align-items: center;
        height: 40px;
        line-height: 1;
        background: rgba(0,0,0,0.05);
        padding: 0 15px;
        border-radius: 2px;
        font-size: 16px;
        font-family: Verdana, Geneva, sans-serif;
    }

    #artistSocials a i{
        /*margin-right: 16px;*/
    }

    #artistSocials a + a{
        margin-left: 20px;
    }
</style>
<div id="backBg"></div>
<div class="container">
    <div id="artistBasics" class="layout">
        <div class="layout center">
            <div id="profilePic">
                <img src="{{$artist->avatar_url()}}" alt="{{$artist->first_name()}}'s profile pictur4">
            </div>

            <div id="artistName">
                <h1>{{$artist->name}}</h1>
                <p>{{strtoupper($artist->type()->name)}}</p>

                @if(!Auth::guest() && ($artist->id === Auth::user()->id))
                    <a id="editLink" href="{{url('/editProfile')}}"> Edit Profile</a>
                @endif
            </div>
        </div>

        <div id="artistSocials" class="layout end-justified flex" style="align-self: flex-end;">
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
    </div>
</div>