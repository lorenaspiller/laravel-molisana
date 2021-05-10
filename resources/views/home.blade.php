@extends('layouts.main')

@section('pageTitle')
    Homepage | La Molisana 
@endsection

@section('content')
<div class="main-home-page">
    <div class="container">
        <section>
            <h2 class="uppercase">Le lunghe</h2>
            <div class="cards">
                @foreach ($lunghe as $pasta)
                    <div class="card">
                        <a href="{{route('prodotto', [ 'id' => $pasta['id']])}}"><img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}"></a>
                    </div> 
                @endforeach
            </div>
        </section>

        <section>
            <h2 class="uppercase">Le corte</h2>
            <div class="cards">
                @foreach ($corte as $pasta)
                    <div class="card">
                        <a href="{{route('prodotto', [ 'id' => $pasta['id']])}}"><img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}"></a>
                    </div> 
                @endforeach
            </div>
        </section>

        <section>
            <h2 class="uppercase">Le cortissime</h2>
            <div class="cards">
                @foreach ($cortissime as $pasta)
                    <div class="card">
                        <a href="{{route('prodotto', [ 'id' => $pasta['id']])}}"><img src="{{ $pasta['src']}}" alt="{{ $pasta['titolo']}}"></a>
                    </div> 
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection
