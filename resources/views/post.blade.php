@extends('layouts.main')

@section('container')

  <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8">
          <h1 class="mb-4">{{ $post->title }}</h1>
          
          <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
  
          @if ($post ->image)
            <div style="max-height: 350px; overflow:hidden">
              <img src="{{ asset('storage/' .  $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
          @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
          @endif

          <article class="my-3 fs-5">

            {!! $post->body !!}
      
          </article>
      
          <a href="/posts" class="text-decoration-none">Back to Posts</a>
        </div>
      </div>
  </div>

  {{-- <div class="d-flex justify-content-center">
		{{ $post->links() }}
	</div> --}}

    
@endsection