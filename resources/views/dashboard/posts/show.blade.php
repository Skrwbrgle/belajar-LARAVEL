@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-3">
        <div class="col-lg-9">
            <h1 class="mb-3">{{ $post->title }}</h1>
        
              <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i> Back to all my posts</a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"><i class="bi bi-pencil-square"></i> Edit</a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i> Delete</button>
              </form>

              @if ($post ->image)
                <div style="max-height: 350px; overflow:hidden">
                  <img src="{{ asset('storage/' .  $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
              @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
              @endif

            <article class="my-3 fs-5">

                {!! $post->body !!}
        
            </article>
        </div>
    </div>
  </div>


@endsection