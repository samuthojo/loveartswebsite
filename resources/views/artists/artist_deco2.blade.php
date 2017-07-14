<style>
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
<div class="cd layout center-center">
    <div class="hole" style="background-image: {{asset('images/artists/im'.$artist->avatar())}});"></div>
</div>