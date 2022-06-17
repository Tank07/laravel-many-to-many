@extends('layouts.app')

@section('content')

<td><a href="{{route('admin.posts.create')}}"class="btn btn-primary m-2">Create</a></td>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">Slug</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col" class="text-center">Buttons</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)

            <tr>
                <th scope="row">{{$post->title}}</th>
                <td>{{$post->content}}</td>
                <td> <img src="{{ asset("storage/$post->image") }}" alt="" style="width: 50px; height: 50px;"> </td> 
                <td class=" text-muted">{{$post->slug}}</td>
                <td>
                    @if( $post->category )
                        <span class="badge badge-pill badge-{{$post->category->color}}">{{ $post->category->label}}</span>
                    @else
                         null 
                    @endif
                </td>
                <td>
                    @forelse ($post->tags as $tag)
                    <span class="badge badge-secondary">{{$tag->label}}</span>
                        
                    @empty
                         null 
                    @endforelse
                
                </td>

                <td class="d-flex">
                    <a href="{{route('admin.posts.show', $post->id)}}"class="btn btn-info">Show</a>
                    <a href="{{route('admin.posts.edit', $post->id)}}"class="btn btn-success mx-1">Edit</a>
                     <form action=" {{ route('admin.posts.destroy', $post->id) }} " method="POST" class="delete-form">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                     </form> 
                </td>
              </tr>
                
            @empty

            <h1>Non sono presenti post</h1>
                
            @endforelse
        
        </tbody>
    </table>

@endsection


@section('scripts')

@endsection
