<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<style>
    #bottomContent{
        position: relative;
    }
    #bottomContent .faded-bg{
        background-position: top;
{{--        background-image: url({{asset('images/fans/fan5.jpg')}});--}}
        opacity: 0.05;
    }
    #connect{
        padding: 90px 0;
        /*background-color: #f9f9f9;*/
    }

    #connect h2{
        color: #626262;
        font-size: 2.5em;
        letter-spacing: 10px;
        font-family: 'Gotham ultra', sans-serif;
        margin-bottom: 0.4em;
    }

    #connect p{
        font-family:'Gotham light', sans-serif;
        font-size: 1.4em;
        margin-bottom: 0.3em;
    }

    #connect #socialIcons{
        /*display: inline-block;*/
        margin-top: 10px;
    }

    #connect #socialIcons .social-icon{
        display: -ms-inline-flexbox;
        display: -webkit-inline-flex;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100px;
        border-radius: 5px;
        padding: 25px 0;
        box-sizing: content-box;

        -webkit-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        -ms-transition: all 0.25s ease-out;
        -o-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
    }

    #connect #socialIcons .social-icon:hover{
        /*background-color: #fefefe;*/
        /*box-shadow: 0 0 15px rgba(0,0,0,0.16);*/

        /*-webkit-transform: scale(1.04);*/
        /*-moz-transform: scale(1.04);*/
        /*-ms-transform: scale(1.04);*/
        /*-o-transform: scale(1.04);*/
        /*transform: scale(1.04);*/
    }

    #connect #socialIcons .social-icon .icon{
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-bottom: 20px;
        font-size: 1.5em;
        color: #fefefe;
    }

    #connect #socialIcons .social-icon:not(:hover) .icon{
        /*background-color: #e4e4e4 !important;*/
        /*color: #555 !important;*/
        -webkit-filter: grayscale(0.6);
        filter: grayscale(0.6);

        -webkit-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        -ms-transition: all 0.25s ease-out;
        -o-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
    }

    #connect #socialIcons .social-icon .icon.instagram{
        background-color: #e4e4e4;
        background: -webkit-radial-gradient(circle farthest-corner at 35% 90%, #fec564, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(circle farthest-corner at 0 140%, #fec564, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, rgba(0, 0, 0, 0)), -webkit-linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
        background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, rgba(0, 0, 0, 0) 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, rgba(0, 0, 0, 0)), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
    }

    #connect #socialIcons .social-icon .text{
        opacity: 0;
        display: none;
    }

    #connect #socialIcons .social-icon:hover .text{
        opacity: 1;
        -webkit-transition: opacity 0.35s;
        -moz-transition: opacity 0.35s;
        -ms-transition: opacity 0.35s;
        -o-transition: opacity 0.35s;
        transition: opacity 0.35s;
    }

    #footer{
        height: 100px;
        background-color: #000;
        font-size: 1.3em;
        color: #fefefe;
        font-family: "Gotham ultra", sans-serif;
    }
</style>

<div id="bottomContent">
    <div class="faded-bg"></div>
    <div id="connect" class="layout vertical center-center">
        <h2>CONNECT WITH US</h2>
        <p>Let us guide you through the beauty of art an those who create it.</p>

        <div id="socialIcons">
            <a target="_blank" href="https://www.facebook.com/Love-Arts-Tz-305790052859478/" class="social-icon">
                <span class="icon layout center-center" style="background: #3b5998;">
                    <span class="fa fa-facebook"></span>
                </span>
                <span class="text">FACEBOOK</span>
            </a>

            <a target="_blank" href="https://www.instagram.com/loveartstz/" class="social-icon">
                <span class="icon instagram layout center-center">
                    <span class="fa fa-instagram"></span>
                </span>
                <span class="text">INSTAGRAM</span>
            </a>

            <a href="https://twitter.com/loveartstz" class="social-icon">
                <span class="icon layout center-center" style="background: #55acee;">
                    <span class="fa fa-twitter"></span>
                </span>
                <span class="text">TWITTER</span>
            </a>

            <a target="_blank" href="https://www.youtube.com/channel/UCBMjLBtbis2kMWZjTKMiMPg" class="social-icon">
                <span class="icon layout center-center" style="background: #e82117;">
                    <span class="fa fa-youtube-play"></span>
                </span>
                <span class="text">YOUTUBE</span>
            </a>
        </div>
    </div>
    <div id="footer" class="layout center-center" style="">
        LOVE ARTS
    </div>
</div>