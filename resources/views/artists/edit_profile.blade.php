@extends('layouts.app-inner')

@section('content')
    <style>
        body{
            background: #f5f5f5;
        }

        #editProfile{
            min-height: calc(100vh - 60px);
        }

        #editProfile h1{
            max-width: 700px;
            margin: auto;
            font-size: 1.7em;
            color: #000;
            margin-bottom: 0.4em;
        }

        .container{
            max-width: 1000px;
            margin: auto;
            padding: 4em 0;
        }

        #bannerTopBar{
            position: absolute;
        }

        .form-steps{
            align-self: flex-start;
            margin: auto;
            width: 100vw;
            max-width: 700px;
            position: relative;
            overflow: hidden;
        }

        .scroller{
            /*background: #f00;*/
            transform: translateX({{$cur_step * -100}}%);
        }

        .lv-form{
            position: relative;
            align-self: flex-start;
            box-shadow: 0 0 10px rgba(0,0,0, 0.05);
        }

        .lv-form.loading{
            opacity: 0.2;
            pointer-events: none;
        }

        .lv-form:before,
        .lv-form:after{
            position: absolute;
            left: 0;
            top: 0;
            height: 2px;
            width: 100%;
            opacity: 0.3;
        }

        .lv-form:before{
            background: #f00;
            opacity: 0.3;
        }

        .lv-form.loading:before,
        .lv-form.loading:after{
            content: "";
        }

        .lv-form.loading:after{
            width: 60%;
            background: #000;

            -webkit-animation: indefiniteLoading 2s infinite; /* Safari 4.0 - 8.0 */
            animation: indefiniteLoading 2s infinite;
        }

        @keyframes indefiniteLoading {
            from {transform: translateX(40%);}
            60% {transform: translateX(-100%);}
            to {transform: translateX(70%);}
        }

        .form-steps .lv-form{
            width: 100%;
            min-width: 100%;
            padding: 20px 30px;
        }

        .form-steps .steps{
            color: #000;
            padding: 20px 0;
        }

        .form-steps .step{
            padding: 10px;
            margin-right: 16px;
        }

        .form-steps .step.current{
            font-weight: bold;
            border-bottom: 2px solid #333; /*#ff4d4d*/;
        }

        .form-steps .step:not(.complete) + .step{
            opacity: 0.5;
            pointer-events: none;
        }

        #laSteps .toast{
            top: 120px;
        }
        
        .artist-picture{
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 120px;
            height: 120px;
            overflow: hidden;
            border: 1px solid #ddd;
            margin: 30px 0;
            margin-right: 3px;
        }

        .artist-picture img{
            height:100%;
        }

        .artist-picture .remover{
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            opacity: 0;
            pointer-events: none;
        }

        .remover button{
            position: absolute;
            right: 5px;
            top: 3px;
            padding: 4px 6px;
            background-color: #fff;
            border: none;
        }

        .artist-picture:hover .remover{
            opacity: 1;
            pointer-events: auto;
        }
    </style>

    <div id="editProfile">
        <div class="container">
            @if(isset($first_time))
                <h1>Complete profile</h1>
            @else
                <h1>Edit profile</h1>
            @endif

            <div id="laSteps" class="form-steps">
                <div class="steps layout">
                    <a href="#personalInfo" class="step {{($cur_step > 0 || $all_done) ? 'complete' : ''}} {{$cur_step == 0 ? 'current' : ''}}">Personal Info</a>
                    <a href="#artisticInfo" class="step {{($cur_step > 1 || $all_done) ? 'complete' : ''}} {{$cur_step == 1 ? 'current' : ''}}">Artistic Info</a>
                    <a href="#yourWorks" class="step {{($cur_step > 2 || $all_done) ? 'complete' : ''}} {{$cur_step == 2 ? 'current' : ''}}">Your Works</a>
                    <a href="#socialMediaLinks" class="step {{($cur_step > 3 || $all_done) ? 'complete' : ''}} {{$cur_step == 3 ? 'current' : ''}}">Social Media Links</a>
                    <a href="#choicePictures" class="step {{($cur_step > 4 || $all_done) ? 'complete' : ''}} {{$cur_step == 4? 'current' : ''}}">Choice pictures</a>
                </div>

                <div id class="scroller layout">
                    @include('artists.edit-profile.personal-info')
                    @include('artists.edit-profile.artistic-info')
                    @include('artists.edit-profile.your-works')
                    @include('artists.edit-profile.social-media-links')
                    @include('artists.edit-profile.choice-pictures')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var cur_step = {{$cur_step}};
        var first_time = {{isset($first_time) ? "true" : "false"}};
        var home_url = "{{url('/')}}";

        $('.step').click(function(){
            if($(this).hasClass('btn'))
                var idx = $(this).parents('form').index() - 1;
            else
                var idx = $(this).index();

            goToStep(idx);
        });

        function goToStep(idx) {
            $('.step.current').removeClass('current');
            $('.step').eq(idx).addClass('current');
            $('.scroller').css({transform: 'translateX(' + (idx * -100) + '%)'});

            cur_step = idx;
        }

        $("#editProfile .lv-form").bind("submit", function(e){
//            return;
            e.preventDefault();
            saveInfo($(this).prop('id'));
        });


        function saveInfo(formId){
            showLoading(formId);
            var la_form = $("#"+formId);
            var formdata = new FormData(la_form[0]);

            $.ajax({
                method:'POST',
                type:'POST',
                url: la_form.attr("action"),
                data: formdata,
                dataType:'json',
                async:false,
                processData: false,
                contentType: false
            })
            .done(function(response){
                if(response.success){
                    console.log(response.msg);
                    showToast("success", response.msg, formId, 2000);
                    $('.step').eq(cur_step).addClass('complete');

                    if(cur_step < 4){
                        var nextStep = cur_step + 1;
                        goToStep(nextStep);
                    }else{
                        if(first_time){
                            window.location.href = home_url;
                        }
                    }
                }else{
                    showToast("error", response.msg, formId, 2000);
                }
            })
            .fail(function(response){
                console.log(response);
                showToast("error", "Unknown Error occured, Please try again.");
            })
            .always(function(){
                console.log("Imeisha hio");
                hideLoading(formId);
            });
        }

        function showLoading(id){
            $("#"+id).addClass('loading');
        }

        function hideLoading(id){
            $("#"+id).removeClass('loading');
        }

        function showToast(type, msg, id, time){
            var timeout = 1200;
            if(time)
                timeout = time;

            var new_toast = $('<div class="toast '+type+'"><div class="toast-content"><a href="javascript:void(0);"><svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg> </a>'+msg+'</div></div>');
            $("#laSteps").prepend(new_toast);
            new_toast.addClass('visible');

            setTimeout(function(){
                new_toast.removeClass('visible');

                setTimeout(function(){
                    new_toast.remove();
                }, 200);
            }, timeout);
        }
    </script>
@endsection