<style>
    #artistSubcontent{
        max-width: 650px;
        margin: auto;
    }

    #artistSubcontent #artistLinks{
        /*background-color: bisque;*/
        margin-bottom: 20px;
        border: 1px solid #e2e2e2;
        border-left: none;
        border-right: none;
        padding: 12px 8px;
    }

    #artistSubcontent #artistLinks a{
        text-decoration: none;
        color: #444;
        border-bottom: 1px solid transparent;
        padding: 3px 2px;
        font-family: "Gotham medium", sans-serif;
        font-size: 1.3em;
    }

    #artistSubcontent #artistLinks a:not(:hover):not(.active){
        opacity: 0.6;
    }

    #artistSubcontent #artistLinks a:hover{
        -webkit-transition: opacity 0.35s;
        -moz-transition: opacity 0.35s;
        -ms-transition: opacity 0.35s;
        -o-transition: opacity 0.35s;
        transition: opacity 0.35s;
    }

    #artistSubcontent #artistLinks a:not(:first-child){
        margin-left: 30px;
    }

    #artistSubcontent.view-about #artistLinks a[target="#artistAbout"]{
        color: var(--app-main-color);
        border-bottom-color: var(--app-main-color);
        opacity: 1;
    }

    #artistSubcontent.view-qsns #artistLinks a[target="#artistQsns"]{
        color: var(--app-main-color);
        border-bottom-color: var(--app-main-color);
        opacity: 1;
    }

    #artistSubcontent.view-works #artistLinks a[target="#artistWorks"]{
        color: var(--app-main-color);
        border-bottom-color: var(--app-main-color);
        opacity: 1;
    }

    #artistSections section{
        padding: 0 20px;
        font-family: "Times New Roman", serif;
        -webkit-transition: opacity 0.35s 2.35s;
        -moz-transition: opacity 0.35s 2.35s;
        -ms-transition: opacity 0.35s 2.35s;
        -o-transition: opacity 0.35s 2.35s;
        transition: opacity 0.35s 2.35s;
    }

    #artistSections section .just-text{
        font-size: 1.5em;
        line-height: 1.7em;
        font-family: "Lora Italic", serif;
    }

    #artistSubcontent:not(.view-about) #artistAbout{
        display: none;
        opacity: 0;
    }

    #artistSubcontent:not(.view-qsns) #artistQsns{
        display: none;
        opacity: 0;
    }

    #artistSubcontent:not(.view-works) #artistWorks{
        display: none;
        opacity: 0;
    }

    #artistSections section.visible{
        display: block !important;
        /*opacity: 1 !important;*/
    }

    #artistActions{
        align-self: flex-end;
        margin-top: 5px;
        padding: 0 3px;
        border-top: 1px solid #e0e0e0;
        padding-top: 12px;
    }

    #artistActions a{
        display: inline-block;
        padding: 10px 12px;
        border-radius: 2px;
        background-color: transparent;
        margin: 0;
        font-family: "Gotham medium", sans-serif;
        color: #777;
        font-size: 1em;
    }
</style>

<div id="artistSubcontent" class="view-about">
    <div id="artistLinks" class="layout center-justified">
        <a href="javascript:void(0);" target="#artistAbout" onclick="switchSection('about')">ARTIST BIO</a>
        <a href="javascript:void(0);" target="#artistQsns" onclick="switchSection('qsns')">20 QUESTIONS</a>
        <a href="javascript:void(0);" target="#artistWorks" onclick="switchSection('works')">WORKS</a>
    </div>
    <div id="artistSections">
        <section id="artistAbout" class="layout vertical">
            <span class="just-text">
                Baraka is a reknown guitarist, singer and songwiter based in Nyamagana Mwanza. He is best known for his shredding skills which are
                most notable in his hit single Roho yangu released in May 2009(launch event hosted by lovearts yooohoo). Although no one in Baraka's family has ever chosen a career in the music industry....
                <span class="hidden">
                     he's been heard saying, <em><q>they(Everyone else in his family) are definitely better musicians than me, everything I know I learnt from them.</q></em>
                </span>
            </span>

            <div id="artistActions" class="layout" style="margin-top: 20px;">
                <a href="#" title="Facebook">
                    <i class="fa fa-facebook-square" style="color: #3b5998;"></i>&nbsp;
                    Kamu Music&nbsp;
                </a>
                <a href="#" title="Instagram">
                    <i class="fa fa-instagram" style="color: #222;"></i>&nbsp;
                    kamu_music&nbsp;
                </a>
                <a href="#" title="Twitter">
                    <i class="fa fa-twitter-square" style="color: #55acee"></i>&nbsp;
                    kamu_music&nbsp;
                </a>
            </div>
        </section>
        <section id="artistQsns">
            @include('landing.featured.artist_questions_list')
        </section>
        <section id="artistWorks" class="layout vertical">
            {{--<span class="just-text">--}}
                {{--We're still awaiting Baraka's permission to showcase his works live in here,--}}
                {{--shouldn't take too long so please check back soon.--}}
                {{--Formthe time being you can just check them out in his youtube and soundcloud channels listed below.--}}
            {{--</span>--}}
            @include('landing.featured.artist_works')

            <div id="artistActions" class="layout" style="margin-top: 20px;">
                <a href="#" title="Sound Cloud">
                    <i class="fa fa-soundcloud" style="color: #000;"></i>&nbsp;
                    Kamu Music&nbsp;
                </a>
                <a href="#" title="Youtube">
                    <i class="fa fa-youtube-play" style="color: var(--app-main-color)"></i>&nbsp;
                    Kamu Music&nbsp;
                </a>
            </div>
        </section>
    </div>
</div>

<script>
    var subContent = document.getElementById("artistSubcontent");
    function switchSection(section){
        subContent.classList.remove('view-about', 'view-qsns', 'view-works');
//        document.getElementById("artist"+section.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();})).classList.add('visible');
        subContent.classList.add('view-'+section);
    }
</script>