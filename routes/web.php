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
    $data = [
        'page_title'=> 'Welcome to la Molisana',
        'page_description' => 'Lorem ipsum dolor sit amet ipsum dolor sit amet'
        ];

    return view('home', $data);
})->name('home');

Route::get('/products', function () {
    //per suddividere i generi creo unistanza della classe collection dal db
    $pasta_collection = collect(config('db.pasta'));
    //dd($pasta_collection);
    //creo i vari generi di pasta con i metodi che la classe collection mette a disposizione(where)
    $pasta_corta = $pasta_collection->where('tipo', '===', 'corta');
    //dd($pasta_corta);
    $pasta_lunga = $pasta_collection->where('tipo', '===', 'lunga');
    //dd($pasta_lunga);
    $pasta_cortissima = $pasta_collection->where('tipo', '===', 'cortissima');
    //dd($pasta_cortissima);

    //creo una variabile che contiene i vari generi di pasta
    $data = [
        'pasta'=> [
            'corta'=> $pasta_corta,
            'lunga'=> $pasta_lunga,
            'cortissima'=> $pasta_cortissima
        ]
        ];

    return view('products', $data);
})->name('products');