<h3 style="padding-bottom: 0;">PICTURES</h3>
<div style="margin: auto; width: 180px; border-top: 1px solid #ccc; margin-top: 1.5em; margin-bottom: 3.2em"></div>

<div class="shots-list">
    <div class="layout center-justified">
        @foreach($images as $image)
            @if($loop->iteration <= 5)
                <a href="#" class="insta-pic layout center-center">
                    <img src="{{asset('images/artists/profile'. '/' . $image->url)}}" alt="" style="height: 100%;">
                </a>
            @endif
        @endforeach

        @if(count($artist->images()->where('verified', true)->get()) < 5)
            @for($i = 0; $i < 5 - count($artist->images()->where('verified', true)->get()); $i++)
                <div class="insta-pic empty layout center-center">

                </div>
            @endfor
        @endif
    </div>
</div>
