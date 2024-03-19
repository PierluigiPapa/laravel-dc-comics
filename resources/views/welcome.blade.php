@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<h1 class="text-center">BENVENUTI SU DC COMICS</h1>
<div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
    <a href="{{ route('comicsData.index') }}" class="btn btn-primary fw-bolder fs-1 border-1 border-dark">
        VISUALIZZA FUMETTI
    </a>
</div>



@endsection
