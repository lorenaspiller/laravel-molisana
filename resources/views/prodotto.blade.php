@extends('layouts.main')

@section('pageTitle')
    Prodotto | La Molisana
@endsection

@section('content')
    
    <div class="product">
        <div class="left">
            <a href="{{ route('prodotto', ['id' => $prev])}}"><i class="fas fa-chevron-left"></i></a>
        </div>
        <div class="inner-wrapper">
            <div class="container">
                <h1>{{$pasta['titolo']}}</h1>
                <img src="{{$pasta['src-h']}}" alt="{{$pasta['titolo']}}">
                <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
                <p>{{!! $pasta['descrizione'] !!}}</p>
            </div> 
        </div>
        <div class="right">
            <a href="{{ route('prodotto', ['id' => $next])}}"><i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
@endsection