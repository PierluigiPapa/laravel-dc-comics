@extends('layouts.app')

@section('page-title', 'Edit Comics')

@section('main-content')

<div class="container">
    <h1 class="text-center">MODIFICA IL COMIC</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{ route('comicsData.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo" value="{{old('title') ?? $comic->title}}">
                    @error('title')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="textarea" name="description" id="description" class="form-control" placeholder="Inserisci la descrizione" value="{{old('description') ?? $comic->description}}">
                    @error('description')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci l'immagine" value="{{old('thumb') ?? $comic->thumb}}">
                    @error('thumb')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="number" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo" min="0" value="{{old('price') ?? $comic->price}}">
                    @error('price')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci la serie" value="{{old('series') ?? $comic->series}}">
                    @error('series')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di produzione" value="{{old('sale_date') ?? $comic->sale_date}}">
                    @error('sale_date')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci la tipologia" value="{{old('type') ?? $comic->type}}">
                    @error('type')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary fw-bold border border-dark">INVIA</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
