@extends('layouts.admin')
@section('title','Edit Post')
@section('content')
    @include('includes.tinyEditor')
    <br><br>
    <h1>Edit Post</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-2">
            <img class="img img-responsive img-responsive" width="250" height="250" src="{{asset('images/' . $post->photo->file)}}" alt="{{$post->user->name}}">
        </div>
        <div class="col-sm-offset-1"></div>
        <div class="col-sm-8">
        {!! Form::model($post,['action' => ['AdminPostsController@update',$post->id], 'method' => 'PATCH', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
            {!! Form::select('category_id',array(''=>'Choose Category') + $categories, null , ['class' => 'form-control']) !!}
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
            {!! Form::submit('Update Post', ['class' => ' btn btn-success col-sm-5']) !!}
        </div>
        {!! Form::open(['action' => ['AdminPostsController@destroy',$post->id], 'method' => 'DELETE']) !!}
        	{!! Form::submit('Delete Post', ['class' => 'btn btn-danger col-sm-offset-2 col-sm-5']) !!}
        {!! Form::close() !!}
        {!! Form::close() !!}
    </div>
    </div>
    <div class="row">
        @include('includes.display_form_error')

    </div>
@endsection
