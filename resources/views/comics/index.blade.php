@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')

<div class="container">
    <h1 class="text-center text-dark py-2">DC COMICS</h1>
    <div class="row">
        @foreach ($comicsData as $element)
        <div class="card g-3 me-4 bg-primary border-dark" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <img src="{{$element['thumb']}}" class="img-fluid mb-3" style="max-width: 50%; max-height: 50%;" alt="DC_Comics_image">
                <a href="{{ route('comicsData.show', ['comicsDatum' => $element['id']])}}" class="text-decoration-none text-center text-white fw-bold py-3 fs-5">{{ $element['title']}}</a>
                {{-- <h4 class="card-title text-center text-white">{{ $element['title'] }}</h4> --}}
                <p class="card-text text-center text-white">Comic Price: $ {{ $element['price'] }}</p>
                <p class="card-text text-center text-white">Comic Series: {{ $element['series'] }}</p>
                <p class="card-text text-center text-white">Sale Date: {{ $element['sale_date'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
