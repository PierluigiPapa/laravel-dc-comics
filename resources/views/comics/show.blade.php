@extends('layouts.app')

@section('page-title', 'Show Comics')

@section('main-content')

<div class="container">
    <h1 class="text-center text-dark py-2">DC COMICS</h1>
    <div class="row justify-content-center">
        <div class="card g-3 me-4 bg-primary border-dark" style="width: 18rem;">
            <div class="card-body">
                <figure>
                    <img src="{{$comic->thumb}}" alt="{{$comic->thumb}}">
                </figure>
                <h4 class="card-title text-center text-white">{{$comic->title}}</h4>
                <p class="card-text text-center text-white">Descrizione: {{$comic->description}}</p>
                <p class="card-text text-center text-white">Comic Price: {{$comic->price}}</p>
            </div>
          </div>
    </div>
</div>
@endsection
