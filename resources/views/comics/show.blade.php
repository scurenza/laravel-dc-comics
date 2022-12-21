@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <section>
        <div class="container">
            <h2>Fumetto n° {{ $comic->id }}</h2>
            <div class="mt-4">
                @if (!empty($comic->thumb))
                    <img class="w-25" src="{{ $comic->thumb }}" alt="">
                @else
                    <p>Nessuna immagine presente</p>
                @endif
            </div>
            <dl>
                <dt>Nome</dt>
                <dd>{{ $comic->title }}</dd>
                <dt>Tipologia</dt>
                <dd>{{ $comic->type }}</dd>
                <dt>Prezzo</dt>
                <dd>{{ $comic->price }}</dd>
                <dt>Serie</dt>
                <dd>{{ $comic->series }}</dd>
                <dt>Venduto dal</dt>
                <dd>{{ $comic->sale_date }}</dd>
            </dl>
            {{-- {!! !!} per evitare escape di tag html. Da usare con cautela --}}
            <h4 class="my-4">Descrizione</h4>
            <p>{!! $comic->description !!}</p>
        </div>
    </section>
@endsection
