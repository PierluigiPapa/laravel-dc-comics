@extends('layouts.app')

@section('page-title', 'Show Comics')

@section('main-content')

<div class="container">
    <h1 class="text-center text-dark py-2">DC COMICS</h1>
    <div class="row justify-content-center">
        <div class="card g-3 me-4 bg-primary border-dark" style="width: 40rem; ">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <img src="{{$comic->thumb}}" class="img-fluid mb-3" style="max-width: 50%; max-height: 50%;" alt="DC_Comics_image">
                <h4 class="card-title text-center text-white">{{$comic->title}}</h4>
                <p class="card-text text-center text-white"><strong>Descrizione:</strong> {{$comic->description}}</p>
                <p class="card-text text-center text-white"><strong>Comic Price:</strong> $ {{$comic->price}}</p>
            </div>
          </div>
    </div>
</div>
@endsection
