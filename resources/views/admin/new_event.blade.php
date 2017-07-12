<form action="{{url('/saveEvent')}}" enctype="multipart/form-data" method="POST" style="margin-right: 40px;">
    {{csrf_field()}}
    <h3 class="form-title">New Event</h3>

    <label>
        Title:
        <input type="text" name="title" placeholder="Event title">
    </label>

    <label>
        Description:
        <textarea name="description" cols="30" rows="5" placeholder="Some description about event"></textarea>
    </label>

    <div class="layout">
        <label>
            Start Date:
            <input type="date" name="start_date">
        </label>

        <label>
            Finish Date:
            <input type="date" name="finish_date">
        </label>
    </div>

    <div class="layout">
        <label>
            Location:
            <input type="text" name="location" placeholder="Where event will be held">
        </label>

        <label>
            Url(optional):
            <input type="text" name="url" placeholder="link to your eventbrite event">
        </label>
    </div>

    <label>
        Poster:
        <input type="file" name="image_url">
    </label>


    <button type="submit">SUBMIT</button>
</form>