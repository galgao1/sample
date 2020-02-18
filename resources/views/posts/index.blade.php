@extends('layouts.app')

@section('content')
    <h1 class="display-3 text-center">BLOG</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{{$post->body}}</p>
                <p style="text-align:right;font-size:12px;">Written on {{$post->created_at}}</p>
                <hr>
            </div>
        @endforeach
    @else
        <p>No Post Found!</p>
    @endif
    {{$posts->links()}}
@endsection
