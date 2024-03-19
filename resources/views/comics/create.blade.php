@extends('layouts.app')

@section('page-title', 'Create Comics')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD NEW COMICS') }}</div>

                <div class="card-body">
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
