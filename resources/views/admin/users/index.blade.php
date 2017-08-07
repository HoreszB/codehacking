@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}
                <td>
                    @if($user->photo)
                        <img height="100" src="{{ $user->photo->path }}" alt="">
                    @else
                        <h3>No photo</h3>
                    @endif
                    
                <td><a href="{{ route('admin.users.edit', $user->id)}}">{{ $user->name }}</a>
                <td>{{ $user->email }}
                <td>{{ $user->role->name }}
                <td>{{ $user->is_active ? "Active" : "Disabled"}}
                <td>{{ $user->created_at->diffForHumans() }}
                <td>{{ $user->updated_at->diffForHumans() }}
            </tr>
        @endforeach
    @endif
    </tbody>
  </table>
    
@endsection