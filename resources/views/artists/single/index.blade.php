@extends('layouts.app-inner')

@section('content')
    <style>
        #artist{
            min-height: 100vh;
            /*padding-bottom: 3em;*/
        }

        .container{
            max-width: 1200px;
            margin: auto;
        }
    </style>

    <div id="artist">
        @include('artists.single.top-part')
        @include('artists.single.sections')
    </div>
@endsection