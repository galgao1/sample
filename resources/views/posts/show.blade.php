@extends('layouts.app')
@section('content')
<div class="well">
    <h1 class="display-3 text-center">{{$post->title}}</h1>
    <p>{!!$post->body!!}</p>
    <p style="text-align:right;font-size:12px;">Written on {{$post->created_at}}</p>
    <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    <hr>
    <p style="text-align: right;"><a class="btn btn-primary btn-lg" href="../posts" role="button">Go Back</a></p>
</div>


@endsection
