<div class="container">
    <div id="artistSectionLinks" class="layout center-justified">
        <a class="active" href="#aboutArtist">ABOUT ME</a>
        <a href="#artistWorks">WORKS</a>
        <a href="#artistPics">PICTURES</a>
    </div>

    <section id="aboutArtist">
        @include('artists.single.section-about')
    </section>
    <section id="artistWorks">
        @include('artists.single.section-works')
    </section>
</div>

<section id="artistPics" style="background: #f9f9f9; margin-top: 5em; overflow: hidden;">
    @include('artists.single.section-pictures')
</section>