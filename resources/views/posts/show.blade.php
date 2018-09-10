@extends('layouts.app_layout')

@section('content')
   <a class="btn btn-default" href="/posts">Go Back</a>
   <h1>{{$post->title}}</h1>
   <div>
      {!!$post->body!!}
   </div>
   <hr>
   <div class="mt-3">
      <small class="text-muted">Written on {{$post->created_at}}</small>
   </div>
   <hr>
   <a href="/posts/{{$post ->id}}/edit" class="btn btn-default">Edit</a>
   
   {!!Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'POST', 'pull-right'])!!}
       {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
   {!!Form::close()!!}
@endsection