<form id="artisticInfoForm" class="lv-form" action="{{url('saveArtistic')}}" method="POST">
    {{csrf_field()}}
    <h3 class="form-title">Artistic Info</h3>

    <div class="layout">
        <label class="required">
            Category:
            <select name="pillar_id">
                <option value="">Art category e.g. Music</option>
                @foreach($pillars as $pillar)
                    <option value="{{$pillar->id}}" {{$pillar->id == $artist->pillar_id ? 'selected' : ''}}>{{$pillar->name}}</option>
                @endforeach
            </select>
        </label>

        <label class="required">
            Short Description:
            <input type="text" name="simple_description" value="{{$artist->simple_description}}" placeholder="Describe yourself in three words or less e.g Music Fanatic">
        </label>
    </div>

    <label class="required" style="margin-bottom: 40px;">
        Description:
        <textarea name="description" cols="30" rows="5" placeholder="Tell us more about yourself">{{$artist->description}}</textarea>
    </label>

    <label class="required">
        Art quote:
        <textarea name="art_quote" cols="30" rows="3" placeholder="Tell us what you think about art">{{$artist->art_quote}}</textarea>
    </label>

    <br>

    <div class="layout">
        <a href="#personalInfo" class="btn back-btn step"><i class="fa fa-chevron-left"></i>&emsp;PERSONAL INFO</a>
        <button type="submit">YOUR WORKS &emsp; <i class="fa fa-chevron-right"></i></button>
    </div>
</form>