@extends('layouts.admin')
@section('title','Delete Photo')
@section('content')
    <div class="row">
        <br><br>
        <h1>Delete Photo</h1><br><br>

        {!! Form::open( ['action' => ['AdminMediaController@destroy', $photo->id], 'method' => 'DELETE']) !!}
        <hr>
        <hr>
        <h3>Are You Sure To Delete This Image ? </h3>
        <br><br>
        <hr>
        {!! Form::submit('Delete Image', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection