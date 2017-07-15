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
        filter: grayscale(90%);
        box-shadow: 0 0 20px 4px rgba(0,0,0,0.18);

        -webkit-transform: rotate(-40deg);
        -moz-transform: rotate(-40deg);
        -ms-transform: rotate(-40deg);
        -o-transform: rotate(-40deg);
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
        <h3>I'm a <span class="hot-word">{{$artist->simple_description}}</span></h3>
        <p>
            {{$artist->description}}
        </p>
    </div>

    <div style="height: 180px; margin-left: 1.5em; border-right: 1px solid #ccc; align-self: center"></div>

    <div class="about-me-deco layout center-center" style="padding: 2.6em 0;">
        <?php
            $viewMap = [
                1 => '<div class="cd layout center-center"><div class="hole" style="background-image: ;"></div></div>',
                2 => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9.4 10.5l4.77-8.26C13.47 2.09 12.75 2 12 2c-2.4 0-4.6.85-6.32 2.25l3.66 6.35.06-.1zM21.54 9c-.92-2.92-3.15-5.26-6-6.34L11.88 9h9.66zm.26 1h-7.49l.29.5 4.76 8.25C21 16.97 22 14.61 22 12c0-.69-.07-1.35-.2-2zM8.54 12l-3.9-6.75C3.01 7.03 2 9.39 2 12c0 .69.07 1.35.2 2h7.49l-1.15-2zm-6.08 3c.92 2.92 3.15 5.26 6 6.34L12.12 15H2.46zm11.27 0l-3.9 6.76c.7.15 1.42.24 2.17.24 2.4 0 4.6-.85 6.32-2.25l-3.66-6.35-.93 1.6z"/></svg>',
            ];
        ?>

        {!! isset($viewMap[$artist->pillar_id]) ? $viewMap[$artist->pillar_id] : '' !!}
    </div>
</div>