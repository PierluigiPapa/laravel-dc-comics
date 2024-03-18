@extends('layouts.app')

@section('page-title', 'Show Comics')

@section('main-content')

<div class="container">
    <h1 class="text-center text-dark py-2">DC COMICS</h1>
    <div class="row">
        @foreach ( $comicsData as $element)
        <div class="card g-3 me-4 bg-primary border-dark" style="width: 18rem;">
            <div class="card-body">
                <figure>
                    {{-- <img src="{{$element['thumb']}}"> --}}
                </figure>
              <h4 class="card-title text-center text-white">{{$element['title']}}</h5>
              <p class="card-text text-center text-white">Descrizione: {{$element['description']}}</p>
              <p class="card-text text-center text-white">Comic Price: {{$element['price']}}</p>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
