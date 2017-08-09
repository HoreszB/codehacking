@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>

    
    {!! Form::open(['method'=>'Post', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

     {{ csrf_field() }}

    <div class="form-group">
        
        {!! Form::label('title', 'Title:') !!}

        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        
        {!! Form::label('category_id', 'Category:') !!}

        {!! Form::select('category_id',$categories, null, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        
        {!! Form::label('content', 'Content:') !!}

        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        
        {!! Form::label('photo_id', 'File:') !!}

        {!! Form::file('photo_id', null, 0, ['class'=>'form-control']) !!}
        
    </div>

     <div class="form-group">
        
        {!! Form::submit('Create post', ['class'=>'btn btn-primary']) !!}
        
    </div>
    
    {!! Form::close() !!}
    
     @include('includes.create_from_error')

@endsection