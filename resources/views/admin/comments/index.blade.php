@extends('layouts.admin')
@section('title','Comments')
@section('content')
    <br><br>

    <div class="row">
        @if(count($comments)>0)
            <h1>All Comments</h1>
            <br><br>
            <table class="table table-hover table-responsive">
                <thead>
                    <th>ID</th>
                    <th>Post Title</th>
                    <th>Author</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Updated</th>
                </thead>
                <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->post->title}}</td>
                        <td>{{$comment->author}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->created_at->diffForHumans()}}</td>
                        <td>{{$comment->updated_at->diffForHumans()}}</td>

                        <td>
                            @if($comment->is_active == 1)
                                {!! Form::open(['action' => ['PostCommentsController@update',$comment->id], 'method' => 'PATCH']) !!}
                                	<input type="hidden" name="is_active" value="0">
                                {!! Form::submit('Un-Approve', ['class' => 'btn btn-warning']) !!}
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['action' => ['PostCommentsController@update',$comment->id], 'method' => 'PATCH']) !!}
                                <input type="hidden" name="is_active" value="1">
                                {!! Form::submit('Approve', ['class' => 'btn btn-success']) !!}
                                {!! Form::close() !!}
                            @endif
                        </td>

                        <td>
                            {!! Form::open(['action' => ['PostCommentsController@destroy',$comment->id], 'method' => 'DELETE']) !!}
                            <input type="hidden" name="is_active" value="0">
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                        <td><button class="btn btn-success"><a style="color:#FFF;" href="{{route('home.post',$comment->post->id)}}">View Post</a></button></td>
                        <td><button class="btn btn-success"><a style="color:#FFF;" href="comment/replies/{{$comment->id}}">View Replies</a></button></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        @else
        <h1 class="center-text">No Comments Yet</h1>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-offset-5 col-sm-6">
            {{$comments->render()}}
        </div>
    </div>
@endsection