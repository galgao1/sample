@extends('layouts.app')
@section('content')
<div class="well">
    <h3>{{$post->title}}</h3>
    <p>{!!$post->body!!}</p>
    <p style="text-align:right;font-size:12px;">Written on {{$post->created_at}}</p>
    <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>
    <hr>
    <p style="text-align: right;"><a class="btn btn-primary btn-lg" href="../posts" role="button">Go Back</a></p>
</div>
@endsection
