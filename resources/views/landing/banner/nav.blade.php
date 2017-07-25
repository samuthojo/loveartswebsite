<?php
        $nav_class = isset($for_inner) ? "light" : "";
?>
<div id="bannerTopBar" class="layout center justified {{$nav_class}}">
    <a href="{{url('/')}}" id="title" class="layout center" style="color: #555">
        <img src="{{asset('images/logoactive.png')}}" alt="" style="height: 60px">
    </a>

    <div id="links" class="layout center">
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