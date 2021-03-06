<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Expediente;
use App\Http\Livewire\Expedientes;
use GuzzleHttp\Client;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('expedientes',Expedientes::class)->name('expedientes');

Route::get('/', function (GuzzleHttp\Client $client){});


//Route::get('expediente', Expediente::class);

//Route::get('expedientes', Expedientes::class);
