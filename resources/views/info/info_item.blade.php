<a href="{{url('/events/'.($i+1))}}" class="event layou vertical">
    <div class="date">JULY 4, 2017</div>
    <h2 class="name">
        Publication Name
    </h2>
    <div class="excerpt">
        <?php
            $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda aut debitis deserunt eligendi exercitationem harum inventore itaque iusto laborum magnam, nam nemo numquam quibusdam repellendus similique sit ullam unde!";
            $len = 40;
        ?>
        {{str_limit($str, $len)}}
    </div>
    <div class="image layout center-center">
        <img src="{{asset('images/events/'.($i + 1).'.jpg')}}" alt="">
    </div>

    <div class="next-arrow">
        More info
    </div>
</a>