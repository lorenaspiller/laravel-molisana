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

    $links = config('paste.links');

    return view('home', [
        'lunghe' => $lunga,
        'corte' => $corta,
        'cortissime' => $cortissima,
        'links' => $links
        ]
    );
})->name('homepage');


Route::get('/ultime-notizie', function() {
    
    $links = [
        'pastificio' => [
            'Il Pastificio',
            'Grano decorticato a pietra',
            'Il Molise c\'è',
            'Filiera Integrata',
            '100 anni di pasta',
            'Sartoria della pasta',
            'Spaghetto quadrato',
            'Le persone'
        ],
        'collezione da chef' => [
            'Collezione da Chef',
            'Grandi Cucine',
            'Biologiche',
            'Quadrate'
        ],
        'prodotti' => [
            'Le Classiche',
            'Le Integrali',
            'Le Speciali',
            'Le Biologiche',
            'Le Gluten-Free',
            'Le Semole',
            'Le Extra di Lusso'
        ]
    ];
    return view('news', [
        'links' => $links
    ]);
})->name('news');


Route::get('prodotto/{id}', function($id) {

    $data = config('paste.data');
    
    if($id >= count($data)) {
        abort(404);
    }
    
    $pasta = $data[$id];

    $links = config('paste.links');
    
    return view('prodotto', [
            'links' => $links,
            'pasta' => $pasta
        ]
    );
})->where('id', '[0-9]+')->name('prodotto');