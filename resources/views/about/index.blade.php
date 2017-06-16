@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #fff;
            padding-top: 0 !important;
        }

        #bannerTopBar{
            position: absolute !important;
            background-color: transparent;
            /*background-color: rgba(0,0,0,1);*/
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #bannerTopBar.black{
            background-color: #000;
        }

        #bannerTopBar a.active{
            background-color: rgba(255, 255, 255, 0.9) !important;
            color: #000 !important;
        }

        #about{
            position: relative;
        }

        #about section{
            position: relative;
            overflow: hidden;
            color: #000;
        }

        #about section.fill{
            height: 100vh;
        }

        #about section img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0.1;
            pointer-events: none;
        }

        #about section .text{
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
        }

        #about section h1{
            font-size: 4.5em;
            font-family: "Gotham ultra", sans-serif;
            padding-top: 75px;
            margin-left: 160px;
            margin-bottom: 40px;
            /*text-transform: uppercase;*/
        }
        #about section h1.spaced{
            letter-spacing: 0.125em; line-height: 1;
        }

        #about section .atop{
            font-size: 0.25em;
            font-family: "Gotham medium", sans-serif;
            display: block;
            letter-spacing: 0;
            color: #ff4343;
        }

        #about section.white{
            color: #fff;
        }

        #about section.light h1{
            font-family: "Gotham light", sans-serif;
            font-weight: 100;
        }

        #aboutUsText{
            margin-left: auto;
            padding: 0 5em;
            font-size: 1.3em;
            line-height: 1.3em;
            margin-top: 1em;
            background: #f0;
        }

        #visionMission{
            /*padding: 8em 4em;*/
        }

        #vision, #mission{
            height: 100%;
            min-width: calc(50% - 30px);
            max-width: calc(50% - 30px);
            text-align: center;
        }

        #vision h2, #mission h2{
            padding-top: 0.3em;
            font-size: 1.5em;
            font-family: "Gotham ultra", sans-serif;
            margin-bottom: 20px;
        }

        #vision p, #mission p{
            font-size: 2.3em;
            font-family: "Gotham light", sans-serif;
            line-height: 1.6em;
            padding: 0 1em;
        }

        #valuesObjectives{
            /*padding: 5em;*/
        }

        #values, #objectives{
            padding: 2em 5em;
            position: relative;
            /*min-width: calc(50% - 30px);*/
            min-width: 50%;
            padding-top: 4.3em;
        }

        #values{
            padding-bottom: 2em;
        }

        #objectives{
            /*padding-top: 2em;*/
        }

        #values h2, #objectives h2{
            /*padding: 0 2em;*/
            font-size: 5.5em;
            font-family: "Gotham ultra", sans-serif;
            position: absolute;
            top: 0.7em;
            /*color: #999;*/
            opacity: 0.1;
        }

        #values ul, #objectives ul{
            font-size: 1.5em;
            font-family: "Gotham light", sans-serif;
            padding: 1em 2em;
            /*background: rgba(255, 255, 255, 0.8);*/
        }

        #values ul{
            /*margin-left: auto;*/
            /*margin-right: 4em;*/
        }

        #objectives ul{
            /*margin-right: auto;*/
            /*margin-left: 4em;*/
        }

        #values ul li, #objectives ul li{
            list-style-type: circle;
            padding: 8px 0;
        }

        #ourFocus{
            /*text-align: center;*/
            padding: 6em 14em;
        }

        #ourFocus h3{
            text-transform: lowercase;
            font-family: "Gotham light", sans-serif;
            font-size: 2em;
            line-height: 1.5em;
            text-align: center;
            color: #777;
        }
    </style>

    <div id="about">
        <section id="why" class="fill white layout">
            <div class="text layout center-center" style="background: rgb(0,0,0); padding-right: 5em;">
                <h1 class="spaced">
                    <span class="atop">We are excited by</span>
                    PASSION<br>
                    IMPACT<br>
                    CHANGE<br>
                </h1>

                <div id="aboutUsText">
                    Art is a mighty force that if used effectively
                    will not only entertain, but also liberate, prompt and educate. <br>
                    We at Love Arts seek to motivate the creation of art that precedes positive change, art that like a wild
                    fire is impossible to predict, but if harnessed properly can pave way to an inspiring movement.
                </div>
            </div>
            <img src="{{asset('images/about/1.jpg')}}" alt="">
        </section>

        <section id="visionMission" class="layout center" style="background: #ff4343; padding: 6em 0;">
            <div id="mission" class="layout vertical center-center">
                <h2>OUR MISSION</h2>
                <p>
                    Nurture gifts and talents and raising standard of Art, in all of its forms to positively influence mind set.
                </p>
            </div>
            <hr style="height: 150px; margin: 0 30px; align-self: center; margin-bottom: 40px; border: none; border-right: 1px solid #333">
            <div id="vision" class="layout vertical center-center">
                <h2>OUR VISION</h2>
                <p>Impact culture and positively influence the nation through Arts.</p>
            </div>

            <img src="{{asset('images/about/new/2.jpg')}}" alt="">
        </section>

        <section id="ourGenesis" class="layout">
            <div id="youtueWord"></div>
            <div id="textualWord">
                Arts is the expression of human creativity and imagination, the very signature of the master artist- the creator of the
                universe. Arts is life and can define human interaction, as it has become a powerful tool in expressing thought and emotions.
            </div>
        </section>

        <section id="valuesObjectives" class="layout">
            <div id="values" class="layout center" style="background: #f2f2f2">
                <h2>core values</h2>
                <ul>
                    <li>Nurture creativity and Innovation</li>
                    <li>Adopt a problem solving approach</li>
                    <li>Focus on value addition in Arts</li>
                    <li>Respect for diversity in Artists creativity and opinion.</li>
                    <li>Radical transparency.</li>
                </ul>
            </div>
            {{--<hr style="height: 120px; margin: 0 30px; margin-top: 20px; align-self: center; margin-bottom: 40px; border: none; border-right: 1px solid #aaa">--}}
            <div id="objectives" class="layout horizontal-reverse center">
                <h2>objectives</h2>
                <ul>
                    <li>Champion the recognition of Arts as a sustainable career</li>
                    <li>Nurture artistic gifts and talents</li>
                    <li>Create an art platform for the advancement of Arts in Tanzania</li>
                    <li>Engage Arts as a driver for Tanzania’s development.</li>
                </ul>
            </div>
        </section>

        <section id="ourFocus" class="white layout center-center" style="background: #000;">
            <h3>
                CHAMPIONING THE RECOGNITION OF THE ARTS INDUSTRY IN TANZANIA AS AN INDUSTRY THAT CREATES
                SUSTAINABLE LIVELIHOODS AND IMPACTS LIVES POSITIVELY
            </h3>
            <img src="{{asset('images/about/new/3.jpg')}}" alt="">
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        var controller = new ScrollMagic.Controller();
        var instaParallaxScene = new ScrollMagic.Scene({
            triggerElement: '#instagramElement',
            triggerHook: 0.9,
            duration: '890'
        })
            .setClass()
            .setTween(TweenMax.to('#instaBg', 1, {y: '-60%', ease: Power0.easeNone}))
            .addTo(controller);
    </script>
@endsection