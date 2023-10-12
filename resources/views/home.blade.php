@extends('layouts.app')

@section('main-content')
    @include('partials._jumbotron')
    <section>
      <div class="container pt-5 pb-5">
        <div class="row g-3">

          @foreach ($comic_books as $index => $comic_book)
          
          <div class="col-2">
            <div class="card">
              <div class="card-img">
                <img src="{{ $comic_book['thumb'] }}" alt="" class="img-fluid">
              </div>
              <div class="card-body">
                <h6>{{ $comic_book['title'] }}</h6>
              </div>
            </div>
          </div>

          @endforeach
        </div>
        <div class="d-flex justify-content-center" >
          <button>LOAD MORE</button>
        </div>
      </div>
    </section>
@endsection