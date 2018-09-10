<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{ config('app.name', 'Blog-Post') }}</title>
        
    </head>
    <body>
        @include('layouts.partials._navbar')   
        <div class="container">
            @include('alerts.messages')
            {{-- <div class="row">
                <div class="col-md-3">
                    @include('layouts.partials._sidenav')
                    @yield('side_menu')
                </div> --}}
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>