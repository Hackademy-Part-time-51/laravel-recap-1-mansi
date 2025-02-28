<?php

use Illuminate\Support\Facades\Route;
//use Namespace + NomeDontroller
use App\Http\Controllers\PageController;
//-------


//Statica = Non ci sono parametri  
Route::get('/', [PageController::class, 'index'])
    ->name('index');

Route::get('/chi-sono-cesco', [PageController::class, 'about'])
    ->name('about');

//Parametrica = Ci sono paramaetri nelle graffe
Route::get('/dettagli/{article}', [PageController::class, 'show'])
    ->name('show');


//Wildcard = rotta jolly
// Route::get('/{service}', function () {
//     return view('404');
// });
