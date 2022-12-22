@extends('layouts.app')

@section('title', 'I nostri fumetti')

@section('content')
    {{-- Banner --}}
    <section class="bg-secondary">
        <div class="container py-4">
            <h2 class="text-center">Tutti i nostri fumetti</h2>
        </div>
    </section>
    {{-- /Banner --}}
    {{-- Table --}}
    <section>
        <div class="container mt-4">
            <div class="text-end mb-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea un nuovo fumetto</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Data di vendita</th>
                        <th scope="col">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">
                                    Guarda
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                    Modifica
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        Cancella
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    {{-- Table --}}

@endsection
