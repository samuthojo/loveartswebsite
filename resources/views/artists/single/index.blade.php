@extends('layouts.app-inner')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/artist.css')}}">
@endsection

@section('content')
    <div id="artist">
        @include('artists.single.top-part')
        @include('artists.single.sections')
    </div>
@endsection