<style>
    #artistPics > h3{
        text-align: center;
        color: #000;
        font-family: "Gotham light", sans-serif;
        font-size: 1.8em;
        padding-top: 2.8em;
        /*padding-bottom: 1em;*/
    }

    #artistPics .shots-list{
        /*overflow-x: auto;*/
        padding: 10px;
        padding-bottom: 20px;
        margin-right: 10px;
    }

    #artistPics .shots-list .insta-pic{
        height: 220px;
        width: 220px;
        min-width: 220px;
        /*max-width: 200px;*/
        background: #ececec;
        margin-right: 10px;
        overflow: hidden;
    }

    #artistPics .shots-list .insta-pic:last-child{
        margin-right: 0;
    }
</style>

<h3 style="padding-bottom: 0;">ON INSTAGRAM</h3>
<div style="margin: auto; width: 180px; border-top: 1px solid #ccc; margin-top: 1.5em; margin-bottom: 3.2em"></div>

<div class="shots-list">
    <div class="layout center-justified">
        @for($i = 1; $i < 12; $i++)
            <a href="#" class="insta-pic layout center-center">
                <img src="{{asset('images/instagram/'.$i.'.jpg')}}" alt="" style="height: 100%;">
            </a>
        @endfor
    </div>
</div>