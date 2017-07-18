<form id="yourWorksForm" class="lv-form" enctype="multipart/form-data" action="{{url('/saveArtistWorks')}}" method="POST">
    {{csrf_field()}}
    <h3 class="form-title">Your Works</h3>

    <div class="layout">
        <label class="required">
            Video Url:
            <input type="text" name="video_url" value="{{$artist->video_url}}" placeholder="Link to a video of your work">
        </label>

        @if(strtolower($artist->type()->name) == "music")
            <label class="{{is_null($artist->portrait_url) ? 'required' : ''}}">
                Sound Cloud url:
                <input type="text" name="portrait_url" value="{{$artist->video_url}}" placeholder="Link to your souncloud account or song or playlist.">
            </label>
        @else
            <label class="{{is_null($artist->portrait_url) ? 'required' : ''}}">
                Picture:
                <div style="margin-top: 8px;">
                    <input type="file" name="work_picture" accept="image/*" multiple>
                </div>
            </label>
        @endif
    </div>

    <br>

    <div class="layout">
        <a href="#artisticInfo" class="btn back-btn step"><i class="fa fa-chevron-left"></i>&emsp;ARTISTIC INFO</a>
        <button type="submit">SOCIAL MEDIA LINKS &emsp; <i class="fa fa-chevron-right"></i></button>
    </div>
</form>