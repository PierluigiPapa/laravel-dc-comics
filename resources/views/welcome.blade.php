@section('page-title', 'Home')

@section('main')



<div class="container">
    <h1 class="text-center text-dark">WELCOME TO COMICS</h1>
    <div class="row">
        @foreach ( $comics as $comic)
        <div class="card g-3 me-4 bg-success border-dark" style="width: 18rem;">
            <div class="card-body">
              <h4 class="card-title text-center text-white">{{$comic->title}}</h5>
              <p class="card-text text-center text-white">Comic Price: {{$comic->price}}</p>
              <p class="card-text text-center text-white">Comic Series: {{$comic->series}}</p>
              <p class="card-text text-center text-white">Sale Date: {{$comic->sale_date}}</p>
            </div>
          </div>
        @endforeach
    </div>
</div>


@endsection
