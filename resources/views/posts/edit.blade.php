@extends('layouts.app_layout')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="container w-75">
        {{-- creting title --}}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder' => 'Title'])}}
        </div>
        {{-- creting body --}}
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class'=>'form-control', 'placeholder' => 'Content'])}}
        </div>
                {{-- in the brackets we are adding attributes --}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {{-- hidden request that laravel allows us to do --}}
        {{Form::hidden('_method', 'PUT')}}
    </div>
    {!! Form::close() !!}
@endsection

