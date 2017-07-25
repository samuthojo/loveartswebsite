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
