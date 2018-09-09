@extends('layouts.app_layout')

@section('content')
    <h1>{{$title}}</h1>
    {{-- we check for the services first? --}}
    @if(count($services) > 0)
        {{-- loop through the array tha we declared in the controller module --}}
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection