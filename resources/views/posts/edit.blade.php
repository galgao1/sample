@extends('layouts.app')
@section('content')
    <h1 class="display-3 text-center">EDIT</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST']) !!}
        <div class="form-group text-left">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control', 'placeholder'=>'Title','autocomplete' => 'off'])}}

            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder'=>'Body'])}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
        <div class="text-center">
            {{Form::submit('Submit',['class' => 'btn btn-success'])}}
        </div>
    {!! Form::close() !!}

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    {{-- <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script> --}}
    <script>
        CKEDITOR.replace( 'summary-ckeditor', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
