<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La Molisana</title>
        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- /google font --}}

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    </head>
    <body>

       @include('parts.header')

        <main>
            <div class="container">
                <section>
                    <h2 class="uppercase">Le lunghe</h2>
                    <div class="cards">
                        @foreach ($lunghe as $pasta)
                            <div class="card">
                                <img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}">
                            </div> 
                        @endforeach
                    </div>
                </section>

                <section>
                    <h2 class="uppercase">Le corte</h2>
                    <div class="cards">
                        @foreach ($corte as $pasta)
                            <div class="card">
                                <img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}">
                            </div> 
                        @endforeach
                    </div>
                </section>

                <section>
                    <h2 class="uppercase">Le cortissime</h2>
                    <div class="cards">
                        @foreach ($cortissime as $pasta)
                            <div class="card">
                                <img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}">
                            </div> 
                        @endforeach
                    </div>
                </section>

            </div>
        </main>

       @include('parts.footer')      
    </body>
</html>