<div id="featured">
    <div class="layout" style="overflow: hidden; background-colo: #fff;">
        <div id="artistImage" class="flex layou center-justified">
            <div id="image" style="background-image: url({{asset('images/leroy.jpg')}});"></div>
        </div>
        <div class="flex" style="padding-top: 30px;">
            <div id="header" class="layout vertical center-justifie">
                <h2>FEATURED ARTIST</h2>
                <p>Leroy Sanyi</p>
            </div>

            @include('landing.featured.artist_sections')
        </div>
    </div>
</div>