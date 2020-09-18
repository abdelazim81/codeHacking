@extends('layouts.admin')
@section('title','Replies Page')
@section('content')
    <br><br>

    @if (count($replies)>0)
        <h1>Replies</h1>
        <hr>
        <table class="table table-responsive table-hover table-striped">
            <thead>
                <th>Author</th>
                <th>Email</th>
                <th>Body</th>
                <th>Created</th>
                <th>updated</th>
            </thead>
            <tbody>
            @foreach($replies as $reply)
                <tr>
                    <td>{{$reply->author}}</td>
                    <td>{{$reply->email}}</td>
                    <td>{{$reply->body}}</td>
                    <td>{{$reply->created_at->diffForHumans()}}</td>
                    <td>{{$reply->updated_at->diffForHumans()}}</td>
                    <td><button class="btn btn-warning"><a style="color:#FFF;" href="{{route('replies.edit',$reply->id)}}">Edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h3>No Replies On This Comment</h3>
        <hr>
    @endif
@endsection