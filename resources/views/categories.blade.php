@extends('layouts.main')

@section('container')
  <h1 class="mb-5">Post Categories</h1>

  <div class="div">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4 my-3">

          <a href="/posts?category={{ $category->slug }}">
            <div class="card text-bg-dark">
              <img src="https://source.unsplash.com/500x300?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">

              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center text-white fs-3 py-2 flex-fill bg-dark border-dark border-top border-bottom" style="--bs-bg-opacity: .8;">{{ $category->name }}</h5>
              </div>
            </div>
          </a>

        </div>
      @endforeach
    </div>
  </div>
  
@endsection
