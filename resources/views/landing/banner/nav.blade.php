<style>
    #bannerTopBar{
        /*position: relative;*/
        /*padding: 30px;*/
        padding: 24px 42px;
        z-index: 99;
        /*background-color: #ff5555;*/
        /*position: fixed;*/
        width: 100%;
    }

    #bannerTopBar.light{
        /*background: #fefefe;*/
        background: #ff4d4d;
    }

    #bannerTopBar #title {
        /*margin-left: 40px;*/
        font-size: 32px;
        /*font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;*/
    }

    #bannerTopBar #links, #bannerTopBar #authOptions{
        /*background-color: greenyellow;*/
        margin-top: 10px;
    }

    #bannerTopBar #links > a, #bannerTopBar #authOptions a{
        padding: 12px 20px;
        font-family: "Gotham medium";
        font-size: 0.9em;
        font-weight: 200;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        color: #000;
    }

    #bannerTopBar #authOptions a{
        background-color: rgba(0,0,0,0.05);
        /*color: #ffbcbc;*/
        /*color: #333;*/
    }

    #bannerTopBar #authOptions a:hover{
        background-color: rgba(0,0,0,0.1);
        color: #000;
    }

    #bannerTopBar #links > a:hover{
        background-color: rgba(0,0,0,0.05);
    }

    #bannerTopBar #topBar:not(.light) #links > a,
    #bannerTopBar #topBar:not(.light) #authOptions > a,
    #bannerTopBar #topBar:not(.light) #title{
        color: #333;
    }

    #bannerTopBar #topBar:not(.light) #title{
        color: #626262;
        color: #000 !important;
    }
</style>

<div id="bannerTopBar" class="layout center justified">
    <div id="title" class="layout center" style="color: #555">
        {{--<div id="logo"></div>--}}
        {{--Love Arts--}}

        <img src="{{asset('images/logoactive.png')}}" alt="" style="height: 60px">
    </div>

    <div id="links" class="layout center">
        <a href="#home">HOME</a>
        <a href="#about">ABOUT</a>
        {{--<a href="#what">WHAT WE DO</a>--}}
        <a href="#artists">ARTISTS</a>
        <a href="#me">MEDIA</a>
        <a href="#artists">INFO KITAA</a>
        <a href="#contact">CONTACTS</a>
    </div>

    <div id="authOptions" class="layout center">
        <a href="#">LOGIN</a>
    </div>
</div>