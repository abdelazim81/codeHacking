@extends('layouts.admin')
@section('title','Posts')
@section('content')
    <br><br>
    <h1>All Posts</h1>
    <br><h5 class="text-danger">Click Over User Name To Edit</h5><br>
    <br><br>
    <div class="row">
    <table class="table table-responsive table-hover table-striped">
        <thead>
            <th>ID</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </thead>
        <tbody>
        @if ($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{route('posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category->name? $post->category->name : 'UnCategorized'}}</td>
                    <td><img width="100" height="100" class="img img-thumbnail img-responsive" src="{{asset('images/' . $post->photo->file)}}" alt="{{$post->user->name}}"></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td><button class="btn btn-success"><a style="color:#FFF;" href="{{route('home.post',$post->id)}}">View Post</a></button></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    </div>
    <div class="row">
        <div class="col-sm-offset-5 col-sm-6">
            {{$posts->render()}}
        </div>
    </div>
@endsection
