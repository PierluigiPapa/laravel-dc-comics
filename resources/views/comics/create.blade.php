@extends('layouts.app')

@section('page-title', 'Create Comics')

@section('main-content')

<div class="container">
    <h1 class="text-center">AGGIUNGI UN NUOVO COMIC</h1>
    <div class="row justify-content-center py-4">
        <div class="col-md-8">
            <form action="{{ route('comicsData.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo">
                    @error('title')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="textarea" name="description" id="description" class="form-control" placeholder="Inserisci la descrizione">
                    @error('description')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci l'immagine">
                    @error('thumb')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="number" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo" min="0">
                    @error('price')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci la serie">
                    @error('series')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di produzione">
                    @error('sale_date')
                    <div class="bg-danger text-white text-center">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci la tipologia">
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
