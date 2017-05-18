<style>
    #events{
        min-height: 400px;
        overflow: hidden;
        background: #fff;
    }

    #events #content{
        position: relative;
        min-height: calc(100vh + 10px);
        background-color: var(--app-cool-white);
    }

    #events #text{
        padding: 8em 0; padding-left: 14em;
        padding-top: 8em;
    }

    #events #text h2{
        font-size: 3em; font-family: 'Gotham ultra', sans-serif; margin-bottom: 0.4em;
    }

    #events #text p{
        font-family:'Gotham light', sans-serif;font-size: 1.6em; line-height: 1.5em;
    }
</style>

<div id="events" class="layout center-center">
    <div id="content" class="hidden">
        <div class="faded-bg" style="opacity: 1;background-image:url({{asset('images/banner/im3.jpg')}});"></div>
        <div class="faded-bg" style="opacity: 1; background-color: rgba(0,0,0,0.8);"></div>
    </div>
    <div id="text" class="flex self-start">
        <h2>Events</h2>
        <p>
            Throughout the year we host a number events. These events are normally focused mainly on championing the
            pairing the exuding of intrinsinc passion for art with attainment of better living standards.
        </p>
    </div>

    <div style="margin: 0 3em; min-width: 120px">
        @include('landing.events.next_event')
    </div>
</div>