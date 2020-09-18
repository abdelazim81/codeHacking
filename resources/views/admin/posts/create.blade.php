@extends('layouts.admin')
@section('title','Create Post')
@section('content')
    @include('includes.tinyEditor')
    <br><br>
    <h1>Create Post</h1>
    <br><br>
    <div class="row">
        {!! Form::open(['action' => 'AdminPostsController@store', 'method' => 'POST', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
            {!! Form::select('category_id',array(''=>'Choose Category') + $categories, 0 , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo', ['class' => 'control-label']) !!}
            {!! Form::File('photo_id',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Description', ['class' => 'control-label']) !!}
            {!! Form::textarea('body',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Publish Post', ['class' => ' btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    <div class="row">
        @include('includes.display_form_error')

    </div>
@endsection
