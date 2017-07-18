<form id="socialMediaLinksForm" class="lv-form" action="{{url('/saveSocialMedia')}}" method="POST">
    {{csrf_field()}}
    <h3 class="form-title">Social Media Links</h3>

    <div class="layout">
        <label>
            Facebook:
            <input type="text" name="facebook_link" value="{{$artist->facebook_link}}" placeholder="Link to your facebook profile">
        </label>

        <label>
            Instagram:
            <input type="text" name="instagram_link" value="{{$artist->instagram_link}}" placeholder="Link to your instagram profile">
        </label>
    </div>

    <div class="layout">
        <label>
            Twitter:
            <input type="text" name="twitter_link" value="{{$artist->twitter_link}}" placeholder="Link to your twitter profile">
        </label>

        <label>
            Youtube:
            <input type="text" name="youtube_link" value="{{$artist->youtube_link}}" placeholder="Link to your youtube page">
        </label>
    </div>

    <br>

    <div class="layout">
        <a href="#yourWorks" class="btn back-btn step"><i class="fa fa-chevron-left"></i>&emsp;YOUR WORKS</a>
        <button type="submit">CHOICE PICTURES &emsp; <i class="fa fa-chevron-right"></i></button>
    </div>
</form>