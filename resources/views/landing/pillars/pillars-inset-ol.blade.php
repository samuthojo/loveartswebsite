<style>
    #pillars{
        min-height: 100vh;
        background-color: #fff;
        padding: 6em 14em;
        padding: 8em 6em;
        padding-left: 3em;
        /*padding-bottom: 0;*/
    }

    #pillarLinks{
        display: none;
        margin-top: 16px; margin-bottom: 12px
    }

    #pillarLinks a{
        margin-bottom: 8px;
        opacity: 0.8;
    }

    #pillarLinks a.active{
        color: var(--app-main-color)
    }

    #pillarLinks + a{
        display: inline-block;
        margin-top: 10px;
        font-size: 1em;
        font-family: 'Calson', serif;
        color: var(--app-main-color);
        letter-spacing: 2px;
    }

    #pillars #text{
        padding: 1.2em;
        margin-right: 3em;
    }

    #pillars h2{
        font-family: "Gotham ultra", sans-serif;
        font-size: 3.2em;
        /*font-size: 1.2em;*/
        letter-spacing: 10px;
        margin-bottom: 0.2em;
    }

    #pillars p{
        font-family: "Gotham light", sans-serif;
        font-size: 1.8em; line-height: 1.4em;
        font-size: 1.1em; line-height: 1.2em;
    }

    .inspire-shot{
        background-color: var(--app-contrast-color);
        /*background:  #ede0ca;*/
        background: #fefefe;
        {{--background-image: url({{asset('images/p3s.png')}});--}}
        background-size: 70px;
        background-position: center;
        width: calc(33.333% - 2px);
        height: 300px;
        margin: 1px;
        position: relative;
        overflow: hidden;
    }

    .inspire-shot > div{
        font-family: "Calson", serif;
    }

    .inspire-shot .pillar-image,
    .inspire-shot .pillar-text{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

        color: #eee;
        color: #0d3625;
        color: #000;

        -webkit-transition: transform 0.25s ease-out;
        -moz-transition: transform 0.25s ease-out;
        -ms-transition: transform 0.25s ease-out;
        -o-transition: transform 0.25s ease-out;
        transition: transform 0.25s ease-out;
    }

    /*#pillars .inspire-shot:nth-of-type(1),*/
    /*#pillars .inspire-shot:nth-of-type(2),*/
    /*#pillars .inspire-shot:nth-of-type(3),*/
    /*#pillars .inspire-shot:nth-of-type(4),*/
    /*#pillars .inspire-shot:nth-of-type(5),*/
    /*#pillars .inspire-shot:nth-of-type(6){*/
    /*overflow: hidden;*/
    /*}*/
    #holler:hover .inspire-shot:not(:hover):not(.active){
        /*opacity: 0.6;*/
    }

    #pillars .inspire-shot:nth-of-type(1) .fill-above{
        background: rgba(73, 45, 52, 1);
        background: #96ADC8;
        opacity: 0.3;
        /*background: rgba(221, 169, 120, 0.33);*/
    }

    #pillars .inspire-shot:nth-of-type(2) .fill-above{
        background: rgba(59, 68, 92, 1);
        background: #FFC857;
        opacity: 0.2;
    }

    #pillars .inspire-shot:nth-of-type(3) .fill-above{
        background-color: rgba(255, 209, 111, 0.3);
        background: rgba(76, 218, 179, 1);
        background: rgb(243, 152, 95);
        opacity: 0.2;
    }

    #pillars .inspire-shot:nth-of-type(4) .fill-above{
        background-color: rgba(255, 209, 111, 0.3);
        background: rgba(213, 62, 58, 1);
        background: rgba(196, 45, 117, 1);
        background: rgb(229, 175, 141);
        opacity: 0.3;
    }

    #pillars .inspire-shot:nth-of-type(5) .fill-above{
        /*background-color: rgba(255, 209, 111, 1);*/
        background: rgba(204, 147, 26, 1);
        background: rgb(209, 78, 78);
        opacity: 0.3;
    }

    #pillars .inspire-shot:nth-of-type(6) .fill-above{
        background-color: rgba(255, 209, 111, 0.3);
        background: rgb(64, 186, 153);
        background: rgb(70, 128, 195);
        opacity: 0.2;
    }

    #pillars .inspire-shot .fill-above{
        opacity: 1 !important;
        background: rgba(9, 5, 1, 0.5) !important;
        -webkit-transition: transform 0.25s ease-out, opacity 0.25s ease-out;
        -moz-transition: transform 0.25s ease-out, opacity 0.25s ease-out;
        -ms-transition: transform 0.25s ease-out, opacity 0.25s ease-out;
        -o-transition: transform 0.25s ease-out, opacity 0.25s ease-out;
        transition: transform 0.25s ease-out, opacity 0.25s ease-out;
    }

    .inspire-shot .pillar-text{
        background-position: center;
    }

    .inspire-shot .pillar-name{
        color: #fff;
        font-size: 1.8em;
        font-family: "Calson", serif;
        text-align: center;
    }

    .inspire-shot .pillar-info{
        display: none;
        text-align: center;padding: 0.3em;font-size: 0.45em; font-family: 'Gotham light', serif; color: #ccc
    }

    .inspire-shot:hover .fill-above{
        /*opacity: 0 !important;*/
    }

    .inspire-shot:hover .pillar-image{
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1);
    }

    #pillars .inspire-shot:hover .pillar-name,
    #pillars .inspire-shot.active .pillar-name{
        color: #fff;
    }

    #pillars.view-single #fillAbove, #pillars.view-single #pillarImages,
    #pillars:not(.view-single) #pillarInfo{
        display: none;
    }

    #holler #fillAbove{
        background: #fff;
        /*background: $000px;*/
        pointer-events: none; z-index: 1;
        opacity: 0;
    }

    #holler #fillAbove.partial-visible{
        opacity: 0.6;
    }

    #holler #fillAbove.visible{
        opacity: 1;
    }

    #pillarInfo{
        /*display: none;*/
    }

    #pillarInfo .outer{
        position: relative;
        z-index: 1;
        height: 200px;
        float: left;
        margin-right: 16px;
        shape-outside: inset(0 120px 100px 0 0);
        /* shape-outside: inset(top right bottom left border-radius); */
    }

    #pillarInfo .outer + div{
        padding: 6px 20px;
        padding-left: 0;
        /*opacity: 0.2;*/
    }

    #holler{
        margin-to: 75px; position: relative; min-width: 70%;
    }

    #holler.no-ov{
        overflow: hidden;
    }
</style>

<?php
$pillars = ["MUSIC", "PHOTOGRAPHY", "MEDIA", "DRAMA", "DANCE", "FASHION", "POETRY", "BRANDING & DESIGN", "PAINTING"];
$taglines = [
    "Music is a powerful tool that once we use it positively it can change lives. For us, music  is beyond entertainment, beyond the melody, kick and snare, it is without a doubt a language we speak, an overflow of lessons learnt, an outlet and channel to eloquently lay out what is in our hearts. This is not just saying anything but message beefed up with content is meant to benefit and influence this generation and generation to come.",
    "There are moments in life worth remembering, memories are worth keeping, we are passionate in  capturing these moments, we shoot with heart and soul, visually telling stories that are timeless, We aim to preserve our identity by achieving our past, celebrating and correcting while defining where we ought to be through our images. We are going to use Photography Exhibition and Photo Journalism to create stories that educates, inspire, entertain and empower people in their lives.",
    "Our media unveils possibilities and beauty surrounding community; we aim to create media with content that inspires individuals to change for the better, along with that document, our on-going educative, entertaining and energetic projects. Our media reaches our community’s diverse audience through our various media channels which are TV documentaries/programmes, TV drama, radio drama, radio talk show, educative comics, magazine and our interactive social media. Through our Media, we are going to create various platforms for youth to showcase their gifts and talents and also connecting Tanzanian Artists with Arts opportunities and the market place.",
    "Our drama geared towards change, we look at the situation as it is and think what it ought to be and we bring it live on stage with combination of humour, tragedy and tension. Well tell stories that we relate to, not only for the sake of entertaining but stories that bring solutions. We have deliberately chosen drama that combines music, dance, and poetry- “Theatre musicals’’ to tell stories, It carries so much power and comes out stronger when character involvement is in place. ",
    "Our movements tell stories; we speak our identity while celebrating our culture. We dance to entertain, and celebrate the glory of our creator. We dance to bring out an ideal vision of what our society ought to be, we dance to educate and liberate, and with every step we take we speak freedom, hope and unit. We dance to heal, reconcile and to bring joy. We dance of our love for others. With our Dance TV programs like Cheza, we envision to transform mind-sets and make dance a respectable career.",
    "Our fashion house is our identity, our pride. A trendy, classy and authentic African collection, our clothesline and accessories are entrenched to our dear African stories, the colourful choices of our designs speaks of our people and through our design we speak of African beauty and create an impression on how African manpower can be horned effectively to marry the resources that our countries are blessed with for the prosperity of our nations. In fashion we are going to do Khanga Competition “Fashion for Cause Campaign” to bring about socio-economic and political development in Tanzania.",
    "Words are powerful, words can destroy or can create we choose the latter. Using the power of words, we intensely express our feeling and ideas by use of distinctive style and rhythm. For us poetry is a means we use to bring out the quality of God's creativity, beauty and most definitely, his love.",
    "Adding value to others by helping them to create a distinctive appealing image to build a strong corporate and events, brand is engraved in our DNA, Brands that help develop and maintain positive relationships with clients is what we are all about. As the market is very competitive, our “in-your face” concepts brings about the desires results that assists our clients to remain relevant, productive and effective in the market.",
    "We use arts and creativity to draw bigger picture in people’s lives and paint colour of hope, unity, self-love and love for the country. To us it is not about the beauties of the artistic work but also how powerful and impactful the work is to the society, appealing to the eyes of our souls."
]
?>

<div id="pillars" class="layout cente view-singl">
    <div id="text" class="flex">
        <h2>OUR
            <span class="layout vertical">
                PILLARS
            </span>
        </h2>
        <p style="margin-bottom: 10px;">We are passionate about all things Art, but currently we are most focused on....</p>
        <div id="pillarLinks" class="layout vertical">
            <a href="javascript:void(0);" class="active view-pillar" data-for="ALL">ALL</a>
            @for($i = 0; $i < count($pillars); $i++)
                <a href="javascript:void(0);" class="view-pillar" data-for="{{$pillars[$i]}}">{{$pillars[$i]}}</a>
            @endfor
        </div>
        {{--<a href="javascript:void(0);">LEARN MORE</a>--}}
    </div>

    <div id="holler">
        <div id="fillAbove" class="fill-above"></div>
        <div id="pillarImages" class="layout wrap" style="background:#fff;">
            @for($i = 0; $i < count($pillars); $i++)
                @if($i < 9)
                    <a href="javascript:void(0);" class="inspire-shot view-pillar" data-for="{{$pillars[$i]}}">
                        <div class="pillar-image" style="background-image: url({{'images/pillars2/im'. (($i % 9) + 1) .'.jpg'}});"></div>
                        <div class="fill-above"></div>
                        <div class="pillar-text layout vertical center-center">
                            <div class="pillar-name">
                                {{$pillars[$i]}}
                            </div>
                            <div class="pillar-info">
                                {{str_limit($taglines[$i], 120)}}
                            </div>
                        </div>
                    </a>
                @endif
            @endfor

            {{--<div class="inspire-shot" style="background: #f5f5f5;">--}}
            {{--<div id="" class="layout vertical center-center" style="height: calc(100% - 20px); font-size: 3em; backgroun: #f5f5f5; margin: 10px; font-famil: Verdana; font-weight: bold;">--}}
            {{--<span style="font-size: 0.65em; font-weight: 400; letter-spacing: 4px">LEARN</span>--}}
            {{--MORE--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    {{--<hr style="border-width: 0; border-bottom-width: 1px; border-color: #ccc; width: 15em; margin: auto; margin-top: 6em;">--}}
</div>
