<a href="{{url('/events/'.($i+1))}}" class="event layout" style="position: relative; padding-left: 160px;">
    <div class="imag layout center-cente" style="width: 140px; overflow: hidden; backgroun: #000; padding: 20px; padding-right: 0; overflow: hidden; position: absolute; top: 0; left: 0; height: 100%;">
        <img src="{{asset('images/events/'.($i + 1).'.jpg')}}" alt="" style="height: 100%;">
    </div>
    <div>
        <div class="date">JULY 4, 2017</div>
        <h2 class="name">
            It's Name
        </h2>
        <div class="excerpt">
            <?php
                $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda aut debitis deserunt eligendi exercitationem harum inventore itaque iusto laborum magnam, nam nemo numquam quibusdam repellendus similique sit ullam unde!";
                $len = 40;
//                if($i === 0 || $i === 1)
//                    $len = 150
            ?>
            {{str_limit($str, $len)}}
        </div>

        <div class="next-arrow">
            View Event
        </div>
    </div>
</a>