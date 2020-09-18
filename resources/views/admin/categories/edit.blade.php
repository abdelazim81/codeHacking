@extends('layouts.admin')
@section('title','Edit Category')
@section('content')
    @include('includes.tinyEditor')
    <br><br>
    <h1>Create Category</h1>
    <br><br>
    <div class="row">
        {!! Form::model($category,['action' =>['AdminCategoriesController@update',$category->id], 'method' => 'PATCH']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Category', ['class' => 'btn btn-primary col-sm-5']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::open(['action' => ['AdminCategoriesController@destroy',$category->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Delete Category', ['class' => 'btn btn-danger col-sm-offset-2 col-sm-5']) !!}
        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('includes.display_form_error')
    </div>
@endsection