@extends('layouts.admin')
@section('title','All Categories')
@section('content')
    <br><br>
    <h1>All Categories</h1>
    <br><h5 class="text-danger">Click Over Name To Edit</h5><br>
    <br><br>
    <div class="row">
        <table class="table table-hover table-responsive">
            <thead>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            </thead>
            <tbody>
            @if ($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('categories.edit',$category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>{{$category->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach

            @endif
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-sm-offset-5 col-sm-6">
            {{$categories->render()}}
        </div>
    </div>
@endsection