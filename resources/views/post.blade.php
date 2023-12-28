@extends('layouts.main')

@section('container')
  <article>
    <h1>{{ $post->title }}</h1>

    <p>By <a href="author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <p><a href="/blog">Back to Posts</a></p>
  </article>
@endsection