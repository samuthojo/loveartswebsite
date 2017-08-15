<div class="layout" style="max-width: 1100px; margin: auto;">
    <div class="about-me flex">
        <h3>I'm a <span class="hot-word">{{$artist->simple_description}}</span></h3>
        <p>
            {{str_limit($artist->description, 300)}}
        </p>
    </div>

    <div style="height: 180px; margin-left: 1.5em; border-right: 1px solid #ccc; align-self: center"></div>

    <div class="about-me-deco layout center-center" style="padding: 2.6em 0;">
        <?php
            $viewMap = [
//                1 => '<div class="cd layout center-center"><div class="hole" style="background-image: ;"></div></div>',
//                2 => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9.4 10.5l4.77-8.26C13.47 2.09 12.75 2 12 2c-2.4 0-4.6.85-6.32 2.25l3.66 6.35.06-.1zM21.54 9c-.92-2.92-3.15-5.26-6-6.34L11.88 9h9.66zm.26 1h-7.49l.29.5 4.76 8.25C21 16.97 22 14.61 22 12c0-.69-.07-1.35-.2-2zM8.54 12l-3.9-6.75C3.01 7.03 2 9.39 2 12c0 .69.07 1.35.2 2h7.49l-1.15-2zm-6.08 3c.92 2.92 3.15 5.26 6 6.34L12.12 15H2.46zm11.27 0l-3.9 6.76c.7.15 1.42.24 2.17.24 2.4 0 4.6-.85 6.32-2.25l-3.66-6.35-.93 1.6z"/></svg>',
                1 => '<img src="'.asset('images/pillars/mic.png').'" alt="">',
                2 => '<img src="'.asset('images/pillars/camera.png').'" alt="">',
                3 => '<img src="'.asset('images/pillars/video_camera.png').'" alt="">',
                4 => '<img src="'.asset('images/pillars/drama.png').'" alt="">',
                5 => '<img src="'.asset('images/pillars/dancer.png').'" alt="">',
                6 => '<img src="'.asset('images/pillars/dress.png').'" alt="">',
                7 => '<img src="'.asset('images/pillars/quill.png').'" alt="">',
                8 => '<img src="'.asset('images/pillars/laptop.png').'" alt="">',
                9 => '<img src="'.asset('images/pillars/paint_brush.png').'" alt="">',
            ];

        ?>

        {!! isset($viewMap[$artist->pillar_id]) ? $viewMap[$artist->pillar_id] : '' !!}
    </div>
</div>