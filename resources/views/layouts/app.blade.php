<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" type="text/css"/>
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <script src="{{asset('js/myjs.js')}}"></script>
        
        <title>{{config('app.name')}}</title>
        <link rel="icon" type="image/gif/png" href="assets/fishing-rod.png">
        
    </head>
    <body>
        @include('part.index')
        @yield('content')
        @include('part.footer')
    </body>
</html>