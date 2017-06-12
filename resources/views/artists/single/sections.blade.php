<style>
    #artist #backBg{
        background: #f0f0f0;
    }

    #artist #artistSectionLinks{
        padding: 4.5em 3.5em;
        padding-bottom: 1.8em;
        border-bottom: 1px solid #dfdfdf;
        margin-bottom: 2em;
    }

    #artist #artistSectionLinks a{
        font-size: 1em;
        color: #aaa;
        cursor: pointer;
    }

    #artist #artistSectionLinks a:nth-child(2){
        margin: 0 35px;
    }

    #artist #artistSectionLinks a.active{
        color: #000;
    }

    #artist > section{
        width: 100%;
        min-width: 100%;
        height: 100%;
    }

    #artist #worksWrapper section > h3{
        font-family: "Gotham bold", sans-serif;
        font-size: 1.2em;
        padding: 2em 0;
    }
</style>

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
    <section id="artistPics">
        @include('artists.single.section-pictures')
    </section>
</div>