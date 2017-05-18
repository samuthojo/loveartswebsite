<!--1. LARGE IMAGE WITH SERIF TEXT, SANS SERIF TEXT-->
<style>
    #banner{
        position: relative;
        overflow: hidden;
        height: calc(100vh + 10px);
        /*height: calc(100vh + 200px);*/
        background: var(--app-cool-white);
        background-position: center;
        background-size: cover;
        background-image: url({{asset('images/banner/bg3.png')}});
    }

    #banner.reddish{
        background-color: var(--app-shade-color);
        /*background-image: -webkit-linear-gradient(top left, var(--app-accent1-color), var(--app-shade-color), var(--app-accent1-color));*/
        /*background-image: -o-linear-gradient(top left, var(--app-accent1-color), var(--app-shade-color), var(--app-accent1-color));*/
        /*background-image: linear-gradient(to bottom right, var(--app-accent1-color), var(--app-shade-color), var(--app-accent1-color));*/
    }

    #banner h2{
        font-family: Paint, serif;
        font-size: 2.6em;
        letter-spacing: 17px;
        color: #303030;
        padding-top: 70px;
        margin-bottom: 9px;
    }

    #banner p{
        font-size: 1.4em;

        font-family: Verdana, sans-serif;
        font-size: 1.3em;
        font-weight: 100;
        letter-spacing: 5px;
    }

    #banner #text{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    #celebrateTagline{
        z-index: 99;
        -webkit-perspective: 500px; /* Chrome, Safari, Opera */
        -mox-perspective: 500px;
        perspective: 500px;
        color: #444;
    }


    #celebrateTagline span{
        display: inline-block;
        position: relative;
        cursor: default;
        border-style: solid;
        border-width: 0;
        border-bottom-width: 1px;

        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }
    #banner:not(.reddish) #celebrateTagline span{
        color: #777;
    }

    #banner:not(.reddish) #celebrateTagline span:hover{
        color: #000;
    }

    #celebrateTagline span:hover{
        color: #f9f9f9;
    }

    #celebrateTagline span:not(:first-child){
        /*margin-left: 40px;*/
    }

    #celebrateTagline span:after{
        content: attr(message);
        position: absolute;
        background: #f9f9f9;
        padding: 12px 16px;
        left: 0;
        top: 130%;
        border-radius: 3px;
        box-shadow: 0 0 5px rgba(0,0,0,0.16);
        font-size: 0.9em;
        transform: rotateX(-15deg);
        opacity: 0;
        pointer-events: none;
        color: #333;
        font-family: "Times New Roman";
        letter-spacing: 1px;
        line-height: 25px;
        min-width: 120px;

        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }

    #celebrateTagline span:hover:after{
        transform: none;
        opacity: 1;
        pointer-events: auto;
    }
</style>

<div id="banner" style="" class="reddis">
    @include('landing.banner.nav')
    <div class="faded-bg" style="opacity: 0.1;background-image:url({{asset('images/fans/fan1.jpg')}});"></div>
    <div class="layout vertical center">
        <h2>CELEBRATING ARTISTRY</h2>
        <p id="celebrateTagline">
            <span message="Reach your favorite artists or fanbase.">REACH</span>,
            <span message="Connect with people who share your art interests.">CONNECT</span> &
            <span message="Join us in celebrating generations of amazing artists.">CELEBRATE</span>
        </p>
    </div>
</div>