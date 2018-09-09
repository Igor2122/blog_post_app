@extends('layouts.app_layout')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="container w-75">
        {{-- creting title --}}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder' => 'Title'])}}
        </div>
        {{-- creting body --}}
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class'=>'form-control', 'placeholder' => 'Content'])}}
        </div>
                {{-- in the brackets we are adding attributes --}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection

