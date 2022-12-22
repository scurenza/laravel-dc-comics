@extends('layouts.app')
@section('title', 'Modifica')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center py-3">Modifica un fumetto</h2>
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div>
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>
                    <div>
                        <label for="thumb">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>
                    <div>
                        <label for="price">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>
                    <div>
                        <label for="series">Serie</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>
                    <div>
                        <label for="sale_date">Data di vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>
                    <div>
                        <label for="type">Tipo</label>
                        <input type="text" class="form-control" id="type" name="type"
                            value="{{ $comic->type }}">
                    </div>
                    <div>
                        <label for="title">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="10">{{ $comic->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning mt-3">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
