<form class="lv-form" action="{{url('/saveInfo')}}" enctype="multipart/form-data" method="POST">
    {{csrf_field()}}
    <h3 class="form-title">New Info</h3>

    <label>
        Title:
        <input type="text" name="title" placeholder="Event title">
    </label>

    <label>
        Description:
        <textarea name="description" cols="30" rows="5" placeholder="Some description about event"></textarea>
    </label>

    <label>
        Type:
        <select name="type" onchange="switchChoices()">
            <option value="0">Picture</option>
            <option value="1">Video</option>
        </select>
    </label>

    <label class="type-choice" onchange="setPreview('img')">
        Picture:
        <input type="file" name="image_url">
    </label>

    <label class="type-choice" style="display: none;" onchange="setPreview('vid')">
        Youtube Id:
        <input type="text" name="yt_id" placeholder="id from youtube video URL">
    </label>


    <button type="submit">SUBMIT</button>
</form>

<script>
    function switchChoices(){
        $('.type-choice').slideToggle();
    }

    function setPreview(){
//        $('.type-choice').fadeToggle();
    }
</script>