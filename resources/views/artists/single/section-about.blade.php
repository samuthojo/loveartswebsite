<style>
    .about-me, .about-me-deco{

    }

    .about-me{
        padding: 2em;
    }

    .about-me > h3{
        /*font-size: 1.5em;*/
        color: #000;
        font-family: "Gotham light", sans-serif;
        font-size: 1.8em;
        padding-top: 1em;
        padding-bottom: 0.6em;
    }

    .about-me > h3 .hot-word{
        color: #000;
        font-family: "Gotham bold", sans-serif;
    }

    .about-me > p{
        color: #333;
        font-family: "Gotham light", sans-serif;
        font-size: 1.2em;
        line-height: 1.5em;
    }

    .about-me-deco{
        width: 50%;
        min-width: 50%;
        max-width: 50%;
    }

    .cd, .cd .hole{
        border-radius: 50%;
    }

    .cd{
        width: 300px;
        height: 300px;
        background-color: #000;
        -webkit-background-size: cover;
        background-size: cover;
        background-image: url({{asset('images/asa.jpg')}});
        filter: grayscale(90%);
        box-shadow: 0 0 20px 4px rgba(0,0,0,0.18);

        /*-webkit-transform: rotate(40deg);*/
        /*-moz-transform: rotate(40deg);*/
        /*-ms-transform: rotate(40deg);*/
        /*-o-transform: rotate(40deg);*/
        transform: rotate(-40deg);
    }

    .cd:hover{
        /*animation: roll 4s linear infinite;*/
    }

    .cd .hole{
        width: 80px;
        height: 80px;
        background: #fff;
        box-shadow: inset 0 0 20px 4px rgba(0,0,0,0.18);
    }

    @keyframes roll {
        0% { transform: rotate(360deg); }
        100% { transform: rotate(0deg); }
    }
    @-webkit-keyframes roll {
        0% {-webkit-transform: rotate(360deg); }
        100% { -webkit-transform: rotate(0deg); }
    }
    @-ms-keyframes roll {
        0% {-ms-transform: rotate(360deg); }
        100% { -ms-transform: rotate(0deg); }
    }
    @-moz-keyframes roll {
        0% { -moz-transform: rotate(360deg); }
        100% { -moz-transform: rotate(0deg); }
    }
    @-o-keyframes roll {
        0% { -o-transform: rotate(360deg); }
        100% { -o-transform: rotate(0deg); }
    }
</style>
<div class="layout" style="max-width: 1100px; margin: auto;">
    <div class="about-me flex">
        <h3>I'm a <span class="hot-word">Music Junkie</span></h3>
        <p>
            I am one of those boundary pushers, who walks the line in life and in poetry, asks poignant questions and challenges the rituals of our time.
            I can write for days, with a wit as quick as my pen, I am always coming up with new songs, new ideas and mantras.
            My heart is for salt water, for others, for my family & for revival.
        </p>
    </div>

    <div style="height: 180px; margin-left: 1.5em; border-right: 1px solid #ccc; align-self: center"></div>

    <div class="about-me-deco layout center-center" style="padding: 2.6em 0;">
        <div class="cd layout center-center">
          <div class="hole"></div>
        </div>
    </div>
</div>