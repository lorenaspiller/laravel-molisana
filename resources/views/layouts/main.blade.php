<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('pageTitle')</title>
        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- /google font --}}

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    </head>
    <body>

       @include('parts.header')

        <main>
            @yield('content')
        </main>

       @include('parts.footer')      
    </body>
</html>