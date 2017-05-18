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
        /*font-weight: bold;*/
        font-family: 'Lora', serif;
        color: #333;
        display: none;
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

    -webkit-transition: transform 0.25s ease-out;
    -moz-transition: transform 0.25s ease-out;
    -ms-transition: transform 0.25s ease-out;
    -o-transition: transform 0.25s ease-out;
    transition: transform 0.25s ease-out;
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
    #pillars .inspire-shot:nth-of-type(3),
    #pillars .inspire-shot:nth-of-type(4),
    #pillars .inspire-shot:nth-of-type(5),
    #pillars .inspire-shot:nth-of-type(6){
        overflow: hidden;
    }

    #pillars .inspire-shot:nth-of-type(1) .pillar-image{
        transform: translate3d(-25%, 20%, 0);
        overflow-y: hidden;
    }

    #pillars .inspire-shot:nth-of-type(2) .pillar-image{
        transform: translate3d(30%, 23%, 0);
    }

    #pillars .inspire-shot:nth-of-type(3) .pillar-image{
        transform: translate3d(20%, -2%, 0);
    }

    #pillars .inspire-shot:nth-of-type(4) .pillar-image{
        transform: translate3d(30%, 28%, 0);
    }

    #pillars .inspire-shot:nth-of-type(6) .pillar-image{
        transform: translate3d(-25%, 25%, 0);
    }

    .inspire-shot .pillar-text{
        background-color: rgba(0,0,0,0.1);
        /*background-color: rgba(255, 209, 111, 0.3);*/
        background-image: url({{asset('images/p3s.png')}});
    background-size: 170px;
    background-position: center;
    /*background-repeat: round;*/
    }

    .inspire-shot .pillar-name{
        color: #eee;
        color: #0d3625;
        font-size: 1.8em;
        font-family: "Calson", serif;
    }

    .inspire-shot:hover:not(.outer), .inspire-shot.active{
        -webkit-transform: scale(1.03);
        -moz-transform: scale(1.03);
        -ms-transform: scale(1.03);
        -o-transform: scale(1.03);
        transform: scale(1.03);
        z-index: 2;
        position: relative;
        box-shadow: 0 0 23px rgba(0,0,0,0.2);
    }

    .inspire-shot.active, .inspire-shot.active:hover{
        /*box-shadow: 0 0 23px rgba(0,0,0,0.3);*/
        box-shadow: none;
    }

    .inspire-shot.flat{
        box-shadow: none;
    }

    .inspire-shot:first-child.active{
        transition: none;
    }

    .inspire-shot .pillar-info{
        display: none;
        text-align: center;padding: 0.3em;font-size: 0.45em; font-family: 'Gotham light', serif; color: #ccc
    }

    .inspire-shot:hover .inspire-shot .pillar-text{
        background-color: rgba(0,0,0,0.1);
    }

    .inspire-shot:hover .inspire-shot .pillar-name{
        background-color: rgba(0,0,0,0.1);
    }

    #pillars.view-single .fill-above, #pillars.view-single #pillarImages,
    #pillars:not(.view-single) #pillarInfo,
    #pillars:not(.view-single) #pillarLinks{
        display: none;
    }

    .fill-above{
        background: #fff;
        /*background: $000px;*/
        pointer-events: none; z-index: 1;
        opacity: 0;
    }

    .fill-above.partial-visible{
        opacity: 0.6;
    }

    .fill-above.visible{
        opacity: 1;
        pointer-events: auto;
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

    #holler.no-ov{
        overflow: hidden;"
    }
</style>

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

<div id="pillars" class="layout cente">
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
        <a href="#">LEARN MORE</a>
    </div>

    <div id="holler" style="margin-to: 75px; position: relative; min-width: 70%;">
        <div class="fill-above"></div>
        <div id="pillarImages" class="layout wrap" style="background:#fff;">
            @for($i = 0; $i < count($pillars); $i++)
            @if($i < 6)
            <a href="javascript:void(0);" class="inspire-shot view-pillar" data-for="{{$pillars[$i]}}">
                <div class="pillar-image" style="background-image: url({{'images/pillars/im'. (($i % 9) + 1) .'.png'}});"></div>
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

        <div id="pillarInfo">
            <a id="pillarInfoImage" class="inspire-shot outer view-pillar" data-for="ALL">
                <div class="pillar-image" style="background-image: url({{'images/pillars/im1.png'}});"></div>
                <div class="pillar-text layout vertical center-center"></div>
            </a>

            <div id="pillarInfoContent" style="font-size: 1.2em; line-height: 1.4em">
                <h3 style="font-size: 1.4em;font-family: 'Calson', serif; margin-bottom: 8px;">MUSIC</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam atque cupiditate, doloremque eaque et eveniet hic illum iusto libero mollitia nam provident quae reiciendis reprehenderit sit temporibus vero vitae!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam atque cupiditate, doloremque eaque et eveniet hic illum iusto libero mollitia nam provident quae reiciendis reprehenderit sit temporibus vero vitae!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam atque cupiditate, doloremque eaque et eveniet hic illum iusto libero mollitia nam provident quae reiciendis reprehenderit sit temporibus vero vitae!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam atque cupiditate, doloremque eaque et eveniet hic illum iusto libero mollitia nam provident quae reiciendis reprehenderit sit temporibus vero vitae!
                </p>
            </div>
        </div>
    </div>

    {{--<hr style="border-width: 0; border-bottom-width: 1px; border-color: #ccc; width: 15em; margin: auto; margin-top: 6em;">--}}
</div>


<script>
    var cur_view = 0;
    var pillarLinks;
    var pillarShots;
    var br, rSet = false;
    var fillAbove, fillAboveBox;
    var tx, ty;
    var mouseLeft;
    var animation;
    var inoFWat;
    var to1, to2;
    var orgEl;

    var pillars = ["MUSIC", "PHOTOGRAPHY", "DANCE", "FASHION", "DRAMA", "POETRY"];
    $(document).ready(function(){
        pillarLinks = $('#pillarLinks .view-pillar');
        pillarShots = $('#pillarImages .view-pillar');

        br = getBorderRadius();
        fillAbove = $('.fill-above');
        fillAboveBox = fillAbove.get(0).getBoundingClientRect();

        $('#pillarImages .view-pillar').on("click", function(evt){
            var forWhat = $(this).data("for");
            if(!forWhat)
                return;

            inoFWat = pillars.indexOf(forWhat);
            to1 = inoFWat === -1 && cur_view === 1;
            to2 = inoFWat !== -1 && cur_view === 0;
            $('.view-pillar').removeClass('current');

            console.log(cur_view, forWhat, inoFWat, to1, to2);

            pillarLinks.not($(this).index() + 1).removeClass('active');
            pillarLinks.eq($(this).index() + 1).addClass('active');


//            pillarShots.not(inoFWat).removeClass('active');
            $(this).addClass('active').data("for", "ALL").data("for-org", forWhat);


            im_url = "url({{asset('images/pillars/im')}}" + (inoFWat + 1) + ".png)";
            console.log(im_url);
            if(inoFWat !== -1){
                $("#pillarInfoImage").find(".pillar-image").css({'background-image': im_url});
                $("#pillarInfoContent").find("h3").text(forWhat);
            }

            var el = evt.target.getBoundingClientRect();

            if(to1 || to2){
                console.log("Kapita hapa!");
                var to = to1 ? 0 : 1;
                switchView(to, $(this), $(this).hasClass('inspire-shot'));
            }
        });

        $('#pillarImages').on("mouseleave", function(evt){
            fillAbove.removeClass('partial-visible');
            mouseLeft = true;

            if(animation && animation.playState !== "finished")
                animation.cancel();
        });

        $('#pillarImages .view-pillar').on("mouseenter", function(evt){
//            mouseLeft = false;
//            var el = evt.target.getBoundingClientRect();
//            setTransProps(el);
//            runAnimation(true, false);
        });

        $('#pillarImages .view-pillar').on("mouseleave", function(evt){
//            $(this).removeClass('active');
        });
    });

    function setTransProps(el){
        tx = (fillAboveBox.left + fillAboveBox.width / 2) - (el.left + el.width / 2);
        ty = (fillAboveBox.top + fillAboveBox.height / 2) - (el.top + el.height / 2);
    }

    function runAnimation(fromWithin, was_click) {
        var new_op = fromWithin && !was_click ? 1 : 1;
        var start_op = fromWithin && was_click ? 0.6 : 0;
        var start_sc = fromWithin && was_click ? 2 : 0.8;
        var new_sc = fromWithin && was_click ? 3 : 2;

        fillAbove.css({'border-radius': br});
        $("#holler").addClass('no-ov');
        animation = fillAbove.get(0).animate([
            {opacity: start_op, transform: 'translate('+-tx+'px, '+-ty+'px)' + 'scale('+start_sc+')'},
            {opacity: new_op, transform: "scale(2)"}
        ], {
            duration: 250,
            easing: 'ease-out'
        });

        animation.onfinish = function(){
            fillAbove.css({'border-radius': 0});
            $("#holler").removeClass('no-ov');
            fillAbove.addClass('visible');
            return;
            if(fromWithin && !mouseLeft)
                fillAbove.addClass('partial-visible');
            if(was_click){
                fillAbove.addClass('visible');
                makeShift();
            }
        }
    }

    function makeShift(){
        setTimeout(function(){
            fillAbove.removeClass('visible');
        }, 2000);
    }

    function switchView(to, $el, fromW){
        cur_view = to;
        console.log($el);
        if(to){
//            console.log("To single view");
//            $("#pillars").addClass('view-single');
//            var el = evt.target.getBoundingClientRect();
            el = $el.get(0).getBoundingClientRect();
            orgEl = $el.get(0).getBoundingClientRect();
            setTransProps(el);
            runAnimation(true, false);

            if($el.index() != 0){
                var pillarInfoImage = pillarShots.eq(0).get(0);
                var pillarInfoImageBox = pillarInfoImage.getBoundingClientRect();

                showx = (pillarInfoImageBox.left + pillarInfoImageBox.width / 2) - (el.left + el.width / 2);
                showy = (pillarInfoImageBox.top + pillarInfoImageBox.height / 2) - (el.top + el.height / 2);


                var showAnimation = $el.get(0).animate([
                    {transform: "none"},
                    {transform: 'translate('+showx+'px, '+showy+'px)'},
                ], {
                    duration: 350,
                    delay: 255,
                    easing: 'ease-out'
                });

                showAnimation.onfinish = function(){
                    $el.addClass('flat');
                }
            }else{
                setTimeout(function(){
                    $el.addClass('flat');
                }, 380);
            }

            return;
        }else{
//            $("#pillars").removeClass('view-single');
            console.log("To all view");

//            el = $el.get(0).getBoundingClientRect();
//            setTransProps(el);
//            runAnimation(true, false);
            $el.attr('data-for', $el.attr('data-for-org'));
            $el.data("for", $el.data('for-org'));
            if($el.index() !== 0){
                var pillarInfoImage = pillarShots.eq(0).get(0);
                var pillarInfoImageBox = pillarInfoImage.getBoundingClientRect();

                showx = (pillarInfoImageBox.left + pillarInfoImageBox.width / 2) - (el.left + el.width / 2);
                showy = (pillarInfoImageBox.top + pillarInfoImageBox.height / 2) - (el.top + el.height / 2);


                showAnimation = $el.get(0).animate([
                    {transform: 'translate('+showx+'px, '+showy+'px)'},
                    {transform: "none"}
                ], {
                    duration: 350,
                    easing: 'ease-out'
                });

                showAnimation.onfinish = function(){
                    $el.removeClass('flat');
                    $el.removeClass('active');
                };

                setTransProps(orgEl);
                runBackAnimation();
            }else{
                $el.removeClass('flat');
                $el.removeClass('active');

                el = $el.get(0).getBoundingClientRect();
                setTransProps(el);
                runAnimation(true, false);
                runBackAnimation();
            }
        }
    }

    function runBackAnimation() {
        fillAbove.css({'border-radius': br});
        $("#holler").addClass('no-ov');
        animation = fillAbove.get(0).animate([
            {opacity: 1, transform: "scale(2)"},
            {opacity: 0, transform: 'translate('+tx+'px, '+ty+'px)' + 'scale(0.8)'}
        ], {
            duration: 250,
            easing: 'ease-out'
        });

        animation.onfinish = function(){
            console.log("going back!!");
            fillAbove.css({'border-radius': 0});
            $("#holler").removeClass('no-ov');
            fillAbove.removeClass('visible');
        }
    }

    function getBorderRadius(){
        var pillarIms = document.getElementById("pillarImages");
        var pillarImsBox = pillarIms.getBoundingClientRect();
//        console.log(pillarImsBox);
        return Math.min(pillarImsBox.width, pillarImsBox.height);
    }
</script>