@extends('layouts.admin')
@section('title','Create User')
@section('content')
    @include('includes.tinyEditor')
    <br><br>
    <h1>Create User</h1>
    <br><br><br>
    <div class="container">

         {!! Form::open(['action' => 'AdminUsersController@store', 'method' => 'POST','files'=>true]) !!}
        <div class="form-group">
             {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
             {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Upload Photo', ['class' => 'control-label']) !!}
            {!! Form::File('photo_id',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role', 'Role', ['class' => 'control-label']) !!}
            {!! Form::select('role_id',array(''=>'')+ $roles,null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status', ['class' => 'control-label']) !!}
            {!! Form::select('is_active',array(''=>'',0=>'Not Active', 1=>'Active'),null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create New User ', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close()  !!}

    </div>
    @include('includes.display_form_error')
@endsection