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