<div class="publication layout vertical">
    <div class="pimage layou center-justifie">
        <img src="{{asset('images/info/'.($i + 1).'.jpg')}}" alt="">
    </div>
    <h2 class="pname">
        Publication Name
    </h2>
    <div class="psummary">
        <?php
            $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda aut debitis deserunt eligendi exercitationem harum inventore itaque iusto laborum magnam, nam nemo numquam quibusdam repellendus similique sit ullam unde!";
            $len = 40;
        ?>
        {{str_limit($str, $len)}}
    </div>
    <a href="#file{{$i}}">
        <i class="fa fa-download" style="margin-top: 2px; margin-right: 8px;"></i>
        <span>Download</span>
    </a>
</div>