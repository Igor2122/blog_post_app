<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  @include('layouts.partials._styles')
  @yield('styles')
</head>
<body>
  
  @include('layouts.partials._nav')
  
  <div class="container">
    @yield('content')
  </div>
    
</body>
</html>