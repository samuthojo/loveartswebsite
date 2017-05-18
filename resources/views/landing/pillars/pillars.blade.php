<style>
    #pillars{
        min-height: 100vh;
        background-color: #fff;
        /*padding:  14em;*/
        padding-top: 6em;
    }

    #pillars #text{
        padding: 0 14em;
    }

    #pillars h2{
        font-family: "Gotham ultra", sans-serif;
        font-size: 3.2em;
        letter-spacing: 10px;
        margin-bottom: 0.2em;
    }

    #pillars p{
        font-family: "Gotham light", sans-serif;
        font-size: 1.8em; line-height: 1.4em;
    }

    .inspire-shot{
        background-color: #999;
        /*background-color: var(--app-accent1-color);*/
        {{--background-image: url({{asset('images/banner/p2.png')}});--}}
        width: calc(33.333% - 2px);
        height: 300px;
        margin: 1px;
        background-image: url({{asset('images/p3s.png')}});
        background-size: 70px;
        background-position: center;
        position: relative;
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
        background-size: contain;
        background-position: top;
        background-repeat: no-repeat;
    }

    #pillars .inspire-shot:nth-of-type(1),
    #pillars .inspire-shot:nth-of-type(2),
    #pillars .inspire-shot:nth-of-type(4){
        overflow: hidden;
    }

    #pillars .inspire-shot:nth-of-type(1) .pillar-image{
        transform: translate3d(-25%, 20%, 0);
    }

    #pillars .inspire-shot:nth-of-type(2) .pillar-image{
        transform: translate3d(30%, 20%, 0);
    }

    #pillars .inspire-shot:nth-of-type(3) .pillar-image{
        transform: translate3d(30%, -20%, 0);
    }

    #pillars .inspire-shot:nth-of-type(4) .pillar-image{
        transform: translate3d(0, 20%, 0);
    }

    .inspire-shot .pillar-text{
        /*background-color: rgba(0,0,0,0.6);*/
    }

    .inspire-shot .pillar-name{
        color: #fefefe;
        /*color: #0d3625;*/
        font-size: 2.5em;
        font-family: "Calson", serif;
    }

    .inspire-shot .pillar-info{
        display: none;
        text-align: center;padding: 0.3em;font-size: 0.45em; font-family: 'Gotham light', serif; color: #ccc
    }
</style>

<div id="pillars">
    <div id="text">
        <h2>OUR PILLARS</h2>
        <p>We are passionate about all things Art, but currently we are most focused on....</p>
    </div>

    <div style="margin-top: 75px; position: relative;">
        <div id="images" class="layout wrap" style="background:#fff;">
            <?php
            $pillars = ["MUSIC", "PHOTOGRAPHY", "DANCE", "FASHION", "DRAMA", "POETRY"];
            $taglines = [
                "Carefully arranged melodies paired with amazing voices that make you want to just let go an get lost into their",
                "Priceless moments captured by keen eyes to keep them alive forever just for you.",
                "Pure emotion expressed in cleverly created movements that will leave you in absolute awe.",
                "Not just a cut here and a cut there but meaningful messages and personalities woven into being.",
                "Staging out innermost feelings through very well written stories that will captivate you",
                "Telling untold stories and expressing deep passionate feelings through rhymic mastery."
            ]
            ?>
            @for($i = 0; $i < count($pillars); $i++)
                @if($i < 5)
                    <div class="inspire-shot">
                        <div class="pillar-image" style="background-image: url({{'images/pillars/im'. (($i % 9) + 1) .'.png'}});"></div>
                        <div class="pillar-text layout vertical center-center">
                            <div class="pillar-name">
                                {{$pillars[$i]}}
                            </div>
                            <div class="pillar-info">
                                {{str_limit($taglines[$i], 120)}}
                            </div>
                        </div>
                    </div>
                @endif
            @endfor

            <div class="inspire-shot" style="background: #f5f5f5;">
                <div id="" class="layout vertical center-center" style="height: calc(100% - 20px); font-size: 3em; backgroun: #f5f5f5; margin: 10px; font-famil: Verdana; font-weight: bold;">
                    <span style="font-size: 0.65em; font-weight: 400; letter-spacing: 4px">LEARN</span>
                    MORE
                </div>
            </div>
        </div>
    </div>
</div>