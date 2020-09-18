@extends('layouts.admin')
@section('title','All Media')
@section('content')
    <br><br>
    <h1>All Media</h1>
    <br><br>
    <h4 class="text-danger">Click Over Id To Delete</h4><br>
    <div class="row">
        @if($photos)
            <form action="/delete/media" method="POST" class="form-inline">
            <table class="table table-responsive table-hover">
                <thead>
                <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Created</th>
                </thead>
                <tbody>
                @foreach($photos as $photo)
                    <tr>
                        <td><a href="{{route('media.edit',$photo->id)}}">{{$photo->id}}</a></td>
                        <td><img class="img img-responsive img-thumbnail" height="50" width="50" src="{{asset('images/' . $photo->file)}}" alt="Photo Of ID {{$photo->id}}"></td>
                        <td>{{$photo->created_at? $photo->created_at->diffForHumans() : 'No Data Available'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </form>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-offset-5 col-sm-6">
            {{$photos->render()}}
        </div>
    </div>
@endsection