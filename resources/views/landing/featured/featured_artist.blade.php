{{--1. ARTIST PICTURE(CHANGING)--}}
{{--2. CHANGING QUESTIONS--}}
{{--3. ARTIST ANSWER TO QUESTION--}}
{{--4. QUESTION INICATORS--}}

<style>
    #featured{
        padding-top: 6.5em;
        padding-bottom: 3.5em;
        background: var(--app-cool-white);
        lg(top left, var(--app-accent1-color), var(--app-main-color), var(--app-accent1-color))
    }

    #featured #header{
        /*text-align: center;*/
        max-width: 650px;
        margin: auto;
    }

    #featured #header h2{
        display: inline-block;
        padding-top: 0;
        margin-bottom: 0;
        width: 100%;
        font-family: "Gotham light", sans-serif;
        font-size: 1em;
        letter-spacing: 3px;
        color: #555;
    }

    #featured #header p{
        margin: 10px 0;
        margin-top: 15px;
        font-size: 1.8em;
        /*letter-spacing: 4px;*/
        font-family: "Gotham bold", sans-serif;
        text-transform: uppercase;
        color: #444;
        margin-bottom: 25px;
    }

    #featured #artistImage{
        position: relative;
        max-width: calc(50% - 30px);
        padding: 30px 60px;
        margin-bottom: 40px;
    }

    #featured #artistImage #image{
        width: 100%;
        height: auto;
        height: 470px;
        box-shadow: 0 0 55px rgba(0,0,0,0.12);
        background-size: cover;
        margin-bottom: 20px;
        background-image: url({{asset('images/maurice.jpg')}});
    }
</style>

<div id="featured">
    <div class="layout" style="overflow: hidden; background-colo: #fff;">
        <div id="artistImage" class="flex layou center-justified">
            <div id="image"></div>
        </div>
        <div class="flex" style="padding-top: 30px;">
            <div id="header" class="layout vertical center-justifie">
                <h2>FEATURED ARTIST</h2>
                <p>Baraka Kamuzoga</p>
            </div>

            @include('landing.featured.artist_sections')
        </div>
    </div>
</div>