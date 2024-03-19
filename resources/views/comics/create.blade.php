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
                </div>

                <div class="mb-3">
                    <input type="textarea" name="description" id="description" class="form-control" placeholder="Inserisci la descrizione">
                </div>

                <div class="mb-3">
                    <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci l'immagine">
                </div>

                <div class="mb-3">
                    <input type="number" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo" min="0">
                </div>

                <div class="mb-3">
                    <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci la serie">
                </div>

                <div class="mb-3">
                    <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di produzione">
                </div>

                <div class="mb-3">
                    <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci la tipologia">
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary fw-bold border border-dark">INVIA</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
