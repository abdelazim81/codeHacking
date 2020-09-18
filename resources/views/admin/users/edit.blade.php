@extends('layouts.admin')
@section('title','Update User')
@section('content')
    @include('includes.tinyEditor')
    <br><br>
    <h1>Update User</h1>
    <br><br><br>
    <div class="row">
        <div class="col-sm-3">
            <img height="400" width="400" class="img img-thumbnail img-responsive img-circle" src="{{asset('images/' . $user->photo->file)}}" alt="{{$user->name}}">
        </div>
        <div class="col-sm-9">
            {!! Form::model($user,['action' => ['AdminUsersController@update',$user->id], 'method' => 'PATCH','files'=>true]) !!}
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
                    {!! Form::select('role_id',array(1=>'administrator',2=>'author',3=>'Subscriber'),null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Status', ['class' => 'control-label']) !!}
                    {!! Form::select('is_active',array(''=>'',0=>'Not Active', 1=>'Active'),null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update User Info ', ['class' => 'btn btn-primary col-sm-5']) !!}
                </div>
            {!! Form::close() !!}


            {!! Form::open(['action' => ['AdminUsersController@destroy', $user->id], 'method' => 'DELETE']) !!}
            <div class="form-group">
                {!! Form::submit('Delete User', ['class' => 'btn btn-danger col-sm-offset-2 col-sm-5']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <br><br>
    <div class="row">
        @include('includes.display_form_error')
    </div>
@endsection