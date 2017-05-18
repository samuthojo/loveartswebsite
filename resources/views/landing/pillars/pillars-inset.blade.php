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
        /*font-weight: bold;*/
        font-family: 'Lora', serif;
        color: var(--app-main-color);
        /*display: none;*/
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

        -webkit-transition: transform 0.25s ease-out, opacity 0.25s ease-out;
        -moz-transition: transform 0.25s ease-out, opacity 0.25s ease-out;
        -ms-transition: transform 0.25s ease-out, opacity 0.25s ease-out;
        -o-transition: transform 0.25s ease-out, opacity 0.25s ease-out;
        transition: transform 0.25s ease-out, opacity 0.25s ease-out;

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
        background-color: rgba(255, 209, 111, 0.3);
        background: rgba(116, 132, 131, 0.4);
        background: rgba(73, 45, 52, 1);
        opacity: 0.3;
        /*background: rgba(221, 169, 120, 0.33);*/
    }

    #pillars .inspire-shot:nth-of-type(2) .fill-above{
        background: rgba(59, 68, 92, 1);
        /*background: rgba(39, 104, 103, 1);*/
        /*rgb(67, 122, 106)*/
        opacity: 0.2;
    }

    #pillars .inspire-shot:nth-of-type(3) .fill-above{
        background-color: rgba(255, 209, 111, 0.3);
        background: rgba(76, 218, 179, 1);
        background: rgb(184, 140, 107);
        opacity: 0.2;
    }

    #pillars .inspire-shot:nth-of-type(4) .fill-above{
        background-color: rgba(255, 209, 111, 0.3);
        background: rgba(213, 62, 58, 1);
        background: rgba(196, 45, 117, 1);
        opacity: 0.3;
    }

    #pillars .inspire-shot:nth-of-type(5) .fill-above{
        /*background-color: rgba(255, 209, 111, 1);*/
        background: rgba(204, 147, 26, 1);
        opacity: 0.3;
    }

    #pillars .inspire-shot:nth-of-type(6) .fill-above{
        background-color: rgba(255, 209, 111, 0.3);
        background: rgb(64, 186, 153);
        opacity: 0.2;
    }

    .inspire-shot .pillar-text{
        /*background-color: rgba(0,0,0,0.1);*/
        /*background-color: rgba(255, 209, 111, 0.3);*/
{{--        background-image: url({{asset('images/p3s.png')}});--}}
        /*background-size: 170px;*/
        background-position: center;
        /*background-repeat: round;*/
    }

    .inspire-shot .pillar-name{
        color: inherit;
        font-size: 1.8em;
        font-family: "Calson", serif;
    }

    .inspire-shot:hover:not(.outer),
    .inspire-shot.active{
        -webkit-transform: scale(1.03);
        -moz-transform: scale(1.03);
        -ms-transform: scale(1.03);
        -o-transform: scale(1.03);
        transform: scale(1.03);
        z-index: 2;
        position: relative;
        box-shadow: 0 0 23px rgba(0,0,0,0.2);
    }

    .inspire-shot .pillar-info{
        display: none;
        text-align: center;padding: 0.3em;font-size: 0.45em; font-family: 'Gotham light', serif; color: #ccc
    }

    .inspire-shot:hover .fill-above,
    .inspire-shot.active .fill-above{
        /*background-color: rgba(0,0,0,0.1);*/
        opacity: 0.85 !important;
    }

    /*#pillars .inspire-shot:nth-of-type(1):hover .pillar-name,*/
    /*#pillars .inspire-shot:nth-of-type(2):hover .pillar-name,*/
    /*#pillars .inspire-shot:nth-of-type(3):hover .pillar-name,*/
    /*#pillars .inspire-shot:nth-of-type(4):hover .pillar-name,*/
    /*#pillars .inspire-shot:nth-of-type(6):hover .pillar-name*/

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
        {{--<a href="#">LEARN MORE</a>--}}
    </div>

    <div id="holler">
        <div id="fillAbove" class="fill-above"></div>
        <div id="pillarImages" class="layout wrap" style="background:#fff;">
            @for($i = 0; $i < count($pillars); $i++)
                @if($i < 6)
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

        <div id="pillarInfo">
            <a id="pillarInfoImage" class="inspire-shot outer view-pillar" data-for="ALL">
                <div class="pillar-image" style="background-image: url({{'images/pillars2/im1.jpg'}});"></div>
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
    var pillarLinks, pillarImages;
    var br, rSet = false;
    var fillAbove, fillAboveBox;
    var tx, ty;
    var mouseLeft;
    var animation;

    var pillars = ["MUSIC", "PHOTOGRAPHY", "DANCE", "FASHION", "DRAMA", "POETRY"];
    $(document).ready(function(){
        pillarLinks = $('#pillarLinks .view-pillar');
        pillarImages = $('#pillarImages .view-pillar');

        br = getBorderRadius();
        fillAbove = $('#fillAbove');
        fillAboveBox = fillAbove.get(0).getBoundingClientRect();

        $(pillarImages).on("click", function(evt){
            var forWhat = $(this).data("for");
            if(!forWhat)
                return;

            switchView(1, $(this));
            return;

            var inoFWat = pillars.indexOf(forWhat);
            var to1 = inoFWat === -1 && cur_view !== 0;
            var to2 = inoFWat !== -1 && cur_view === 0;

            im_url = "url({{asset('images/pillars2/im')}}" + (inoFWat + 1) + ".jpg)";
            if(inoFWat !== -1){
                $("#pillarInfoImage").find(".pillar-image").css({'background-image': im_url});
                $("#pillarInfoContent").find("h3").text(forWhat);
            }

            if(to1 || to2){
                console.log("Kapita hapa!");
                var to = to1 ? 0 : 1;
                switchView(to, $(this));
            }
        });
    });

    function switchView(to, $el){
        var el = $el.get(0).getBoundingClientRect();
        setTransProps(el);
        cur_view = to;

        if(to){
//            $el.addClass('active');
            runAnimation();
//            runAnimation();
//            console.log("To single view");
//            $("#pillars").addClass('view-single');
        }else{
            $el.removeClass('active');
            runBackAnimation();
//            $("#pillars").removeClass('view-single');
//            console.log("To all view");
        }
    }

    function setTransProps(el){
        tx = (fillAboveBox.left + fillAboveBox.width / 2) - (el.left + el.width / 2);
        ty = (fillAboveBox.top + fillAboveBox.height / 2) - (el.top + el.height / 2);
    }

    function runAnimation(){
        fillAbove.css({'border-radius': br});
        $("#holler").addClass("no-ov");
        animation = fillAbove.get(0).animate([
            {opacity: 0, transform: 'translate('+-tx+'px, '+-ty+'px)' + 'scale(0.6)'},
            {opacity: 0.6, transform: "scale(2)"}
        ], {
            duration: 350,
            easing: 'ease-out'
        });

        animation.onfinish = function(){
//            fillAbove.addClass('partial-visible');
            fillAbove.css({'border-radius': 0});
            $("#holler").removeClass("no-ov");
        }
    }

    function runBackAnimation(){
        fillAbove.css({'border-radius': br});
        $("#holler").addClass("no-ov");
        animation = fillAbove.get(0).animate([
            {opacity: 0.8, transform: "scale(2)"},
            {opacity: 0, transform: 'translate('+-tx+'px, '+-ty+'px)' + 'scale(0.6)'}
        ], {
            duration: 350,
            easing: 'ease-out'
        });

        animation.onfinish = function(){
            fillAbove.css({'border-radius': 0});
            $("#holler").removeClass("no-ov");
            fillAbove.removeClass('partial-visible');
        }
    }

    function getBorderRadius(){
        var pillarIms = document.getElementById("pillarImages");
        var pillarImsBox = pillarIms.getBoundingClientRect();
        return Math.min(pillarImsBox.width, pillarImsBox.height);
    }
</script>