<html ng-app="ExampleApp">
    <head>
        <title>angular-scroll-magic</title>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    </head>

    <body ng-controller="ExampleCtrl as vm">
        @verbatim
            <sm-scene scene-id="'pin1'" duration="'50%'" offset="'50%'" trigger-hook="0.25"></sm-scene>

            <h1>Scroll ☝︎</h1>

            <div class="dummy"></div>

            <div class="pin" sm-pin="'pin1'"></div>

            <div class="trigger" sm-scene="'mixed1'" duration="500" trigger-hook="0.75"></div>

            <div class="tween1" sm-tween="'mixed1'" duration="1" vars="{scale: 1.2, yoyo: true, repeat: 2}">
                <sm-class-toggle scene-id="'classToggleScene'" classes="'pink'" target-element="'parent'"></sm-class-toggle>
            </div>

            <div class="mixed" sm-tween="'mixed1'" duration="1" from-vars="{opacity: 0, delay: 2}">
                <sm-pin scene-id="'mixed1'" target-element="'parent'"></sm-pin>
            </div>

            <span sm-scene="'tween2'" trigger-element="null" duration="'100%'" offset="200" trigger-hook="0.4"></span>

            <div class="tween2" sm-tween="'tween2'" from-vars="{left: '100%'}" to-vars="vm.toVars"></div>

            <span sm-scene="'classToggleScene'" trigger-element="null" duration="'50%'" offset="500" trigger-hook="0.2"></span>

            <div class="repeat-tweens" ng-repeat="i in [1, 2, 3, 4]">
                <div sm-scene="'tween-' + $index" duration="'100%'" offset="0"> </div>
                <div id="tween-{{$index}}" sm-tween="'tween-' + $index" from-vars="{x: '0%', y: '0px'}" to-vars="{x: (i * 10) + '%', y: (i * 200) + 'px'}">
                    <h3>Repeat tween {{$index}}</h3>
                </div>
            </div>
        @endverbatim


        <script src="{{asset('js/lib/TweenMax.min.js')}}"></script>
        <script src="{{asset('js/lib/angular-1.6.4.min.js')}}"></script>
        <script src="{{asset('js/lib/ScrollMagic.min.js')}}"></script>
        <script src="{{asset('js/lib/sm-animation.gsap.min.js')}}"></script>
        <script src="{{asset('js/lib/sm-debug.addIndicators.min.js')}}"></script>

        <script src="{{asset('js/lib/angular-scroll-magic.js')}}"></script>
        <script src="{{asset('js/lv-app.js')}}"></script>
    </body>
</html>
