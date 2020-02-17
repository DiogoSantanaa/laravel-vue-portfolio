<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title></title>
            <meta name="keywords" content="" />
            <meta name="description" content="" />

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,800&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
            <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

             

            <!-- Boostrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

            <!-- CSS -->
            <link rel="stylesheet" href="{{mix('css/app.css')}}"> 
            {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

   
    </head>
    <body>
        @include('icons')
        @include('menu')
        @include('header')
        
        @include('about')
        @include('portfolio') 

        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
        @include('contact')
        @include('borders') 
        @include('footer') 
    </body>


</html>
