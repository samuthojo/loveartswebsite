@extends('layouts.app-inner')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/about-ol.css')}}">
@endsection

@section('content')
    <style>
        @media all and (max-width: 768px){
            #bannerTopBar{
                background-color: transparent !important;
            }

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

            #aboutUsText{
                display: none;
            }
        }

        .background-image{
            position: absolute; top: 0; left: 0;
            height: 100%;
            width: 100%;
            background: #f6f6f6; /*#fff6f6*/
            -webkit-background-size: cover;
            background-size: cover;
{{--            background-image: url({{asset('images/about/new/9.jpg')}});--}}
            /*-webkit-filter: grayscale(0.9);*/
            /*filter: grayscale(0.9);*/
        }

        #sectionCards{
            position: relative;
            height: 180vh;
            padding: 3em 6em;
            padding-top: 6em;
        }

        #ourMission, #ourVision{
            width: 50%;
            min-width: 50%;
            padding: 6em 2em;
        }

        #ourVision{
            text-align: right;
        }

        .about-card{
            background-color: #fff;
            max-width: 450px;
            min-height: 450px;
            box-shadow: 0 0 60px rgba(0,0,0,0.1);
        }

        #ourVision .about-card{
            transform: translateY(70%);
        }

        .about-card .title{
            position: relative;
            letter-spacing: 3px;
            font-family: "Gotham ultra", serif;
            font-size: 1.5em;
            padding: 70px 50px;
            color: #000;
        }

        .about-card .title:after{
            content: '';
            position: absolute;
            left: 50px;
            bottom: 40px;
            width: 60%;
            border-bottom: 1px solid #000;
        }

        #ourVision .title:after{
            left: auto;
            right: 50px;
        }

        .about-card p{
            padding: 0 50px;
            padding-bottom: 50px;
            font-size: 1.8em;
            line-height: 1.6em;
            font-family: "Lora Italic", serif;
        }

        #objValues{
            position: relative;
            padding: 8em 1em;
            padding-bottom: calc(8em + 18%);
        }

        .about-slab{
            flex: 1;
            margin: 2em 6em;
            padding: 30px;
            width: 50%;
            max-width: 400px;
            min-height: 450px;
            border: 22px groove #e6544e;
            box-shadow: 0 0 70px rgba(0,0,0,0.1);
        }

        .about-slab ul{
            /*height: 100%;*/
            font-family: "Gotham light", sans-serif;
            font-size: 1.3em;
            margin-top: 20px;
        }

        .about-slab ul li{
            margin-left: 24px;
            list-style-type: circle;
            margin-bottom: 20px;
        }

        .about-slab h2{
            text-align: center;
            font-family: "Gotham ultra", sans-serif;
            font-size: 1.7em;
            padding: 20px 0;
        }

        #ourObjetives{
            transform: translateY(40%);
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

        <div id="sectionCards">
            <div class="background-image"></div>
            <div id="decoBox" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; height: 450px; width: 400px; border: 20px solid var(--app-main-color)">
            </div>

            <div class="layout">
                <div id="ourMission">
                    <div class="about-card">
                        <div class="title">
                            OUR MISSION
                        </div>

                        <p>
                            Nurture gifts and talents and raising standard of Art, in all of its forms to positively influence mind set.
                        </p>
                    </div>
                </div>

                <div id="ourVision">
                    <div class="about-card">
                        <div class="title">
                            OUR VISION
                        </div>

                        <p>Molestiae nihil nisi omnis pariatur reprehenderit similique sint tempora ut veniam.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="sectionSlabs">

        </div>
        <section id="objValues" class="layout center-justified start">
            <div id="ourValues" class="about-slab layout vertical center-cente">
                <h2>CORE VALUES</h2>

                <ul>
                    <li>Nurture creativity and Innovation</li>
                    <li>Champion transformational Arts</li>
                    <li>Remain releveant</li>
                    <li>Respect for diversity</li>
                    <li>Radical transparency.</li>
                </ul>
            </div>

            <div id="ourObjetives" class="about-slab layout vertical center-cente">
                <h2>OBJECTIVES</h2>

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