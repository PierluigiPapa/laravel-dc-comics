@extends('layouts.app')

@section('page-title', 'Create Comics')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD NEW COMICS') }}</div>

                <div class="card-body">
                    <form action="{{ route('comicsData.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo" value="{{old('title') ?? $comic->title}}">
                        </div>

                        <div class="mb-3">
                            <input type="textarea" name="description" id="description" class="form-control" placeholder="Inserisci la descrizione" value="{{old('description') ?? $comic->description}}">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci l'immagine" value="{{old('thumb') ?? $comic->thumb}}">
                        </div>

                        <div class="mb-3">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo" min="0" value="{{old('price') ?? $comic->price}}">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci la serie" value="{{old('series') ?? $comic->series}}">
                        </div>

                        <div class="mb-3">
                            <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di produzione" value="{{old('sale_date') ?? $comic->sale_date}}">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci la tipologia" value="{{old('type') ?? $comic->type}}">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('INVIA') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
