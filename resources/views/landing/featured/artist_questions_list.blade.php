<div id="featuredArtistQuestions" class="layout vertical">
    <?php
    $questions = [
        [
            "question" => "How do you come up with your wonderful melodies?",
            "answer" => "I'd say its inspiration, you'd be amazed with what proper inspiration can do."
        ],
        [
            "question" => "Was your hit song <q>Saa nyingine</q> targeted at anyone in particular?",
            "answer" => "[Laughs] This is one of those moments I wish I could plead the fifth. The answer is yes and no; it was definitely inspired by a real situation but it wasn't limited to it."
        ],
        [
            "question" => "How has marriage life changed your lifestyle?",
            "answer" => "Ummmmm not that much; obviously I can't do things like go off clubbing on a 'hey-ho' at one in the night anymore, but other than that it really is the same maybe even more fun."
        ],
        [
            "question" => "When is your next hit dropping?",
            "answer" => "Well, you've probably heard the buzz for Mwangaza, we're doing the final tweaks so it shouldn't be long now I'll have to get back to you on the exact day though."
        ],
        [
            "question" => "Final question, a little birdy told me you'll include the missus in your next video. Is this true?",
            "answer" => "Haha, you've got yourself a very nosy little birdy my friend, but yeah I'm getting Enid on the video for Saa Nyingine, she's a model and we've always wanted to do something like this for a while now. The shoot was actually pretty fun to do."
        ]
    ];
    ?>

    @for($i = 0; $i < count($questions); $i++)
        <?php
            $qn = $questions[$i];
        ?>
        <div class="question layout {{($i >= 3) ? 'other-question' : ''}}">
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
        <a href="#allQuestions" onclick="document.getElementById('featuredArtistQuestions').classList.toggle('view-all')">
            <i class="fa fa-link"></i>&nbsp;
            ALL QUESTIONS&nbsp;
        </a>
        {{--<a href="#" style="color: var(--app-main-color)">--}}
            {{--<i class="fa fa-youtube-play"></i>&nbsp;--}}
            {{--WATCH INTERVIEW&nbsp;--}}
        {{--</a>--}}
    </div>
</div>