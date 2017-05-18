<style>
    #pillars{
        position: relative;
        /*overflow: hidden;*/
        min-height: calc(100vh + 10px);
        /*min-height: 500px;*/
        /*background: var(--app-cool-white);*/
        background-color: #fff;
        /*background: #f7f0f0;*/

    /*rgba(247, 240, 240, 0.5)*/
    }

    #pillars #title{
        /*margin: 0 42px;*/
        display: inline-block;
        /*box-shadow: 0 0 6px rgba(0,0,0,0.2);*/
        padding: 1.2em 0.8em;
        padding-bottom: 0.8em;
        font-size: 4.6em;
        color: #444;
        /*color: #e66161;*/
    }

    #pillars #title.avtive{
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    #pillars #title span:first-child{
        font-family: "Gotham light", sans-serif;
        display: block;
        /*display: none;*/
        font-size: 0.4em;
        margin-bottom: -3px;
    }

    #pillars #title span:last-child{
        font-family: "Gotham ultra", sans-serif;
    }
</style>

<div id="pillars" class="layout center-justified">
    <div id="title" class="self-start">
        <span>OUR</span>
        <span>Pillars</span>
    </div>
</div>