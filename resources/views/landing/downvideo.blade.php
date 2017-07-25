<style>
    #downVideo{
        height: 400px;
        overflow: hidden;
    }

    #downVideo video{
        position: absolute;
        width: 100%;
        /*height: 100%;*/
    }

    /*#downVideo img{*/
        /*z-index: 1;*/
    /*}*/

    #downVideo #text{
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        color: #fff;
    }

    #text h2{
        text-transform: uppercase;
        font-family:"Gotham bold";
        font-size: 3.5em;
    }

    #text p{
        text-align: center;
        max-width: 600px;
        margin-top: 15px;
        font-size: 1.5em;
    }
</style>

<div id="downVideo" class="layout center-center">
    <video autoplay loop src="{{asset('images/1.mp4')}}"></video>
    <div id="text" class="layout vertical center-center">
        <h2>Showcase</h2>
        <p>
            Here's a feature video of some of the best works we've come across.
        </p>
    </div>
</div>