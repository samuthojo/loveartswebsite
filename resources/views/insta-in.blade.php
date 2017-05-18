<style>
    #instagramElement{
        perspective: 1000px;
        position: relative;
        height: 350px;
        overflow: hidden;
        background: #fff;

        background: #eadeca;
        background-image: -webkit-linear-gradient(left, #fff4e2, #ede0ca);
        background-image: -o-linear-gradient(left, #fff4e2, #ede0ca);
        background-image: linear-gradient(to right, #fff4e2, #ede0ca);
    }
    #instaOuter{
        /*height: 350px;*/
        overflow: hidden;
        width: 130%;
        position: absolute;
        top: -24%;
        left: 0;
    }

    #instaOuter #instaBg{
        /*max-width: 980px;*/
        -webkit-transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        -moz-transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        -ms-transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        -o-transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        transform: translate3d(-18%, 0, -250px) rotateY(-12deg);
        padding: 50px;
        padding-bottom: 0;
    }

    #instaOuter .insta-card{
        background-color: #eee;
        /*border: 26px solid #fff4e2;*/
        border-color: #fff;
        border-width: 26px;
        border-style: solid;
        border-style: groove;
        border-style: double;
        box-shadow: 12px 12px 23px rgba(0,0,0, 0.3);
        margin: 20px;
        width: 210px;
        height: 210px;
        background-position: center;
        -webkit-background-size: cover;
        background-size: cover;
    }

    #instaOuter .insta-card:nth-child(9),
    #instaOuter .insta-card:nth-child(15){
        border-right:none;
        margin-right: -9px;
    }

    #instaOuter .insta-card:nth-child(10),
    #instaOuter .insta-card:nth-child(16){
        border-left:none;
        margin-left: -9px;
    }


    #instaOuter .insta-card:nth-child(9),
    #instaOuter .insta-card:nth-child(10)
    {
        border-bottom:none;
        /*margin-bottom: -9px;*/
        margin-top: 29px;
    }

    #instaOuter .insta-card:nth-child(15),
    #instaOuter .insta-card:nth-child(16){
        border-top:none;
        margin-top: 11px;
    }

    #instaOuter .insta-card img{
        /*border: 3px groove #fff;*/
        width: 100%;
    }
</style>

<div id="instaOuter">
    <?php
        $links = [
            "BBZjYWpBfvV",  "BEVwqwvhft_", "BEK_2HEhfjI", "BDC-l3rBfqp", "BChkLOvBfsl", "BB4T9aGhflv",
            "BDcnZZKhfv-", "BC0FyzAhfsB", "BEG2RBjBfr8", "BEG17IRhfrM", "BC0Fuhghfr4", "BB7OUqBhftE",
            "BC72_zRBfv9", "BDfJwoThfqQ", "BEG1dXEhfqQ", "BEG1dXEhfqQ", "BEN3F6aBfld", "BBhrs0Chfq_",
            "BFBWGzThfkd", "BCsVtPZBfgA", "BCsWCNmhfg3", "BFBR1wgBftJ", "BCzYdFlBfvd", "BCAjxQzBfoc",
            "BE6Jupchfum", "BDvzdathfpo", "BCuWIYOBfsB", "BCuWZ-VhfsM", "BCH5S1OBftB", "BB4UG2Rhfl_"
        ]
    ?>

    <div id="instaBg" class="layout justified wrap">
        @for($i = 1; $i < 31; $i++)
            <a target="_blank" href="https://www.instagram.com/p/{{$links[$i - 1]}}/?taken-by=loveartstz" class="insta-card layout center-center" style="background-image: url({{asset('images/instagram/'.$i.'.jpg')}})">
                {{--<img src="{{asset('images/instagram/'.$i.'.jpg')}}" alt="">--}}
            </a>
        @endfor
    </div>
</div>