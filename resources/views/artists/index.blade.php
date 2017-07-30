@extends('layouts.app-inner')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/artists.css')}}">
@endsection

@section('content')
    <div id="artists">
        <div id="pageHeader" style="padding-top: 4em; margin-bottom: 4.6em; backgroun: #ff4d4d;">
            <div class="container">
                <div class="layout vertical center justified">
                    <h1 class="page-title">ARTISTS</h1>
                    <div id="artistFilters" class="layout center-center wrap">
                        <a href="#filterAll"
                           class="artist-filter active filter-all"
                           onclick="setFilter('all')">ALL</a>

                        @foreach($filters as $filter)
                            <a href="#filter{{$filter->name}}"
                               class="artist-filter filter-{{$filter->id}}"
                               onclick="setFilter('{{$filter->id}}')">{{$filter->name}}</a>
                        @endforeach
                    </div>

                    <select id="artistFiltersMob" onchange="setFilter(this.value)">
                        <option value="all">All</option>
                        @foreach($filters as $filter)
                            <option value="{{$filter->id}}">{{$filter->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div id="artistList" class="container" style="margin-bottom: 8.6em;">
            <h3 id="noResults" style="text-align: center;">No artists found for that filter, plese try out other filters.</h3>

            <div class="layout wrap">
                @foreach($artists as $artist)
                    <a class="artist type-{{explode(" ", $artist->pillar_id)[0]}}" href="{{url('artists/' . $artist->id)}}">
                        <div class="image" style="background-image: url({{$artist->avatar_url()}})"></div>
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