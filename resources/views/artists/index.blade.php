@extends('layouts.app-inner')

@section('content')
    <style>
        #artists{
            min-height: 100vh;
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            -ms-perspective: 1000px;
            perspective: 1000px;
            padding-top: 4em;
        }

        #artists .container{
            max-width: 1200px;
            margin: auto;
        }

        .page-title{
            font-family: "Gotham ultra", sans-serif;
            font-size: 3.5em;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .artist{
            position: relative;
            min-width: calc(33.33% - 4px);
            max-width: calc(33.33% - 4px);
            margin-bottom: 6px;
            margin-right: 4px;
            height: 300px;
            overflow: hidden;
            text-decoration: none;
        }

        .artist-text{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: rgba(0,0,0,0.4);
            color: #fff;
            font-family: "Gotham light", sans-serif;
            padding: 0 1em;

            -webkit-transition: all 0.35s;
            -moz-transition: all 0.35s;
            -ms-transition: all 0.35s;
            -o-transition: all 0.35s;
            transition: all 0.35s;
        }

        .artist-text:hover{
            background: rgba(0,0,0,0.8);
        }

        .artist-name{
            font-size: 2em;
            -webkit-transition: all 0.15s;
            -moz-transition: all 0.15s;
            -ms-transition: all 0.15s;
            -o-transition: all 0.15s;
            transition: all 0.15s;
        }

        .artist .image{
            width: 100%;
            height: 100%;
            background-color:#cccccc;
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .artist:hover .artist-name{
            opacity: 0;
        }

        .artist:hover .artist-names{
            font-family: "Gotham ultra", sans-serif;
            letter-spacing: 3px;
            transform: scale(1.8);
            padding: 0.5em 3em;
            color: #555;
        }

        .artist:not(:hover) .artist-quote{
            display: none;
        }

        .artist:hover .artist-quote{
            font-size: 1.5em;
            position: absolute;
            padding: 0 20px;
        }

        #artistFilters{
            padding: 20px;
        }

        #artistFilters .artist-filter{
            position: relative;
            color: #888;
            padding: 15px 38px;
            min-width: 100px;
            text-align: center;
            margin: 0 8px;
            letter-spacing: 2px;
            font-size: 16px;
            white-space: normal;
        }

        #artistFilters .artist-filter:before{
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            transform: rotateX(18deg);
            background: #f0f0f0;
            z-index: -1;
        }

        #artistFilters .artist-filter:hover:before{
            background: #f0f0f0;
        }

        #artistFilters .artist-filter.active{
            color: #fff;
            color: #000;
            font-weight: bold;
        }

        #artistFilters .artist-filter.active:before{
            background: var(--app-contrast-color);
        }

        #artists #noResults{
            font-size: 1.2em;
            color: #555;
            font-family: Verdana;
        }

        #artists:not(.no-artists) #noResults{
            display: none;
        }
    </style>

    <div id="artists">
        <div style="padding-top: 4em; margin-bottom: 4.6em; backgroun: #ff4d4d;">
            <div class="container">
                <div class="layout vertical center justified">
                    <h1 class="page-title">ARTISTS</h1>
                    <div id="artistFilters" class="layout center-center wrap">
                        <a href="javascript:void(0);"
                           class="artist-filter active filter-all"
                           onclick="setFilter('all')">ALL</a>

                        @foreach($filters as $filter)
                            <a href="javascript:void(0);"
                               class="artist-filter filter-{{$filter->id}}"
                               onclick="setFilter('{{$filter->id}}')">{{$filter->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-bottom: 8.6em;">
            <div class="layout wrap">
                @foreach($artists as $artist)
                    <a class="artist type-{{explode(" ", $artist->pillar_id)[0]}}" href="{{url('artists/' . $loop->iteration)}}">
                        <div class="image" style="background-image: url({{asset('images/artists/im' . (($loop->iteration % 11) + 1) . '.png')}})"></div>
                        <div class="artist-text layout vertical center-center text-center">
                            <div class="artist-name">
                                {{$artist->name}}
                            </div>

                            <div class="artist-quote">
                                <q>
                                    {{$artist->art_quote}}
                                    @if(!$artist->art_quote)
                                        I really, really, really love art, I mean I know its kind of a cliche at this point to say but art literally saved me.
                                    @endif
                                </q>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <h3 id="noResults" style="text-align: center;">No artists found for that filter, plese try out other filters.</h3>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function setFilter(filter){
            $('.artist-filter').removeClass('active');
            $('.artist-filter.filter-'+filter).addClass('active');

            if(filter === "all"){
                $(".artist").fadeIn();
                return;
            }
            $(".artist").fadeOut();

            var matched_artists = $(".artist.type-"+filter);
            matched_artists.fadeIn();

            if(matched_artists.length < 1)
                $("#artists").addClass('no-artists');
            else
                $("#artists").removeClass('no-artists');
        }
    </script>
@endsection