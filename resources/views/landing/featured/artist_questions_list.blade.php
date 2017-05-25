{{--1. ARTIST PICTURE(CHANGING)--}}
{{--2. CHANGING QUESTIONS--}}
{{--3. ARTIST ANSWER TO QUESTION--}}
{{--4. QUESTION INICATORS--}}

<style>
    #featuredArtistQuestions .question{
        margin: 0.5em 0;
        position: relative;
    }

    #featuredArtistQuestions .question .question-number{
        margin-right: -2em;
        /*position: absolute;*/
        top: 0;
        height:100%;
        /*background-color: greenyellow;*/
    }

    #featuredArtistQuestions .question .question-number div{
        font-family: "Ultra", sans-serif;
        display: inline-block;
        /*position: absolute;*/
        font-size: 5.76em;
        text-align: center;
        padding: 0 0.05em;
        background-color: #eee;
        width: 90px;
        letter-spacing: 2px;
        opacity: 0.4;
        color: #aaa;
    }

    #featuredArtistQuestions .question h3{
        font-family: "Gotham bold", serif;
        font-size: 1.4em;
    }

    #featuredArtistQuestions .question p{
        margin-top: 7px;
        font-size: 1em;
        /*font-style: italic;*/
        font-family: "Gotham light", sans-serif;
        color: #555;
        padding-top: 0.2em;
        padding-bottom: 0.8em;
    }
</style>

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