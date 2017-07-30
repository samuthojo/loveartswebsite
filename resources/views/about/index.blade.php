@extends('layouts.app-inner')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
@endsection

@section('content')
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
            <div id="decoBox">
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

        <section id="ourFocus" class="white layout center-center" style="background-image: url({{asset('images/about/new/3.jpg')}});">
            <h3>
                Championing the recognition of the arts industry in Tanzania as an industry that creates sustainable livelihoods and impacts lives positively.
            </h3>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/lib/TweenMax.min.js')}}"></script>
    <script src="{{asset('js/lib/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('js/lib/sm-animation.gsap.min.js')}}"></script>
    <script src="{{asset('js/lib/sm-debug.addIndicators.min.js')}}"></script>
    <script>
        var controller = new ScrollMagic.Controller();
        var instaParallaxScene = new ScrollMagic.Scene({
            triggerElement: '#instagramElement',
            triggerHook: 0.9,
            duration: '890'
        })
        .setTween(TweenMax.to('#instaBg', 1, {y: '-60%', ease: Power0.easeNone}))
        .addTo(controller);
    </script>
@endsection