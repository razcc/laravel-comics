@extends('layouts.app')

{{-- Sezione MAIN da modificare --}}
@section('page-title', 'Single-Comic')

@section('main-content')
    {{-- Jumbo Cont --}}
    <div class="jumbo_cont">
    </div>
    {{-- Barra blu --}}
    <div class="barra_blue_show"></div>


    <div class="single_comic_cont">
        {{-- Title --}}
        <h2>{{ $singleComic['title'] }}</h2>

        {{-- Copertina Cont --}}
        <div class="copertina_show_cont">
            <img src="{{ $singleComic['thumb'] }}" alt="">
        </div>



    </div>

@endsection
