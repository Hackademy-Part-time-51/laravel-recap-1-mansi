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

Route::get('/contattami', [PageController::class, 'contact'])
    ->name('contact');

Route::post('/invia-contatto', [PageController::class, 'send'])
    ->name('send');


//Wildcard = rotta jolly
// Route::get('/{service}', function () {
//     return view('404');
// });
