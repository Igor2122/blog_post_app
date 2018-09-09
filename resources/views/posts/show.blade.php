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
@endsection