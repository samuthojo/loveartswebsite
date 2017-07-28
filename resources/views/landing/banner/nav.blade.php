<?php
        $nav_class = isset($for_inner) ? "light" : "";
?>
<div id="bannerTopBar" class="layout center justified {{$nav_class}}">
    <a href="{{url('/')}}" id="title" class="layout center" style="color: #555">
        <img src="{{asset('images/logoactive.png')}}" alt="" style="height: 60px">
    </a>

    <div id="mobNav" class="layout vertical">
        <button href="#openMenu" id="menuToggler" class="layout center-center" onclick="toggleMobileMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        </button>

        <div id="theLinks" class="layout vertical main-nav" style="padding-bottom: {{Auth::guest() ? 80 : 60}}px;">
            <div id="mobNavTitle" class="layout center-center">
                MENU
            </div>
            <div style="width: 100%; height: 100%; position: fixed; right: 0; top: 0; background-size: cover; pointer-events: none; opacity: 0.1; background-image: url({{asset('images/banner/im4.jpg')}});"></div>

            @include('layouts.nav_links')

            @if(!Auth::guest())
                <a href="#"><hr style="width: 70%; border: none; border-bottom: 1px solid #fbbeb9;"></a>

                <a href="{{url('artists/'.Auth::user()->id)}}">
                    PROFILE
                </a>

                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('mobLogoutBtnForm').submit();">
                    LOGOUT
                </a>

                <form id="mobLogoutBtnForm" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>


        @if(Auth::guest())
            <a href="{{url('/login')}}" id="mobLoginBtn" class="layout center-center">
                LOGIN / SIGNUP
            </a>
        @endif
    </div>

    <div id="links" class="layout center main-nav">
        @include('layouts.nav_links')
    </div>

    <div id="authOptions" class="layout center">
        @if(Auth::guest())
            <a href="{{url('/login')}}">LOGIN</a>
        @else
            <img src="{{Auth::user()->avatar_url()}}" alt="{{Auth::user()->first_name()}}'s profile pictur4">

            <div id="miniProfile" class="layou vertical start">
                <a href="{{url('artists/'.Auth::user()->id)}}" id="loggedUserName">
                    {{Auth::user()->name}}
                </a>

                <a style="background: #000; align-self:" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    LOGOUT
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endif
    </div>
</div>