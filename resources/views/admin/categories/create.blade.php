@extends('layouts.admin')
@section('title','Create Category')
@section('content')
    @include('includes.tinyEditor')
    <br><br>
    <h1>Create Category</h1>
    <br><br>
    <div class="row">
        {!! Form::open(['action' => 'AdminCategoriesController@store', 'method' => 'POST']) !!}
        	<div class="form-group">
                {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        <div class="form-group">
            {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('includes.display_form_error')
    </div>
@endsection