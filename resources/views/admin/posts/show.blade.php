@extends('layouts.app')

<div class="card mx-auto" style="width: 18rem;">
    <img class="card-img-top" src="{{ asset("storage/$post->image") }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->content}}</p>
      <p class="card-text text-muted">{{$post->slug}}</p>
      <p>
        @if( $post->category )
            <span class="badge badge-pill badge-{{$post->category->color}}">{{ $post->category->label}}</span>
        @else
            - null -
        @endif
    </p>
      <p>
        @forelse ($post->tags as $tag)
        <span class="badge badge-secondary">{{$tag->label}}</span>
            
        @empty
            - null -
        @endforelse
    
    </p>
      <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Go back to list</a>
    </div>
  </div>