@extends('layouts.app')

@section('main-content')
    <section>
      <div class="container mt-5">
        <div class="row">

          @foreach ($comic_books as $index => $comic_book)
          
          <div class="col-2">
            <div class="card">
              <div class="card-body">
                <img src="{{ $comic_book['thumb'] }}" alt="" class="img-fluid">
                <h6>{{ $comic_book['title'] }}</h6>
              </div>
            </div>
          </div>

          @endforeach

        </div>
      </div>
    </section>
@endsection