<style>
    #pillars{
        min-height: 100vh;
        background-color: #fff;
        padding: 8em;
    }

    #pillars #text{
        width: 25%;
        max-width: 25%;
        padding-right: 1em;
        padding-bottom: 1.5em;
        justify-content: center;
    }

    #pillars h2{
        font-family: "Gotham ultra", sans-serif;
        font-size: 2.6em;
        margin-bottom: 0.2em;
        color: #555;
    }

    #pillars p{
        font-family: "Gotham light", sans-serif;
        font-size: 1.1em;
        /*line-height: 1.2em;*/
    }

    .inspire-shot{
        background: #fefefe;
        background-size: 70px;
        background-position: center;
        width: calc(33.333% - 2px);
        height: 220px;
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
        color: #000;

        -webkit-transition: transform 0.25s ease-out;
        -moz-transition: transform 0.25s ease-out;
        -ms-transition: transform 0.25s ease-out;
        -o-transition: transform 0.25s ease-out;
        transition: transform 0.25s ease-out;
    }

    #pillars .inspire-shot:nth-of-type(1) .fill-above{
        background: rgba(73, 45, 52, 1);
        background: #96ADC8;
        opacity: 0.3;
    }

    #pillars .inspire-shot:nth-of-type(2) .fill-above{
        background: #FFC857;
        opacity: 0.2;
    }

    #pillars .inspire-shot:nth-of-type(3) .fill-above{
        background: rgb(243, 152, 95);
        opacity: 0.2;
    }

    #pillars .inspire-shot:nth-of-type(4) .fill-above{
        background: rgb(229, 175, 141);
        opacity: 0.3;
    }

    #pillars .inspire-shot:nth-of-type(5) .fill-above{
        background: rgb(209, 78, 78);
        opacity: 0.3;
    }

    #pillars .inspire-shot:nth-of-type(6) .fill-above{
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
        font-size: 1.6em;
        font-family: "Calson", serif;
        text-align: center;
        padding: 20px;
    }

    .inspire-shot .pillar-info{
        display: none;
        text-align: center;padding: 0.3em;font-size: 0.45em; font-family: 'Gotham light', serif; color: #ccc
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

    #pillarList{
        min-width: 75%;
    }

    #pillarListFull .inspire-shot{
        width: calc(25% - 2px);
        min-width: calc(25% - 2px);
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

<div id="pillars">
    <div class="layout">
        <div id="text" class="layout vertical">
            <h2>OUR
                <span class="layout vertical">
                PILLARS
            </span>
            </h2>
            <p style="margin-bottom: 10px;">We are passionate about all things Art, but currently we are most focused on....</p>
            {{--<a href="javascript:void(0);">LEARN MORE</a>--}}
        </div>

        <div id="pillarList" class="layout">
            @for($i = 0; $i < 3; $i++)
                <a href="javascript:void(0);" class="inspire-shot">
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
            @endfor
        </div>
    </div>

    <div id="pillarListFull" class="layout wrap">
        @for($i = 3; $i < 9; $i++)
            <a href="javascript:void(0);" class="inspire-shot">
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
        @endfor
    </div>
</div>