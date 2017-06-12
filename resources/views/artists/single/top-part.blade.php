<style>
    #artist #backBg{
        background: #f0f0f0;
    }

    #artist #artistName{
        padding: 6em 7em;
    }

    #artist #artistName h1, #artist #artistName p{
        color: #000;
    }

    #artist #artistName h1{
        font-family: "Gotham ultra", sans-serif;
        font-size: 5em;
        line-height: 1.2em;
        letter-spacing: 4px;
    }

    #artist #artistName P{
        font-family: "Gotham light", sans-serif;
        font-size: 2em;
        line-height: 1.6em;
        letter-spacing: 2px;
    }

    #artist #artistSocials{
        /*display: none;*/
        padding-top: 20px;
    }

    #artist #artistSocials a{
        text-decoration: none;
        color: inherit;
        padding: 20px;
        font-size: 24px;
        /*background: #333;*/
        color: #333;
        /*margin-right: 10px;*/
    }

    #artist #artistSocials a:hover{
        background: #f8f8f8;
    }

    #artist #artistTopPictures{
        position: absolute;
        width: 100%;
        max-width: 700px;
        height: 100%;
        top: 0;
        right: 0;
        /*margin-left: auto;*/
        background: #333333;
    }

    #artist #coverPhoto{
        height: 100%;
        background: #333;
        /*box-shadow: 0 0 34px rgba(0,0,0,0.2);*/
    }

    #artist #instaThumbs{
        display: none;
        margin-top: 10px;
        overflow: hidden;
        margin-right: 50px;
    }

    #artist #instaThumbs #thumbsList{
        padding-left: 10px;
    }

    #artist #instaThumbs .insta-thumbnail{
        background: #ddd;
        min-width: 120px;
        width: 120px;
        height: 120px;
        margin-right: 10px;
    }
</style>
<div class="container">
    <div id="backBg" class="layout">
        <div id="artistTopPictures">
            <div id="coverPhoto" style="position: relative; overflow: hidden;">
                <img src="{{asset('images/asac.jpg')}}" alt="" style="width: 100%;height: 100%;">
                <div class="fill-above" style="background: #b14b4b; opacity: 0.7;"></div>
            </div>
        </div>

        <div id="artistName">
            {{--<h1>Anelinikisra Masingelirwe</h1>--}}
            <h1>Anne Masige</h1>
            <p>MUSICIAN</p>
            <div id="artistSocials" class="layout">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
        </div>
    </div>
</div>