@extends('layouts.app-inner')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/about-ol.css')}}">
@endsection

@section('content')
    <style>
        @media all and (max-width: 768px){
            #about section.fill{
                height: 400px;
            }
            #about section h1{
                font-size: 3em;
                padding-left: 1.5em;
                padding-top: 0;
                margin-left: 0;
                margin-bottom: 0;
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

            #bannerTopBar{
                background-color: transparent !important;
            }

            #aboutUsText{
                display: none;
            }

            #visionMission .layout{
                /*display: none;*/
                flex-direction: column;
            }

            #visionMission hr{
                height: 0;
                width: 60%;
                margin: 30px 0;
                align-self: center;
                border-right: none;
                border-bottom: 1px solid rgba(0,0,0,0.3);
            }

            #vision, #mission{
                height: auto;
                max-width: calc(100% - 30px);
                text-align: center;
            }

            #vision h2, #mission h2{
                padding-top: 0.3em;
                font-size: 1.5em;
                font-family: "Gotham ultra", sans-serif;
                margin-bottom: 20px;
            }

            #vision p, #mission p{
                font-size: 1.3em;
                font-family: "Gotham light", sans-serif;
                line-height: 1.6em;
                padding: 0 1em;
            }





            #values h2, #objectives h2{
                font-size: 5.5em;
                font-family: "Gotham ultra", sans-serif;
                position: absolute;
                top: 0.7em;
                opacity: 0.1;
            }

            #values ul, #objectives ul{
                font-size: 1.5em;
                font-family: "Gotham light", sans-serif;
                padding: 1em 2em;
            }

            #values ul li, #objectives ul li{
                list-style-type: circle;
                padding: 8px 0;
            }





            #ourFocus{
                padding: 2em;
            }

            #ourFocus h3{
                font-family: "Gotham light", sans-serif;
                font-size: 2em;
                line-height: 1.5em;
                text-align: center;
                color: #777;
            }
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

        <section id="visionMission" class="layout center" style="position: relative;">
            <div style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; -webkit-background-size: cover;background-size: cover; background-image: url({{asset('images/about/new/2.jpg')}});"></div>

            <div class="layout" style="background: rgba(255, 67, 67, 0.9); padding: 6em 0;">
                <div id="mission" class="layout vertical center-center">
                    <h2>OUR MISSION</h2>
                    <p>
                        Nurture gifts and talents and raising standard of Art, in all of its forms to positively influence mind set.
                    </p>
                </div>
                <hr>
                <div id="vision" class="layout vertical center-center">
                    <h2>OUR VISION</h2>
                    <p>Impact culture and positively influence the nation through Arts.</p>
                </div>
            </div>
        </section>

        <section id="ourGenesis" class="layout">
            <div id="youtubeWord"></div>
            <div id="textualWord">
                Arts is the expression of human creativity and imagination, the very signature of the master artist- the creator of the
                universe. Arts is life and can define human interaction, as it has become a powerful tool in expressing thought and emotions.
            </div>
        </section>

        <section id="valuesObjectives" class="layou">
            <div id="values" style="background: #f2f2f2">
                <h2>core values</h2>
                <ul>
                    <li>Nurture creativity and Innovation</li>
                    <li>Champion transformational Arts</li>
                    <li>Remain releveant</li>
                    <li>Respect for diversity</li>
                    <li>Radical transparency.</li>
                </ul>
            </div>
            {{--<hr style="height: 120px; margin: 0 30px; margin-top: 20px; align-self: center; margin-bottom: 40px; border: none; border-right: 1px solid #aaa">--}}
            <div id="objectives">
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
                Championing the recognition of the arts industry in Tanzania as an industry that creates sustainable livelihoods and impacts lives positively.
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