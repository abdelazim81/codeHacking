@extends('layouts.admin')
@section('title','users')
@section('content')

    <h1 class="h1">Users</h1><br><br>

    <br><h5 class="text-danger">Click Over Name To Edit</h5><br>
    <div class="row">
    <table class="table table-hover">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Is Active</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @if ($users)
            @foreach($users as $user)
                <tr>
                    <td><img width="100" height="100" class="img-thumbnail" src="{{asset('images/' . $user->photo->file)}}" alt="{{$user->name}}"></td>
                    <td><a href="users/{{$user->id}}/edit">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active=='1' ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>

                </tr>

            @endforeach

        @endif
    </table>
    </div>
    <div class="row">
        <div class="col-sm-offset-5 col-sm-6">
            {{$users->render()}}
        </div>
    </div>
@stop