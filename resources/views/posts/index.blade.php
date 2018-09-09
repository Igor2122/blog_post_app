@extends('layouts.app_layout')

@section('content')
    <h1>Posts </h1>
    @if(count($posts) > 0)
      @foreach ($posts as $post)
      <div class="container w-75">
         <div class="card bg-faded mb-5 p-3">
            <div class="card-block">
                  <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
               <small>Written on {{$post->created_at}}</small>
            </div>
         </div>
      </div>
      @endforeach
      {{-- show the pagination --}}
      {{$posts->links()}}
   @else 
      <p>No Posts Found</p>
   @endif
@endsection