<style>
    #manager{
        position: relative;
        /*padding: 2em 0;*/
        /*min-height: calc(100vh + 10px);*/
        background-color: #f6f6f6;
        /*background-color: var(--app-cool-white);*/
        padding-left: 8em;
    }

    #manager > #text{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        min-width: 50%;
        max-width: 50%;
        padding: 2em;
        padding-top: 6em;
        padding-bottom: 4em;
    }

    #manager > #text h2{
        font-family: 'Gotham ultra', sans-serif;
        font-size: 2.8em;
        margin-bottom: 0.7em;
        /*color: #777;*/
    }

    #manager > #text p{
        font-family: 'Lora Italic', sans-serif; font-size: 1.8em; line-height: 1.4em;
    }

    #manager > #image{
        /*min-width: 30%;*/
        /*max-width: 30%;*/
        /*max-height: 400px;*/
        /*margin-left: auto;*/
    }
</style>

<div id="manager" class="layout center-justified">
    <div id="text" style="color: #444" class="layout vertical center-justified flex">
        <h2>A word from our Director</h2>
        <p style="">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum debitis deleniti dicta dolores eveniet incidunt iste laboriosam minima nesciunt perspiciatis repellendus sequi, unde ut vel! Fugiat laboriosam.
        </p>
        <div style="margin-left: auto; padding: 1.4em;">
            <em style="font-family: 'Lora Italic', cursive; font-style: italic; font-size: 1.5em;">
                Love, Abella
            </em>
        </div>
    </div>

    <div id="image" class="layout inline center-center">
        <img class="self-end" src="{{asset('images/abellar.png')}}" alt="Abella Bateyunga" height="500px">
    </div>
</div>