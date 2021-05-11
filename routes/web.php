<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $data = config('paste.data');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $pasta) {
        $pasta['id'] = $key;
        if ($pasta['tipo'] == 'lunga') {
            $lunga[] = $pasta;
        } elseif ($pasta['tipo'] == 'corta') {
            $corta[] = $pasta;
        } elseif ($pasta['tipo'] == 'cortissima'){
            $cortissima[] = $pasta;
        }
    };

    $links = config('links.links');

    return view('home', [
        'lunghe' => $lunga,
        'corte' => $corta,
        'cortissime' => $cortissima,
        'links' => $links
        ]
    );
})->name('homepage');


Route::get('/ultime-notizie', function() {
    $links = config('links.links');

    return view('news', [
        'links' => $links
    ]);
})->name('news');


Route::get('prodotto/{id}', function($id) {

    $data = config('paste.data');
    
    if($id >= count($data)) {
        abort(404);
    };

    //slider prodotti  
    $pasta = $data[$id];
    if ($id == count($data) - 1) {
        $next = 0;
        $prev = $id - 1;
    } elseif ($id == 0) {
        $prev = count($data) - 1;
        $next = $id + 1;
    } else {
        $prev = $id - 1;
        $next = $id + 1;
    }

    $links = config('links.links');
    
    return view('prodotto', [
            'links' => $links,
            'pasta' => $pasta,
            'next' => $next,
            'prev' => $prev
        ]
    );
})->where('id', '[0-9]+')->name('prodotto');