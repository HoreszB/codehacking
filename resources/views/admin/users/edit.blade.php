@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>

    <div class="row">
        <div class="col-sm-3">
            @if($user->photo)
                <img src="{{$user->photo->path}}" alt="" class="img-responsive img-rounded">
            @else
                <h2>Photo not available</h2>
            @endif
            
        </div>

        <div class="col-sm-9">

        
            {!! Form::model($user, ['method'=>'Patch', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

            {{ csrf_field() }}

            <div class="form-group">
                
                {!! Form::label('name', 'Name:') !!}

                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                
            </div>

            <div class="form-group">
                
                {!! Form::label('email', 'Email:') !!}

                {!! Form::email('email', null, ['class'=>'form-control']) !!}
                
            </div>

            <div class="form-group">
        
                {!! Form::label('password', 'Password:') !!}

                {!! Form::password('password', ['class'=>'form-control']) !!}
                
            </div>

            <div class="form-group">
                
                {!! Form::label('role_id', 'Role:') !!}

                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
                
            </div>

            <div class="form-group">
                
                {!! Form::label('is_active', 'Status:') !!}

                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Disabled'), null, ['class'=>'form-control']) !!}
                
            </div>

            <div class="form-group">
                
                {!! Form::label('photo_id', 'File:') !!}

                {!! Form::file('photo_id', null, 0, ['class'=>'form-control']) !!}
                
            </div>

            <div class="form-group">
                
                {!! Form::submit('Modify user', ['class'=>'btn btn-primary']) !!}
                
            </div>

            
            {!! Form::close() !!}

            
            {!! Form::open(['method' => 'Delete', 'action' => ['AdminUsersController@destroy',$user->id]]) !!}

            <div class="form-group">
                
                {!! Form::submit('Delete user', ['class'=>'btn btn-danger']) !!}
                
            </div>
            
            {!! Form::close() !!}
            
            
        </div>

    </div>

    <div class="row">
        @include('includes.create_from_error')
    </div>

    
    
    
@endsection