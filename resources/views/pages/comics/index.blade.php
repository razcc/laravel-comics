@extends('layouts.app')


{{-- Sezione MAIN da modificare --}}
@section('page-title', 'Comics')

@section('main-content')
    {{-- Jumbo Cont --}}
    <div class="jumbo_cont">
    </div>

    <div class="comics_cont">
        @foreach ($comics as $elem)
            <a class="link_comic" href="">
                <div class="card">
                    <div>
                        <img class="copertina" src="{{ $elem['thumb'] }}" alt="">
                    </div>
                    {{ $elem['series'] }}
                </div>

            </a>
        @endforeach


    </div>

@endsection
