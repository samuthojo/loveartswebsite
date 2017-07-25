<div id="featuredArtistQuestions" class="layout vertical">
    <?php
    $questions = [
        [
            "question" => "How do you come up with your wonderful melodies?",
            "answer" => "I'd say its inspiration, you'd be amazed with what the proper inspiration can do."
        ],
        [
            "question" => "Was your hit song <q>Saa nyingine</q> targeted at anyone in particular?",
            "answer" => "[Laughs] This is one of those moments I wish I could plead the fifth. The answer is yes and no; it was definitely inspired by a real situation but it wasn't limited to it."
        ],
        [
            "question" => "How has marriage life changed your lifestyle?",
            "answer" => "So I wouldn't say it has really, at least not that much; obviously I can't do things like go off clubbing on a 'hey-ho' at one in the night anymore, but other than that it the same maybe even more fun."
        ]
    ];
    ?>

    @for($i = 0; $i < count($questions); $i++)
        <?php
            $qn = $questions[$i];
        ?>
        <div class="question layout">
            <div class="question-number layout cente">
                <div>
                    0{{$i + 1}}
                </div>
            </div>

            <div class="question-content layout vertical">
                <h3 class="question-title">
                    {!! $qn['question'] !!}
                </h3>
                <p class="question-answer">
                    <em>{!! $qn['answer'] !!}</em>
                </p>
            </div>
        </div>
    @endfor

    <div id="artistActions" class="layout">
        <a href="#">
            <i class="fa fa-link"></i>&nbsp;
            ALL QUESTIONS&nbsp;
        </a>
        <a href="#" style="color: var(--app-main-color)">
            <i class="fa fa-youtube-play"></i>&nbsp;
            WATCH INTERVIEW&nbsp;
        </a>
    </div>
</div>