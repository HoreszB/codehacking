@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Content</th>
        <th>Owner</th>
        <th>Category</th>
        <th>Created</th>
        <th>Updated</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @if($posts)
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}
                <td>
                    @if($post->photo)
                        <img height="100" src="{{ $post->photo->path }}" alt="">
                    @else
                        <h3>No photo</h3>
                    @endif
                    
                <td>{{ $post->title }}
                <td>{{ $post->content }}
                <td>{{ $post->user->name }}
                <td>{{ $post->category ? $post->category->name : "-" }}
                <td>{{ $post->created_at->diffForHumans() }}
                <td>{{ $post->updated_at->diffForHumans() }}
            </tr>
        @endforeach
    @endif
    </tbody>
  </table>
@endsection