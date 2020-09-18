@extends('layouts.admin')
@section('title','Edit Reply Page')
@section('content')
    @include('includes.tinyEditor')
    <br><br>
    <h1>Edit Reply</h1>
    <hr>
    {!! Form::model($reply,['action' => ['CommentRepliesController@update',$reply->id], 'method' => 'PATCH']) !!}
    	<div class="form-group">
            {!! Form::label('body', 'Reply', ['class' => 'control-label']) !!}
            {!! Form::textarea('body', null, ['class' => 'form-control','rows'=>3]) !!}
        </div>
        {!! Form::submit('Save', ['class' => 'btn btn-primary col-sm-5']) !!}
    {!! Form::open(['action' => ['CommentRepliesController@destroy',$reply->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn btn-danger col-sm-offset-2 col-sm-5']) !!}
    {!! Form::close() !!}
    {!! Form::close() !!}
@endsection