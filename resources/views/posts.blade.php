@extends('layouts.main')

@section('container')

  <h1 class="mb-4 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-4">
      <div class="col-md-6">

        <form action="/posts" class="input-group mb-3">
          @if (request('category'))
            <input type="hidden" name="category" value ="{{ request('category') }}">
          @endif

          @if (request('author'))
          <input type="hidden" name="author" value ="{{ request('author') }}">
          @endif

          <button class="btn border-dark py-2 rounded-pill rounded-end bg-light border-end-0" type="submit" id="button-addon1">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>

          <input type="text" class="form-control border-dark py-2 px-0 rounded-pill rounded-start border-start-0 bg-light" placeholder="Search post here" name="search" value="{{ request('search') }}">
        </form>

      </div>
    </div>

  @if ($posts->count())
    <div class="card mb-3">
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">

      <div class="card-body text-center">
        <h3 class="card-title">
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
            {{ $posts[0]->title }}
          </a>
        </h3>
        
        <p>
          <small>
            By
            <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
              {{ $posts[0]->author->name }}
            </a>
            in 
            <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
              {{ $posts[0]->category->name }}
            </a> {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>

        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">
          Read more
        </a>
      </div>
    </div>

    <div class="container">
      <div class="row">

        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">

          <div class="card">

            <a href="/posts?category={{ $post->category->slug }}">
              <div class="position-absolute m-2 bg-dark py-2 px-3 text-white border rounded" style="--bs-bg-opacity: .8;">
                {{ $post->category->name }}
              </div>
            </a>
            
            <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}"  class="card-img-top" alt="{{ $post->category->name }}">

            <div class="card-body">
              <h5 class="card-title">
                {{ $post->title }}
              </h5>

              <p>
                <small> 
                  By 
                  <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                    {{ $post->author->name }}
                  </a> 
                  {{ $post->created_at->diffForHumans() }} 
                </small>
              </p>

              <p class="card-text">{{ $post->excerpt }}</p>

              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">
                Read more
              </a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  @else
    <p class="text-center fs-4">No post found.</p>
  @endif

@endsection
