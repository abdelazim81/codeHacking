@extends('layouts.admin')
@section('title','Upload Media')
@section('content')
    <br><br>
    <h1>Upload Media</h1>
    <br><br>
    <div class="row">
      {!! Form::open(['action' => 'AdminMediaController@store', 'method' => 'post','files'=>true]) !!}
      	{!! Form::label('file', 'Upload Image', ['class' => 'control-label']) !!}
        <br><br><br>
        {!! Form::File('file',null, ['class' => 'form-control']) !!}
        <br><br>
        {!! Form::submit('Upload Image', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
    <br><br><br>
    <div class="row">
        @include('includes.display_form_error')
    </div>
@endsection