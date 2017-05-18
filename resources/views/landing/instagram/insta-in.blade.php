<style>
    #instaOuter{
        /*height: 350px;*/
        overflow: hidden;
        width: 130%;
        position: absolute;
        top: -24%;
        left: 0;
    }

    #instaOuter #instaBg{
        -webkit-transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        -moz-transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        -ms-transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        -o-transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        transform: translate3d(-18%, 0, -250px) rotateY(-12deg);

        background: #eadeca;
        background-image: -webkit-linear-gradient(left, #fff4e2, #ede0ca);
        background-image: -o-linear-gradient(left, #fff4e2, #ede0ca);
        background-image: linear-gradient(to right, #fff4e2, #ede0ca);
        padding: 50px;
    }

    #instaOuter .insta-card{
        background-color: #eee;
        border: 26px double #fff;
        /*border: 26px solid #fff4e2;*/
        box-shadow: 12px 12px 23px rgba(0,0,0, 0.3);
        margin: 20px;
        width: 210px;
        height: 210px;
        background-position: center;
        -webkit-background-size: cover;
        background-size: cover;
    }

    #instaOuter .insta-card:nth-child(7),
    #instaOuter .insta-card:nth-child(8){
        border-right:none;
        /*margin-right: -9px;*/
    }

    #instaOuter .insta-card:nth-child(8),
    #instaOuter .insta-card:nth-child(9){
        border-left:none;
        /*margin-left: -9px;*/
    }

    #instaOuter .insta-card img{
        /*border: 3px groove #fff;*/
        width: 100%;
    }
</style>

<div id="instaOuter">
    <div id="instaBg" class="layout justified wrap">
        @for($i = 1; $i < 26; $i++)
            <div class="insta-card layout center-center" style="background-image: url({{asset('images/instagram/'.$i.'.jpg')}})">
                {{--<img src="{{asset('images/instagram/'.$i.'.jpg')}}" alt="">--}}
            </div>
        @endfor
    </div>
</div>