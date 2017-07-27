<div id="artistSubcontent" class="view-about">
    <div id="artistLinks" class="layout">
        <span targ="#artistAbout" onclick="switchSection('about')">BIOGRAPHY</span>
        <span targ="#artistQsns" onclick="switchSection('qsns')">20 QUESTIONS</span>
        <span targ="#artistWorks" onclick="switchSection('works')">WORKS</span>
    </div>

    <div id="artistSections">
        <section id="artistAbout" class="layout vertical">
            <span class="just-text">
                Leroy is a singer/songwiter, TV presenter and life coach based in Dar Es Salaam Tanzania. He is best known for his vocal skills which are
                most notable in his hit single Roho yangu released in May 2009(launch event hosted by lovearts yooohoo). Although no one in Leroy's family has ever chosen a career in the music industry....he's been heard saying, <em><q>they(Everyone else in his family) are definitely better musicians than me, everything I know I learnt from them.</q></em>
            </span>

            <div id="artistActions" class="layout" style="margin-top: 20px;">
                <a href="https://www.facebook.com/Leroy-Sanyi-559252174255122/" title="Facebook" target="_blank">
                    <i class="fa fa-facebook-square" style="color: #3b5998;"></i>&nbsp;
                    Leroy Sanyi&nbsp;
                </a>
                {{--<a href="#" title="Instagram">--}}
                    {{--<i class="fa fa-instagram" style="color: #222;"></i>&nbsp;--}}
                    {{--kamu_music&nbsp;--}}
                {{--</a>--}}
                <a href="https://twitter.com/leroysanyi?lang=en" title="Twitter" target="_blank">
                    <i class="fa fa-twitter-square" style="color: #55acee"></i>&nbsp;
                    LeroySanyi&nbsp;
                </a>
            </div>
        </section>
        <section id="artistQsns">
            @include('landing.featured.artist_questions_list')
        </section>
        <section id="artistWorks" class="layout vertical">
            @include('landing.featured.artist_works')

            <div id="artistActions" class="layout" style="margin-top: 20px;">
                <a href="https://soundcloud.com/user-526680082" title="Sound Cloud">
                    <i class="fa fa-soundcloud" style="color: #000;"></i>&nbsp;
                    &nbsp;Leroy Sanyi&nbsp;
                </a>
                {{--<a href="#" title="Youtube">--}}
                    {{--<i class="fa fa-youtube-play" style="color: #e6544e"></i>&nbsp;--}}
                    {{--Kamu Music&nbsp;--}}
                {{--</a>--}}
            </div>
        </section>
    </div>
</div>

<script>
    var subContent = document.getElementById("artistSubcontent");
    function switchSection(section){
        subContent.classList.remove('view-about', 'view-qsns', 'view-works');
        subContent.classList.add('view-'+section);
    }
</script>