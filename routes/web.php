<?php

use App\Models\Pixabay;
use Illuminate\Support\Facades\App;
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
    return view('index',["images"=>Pixabay::get(request()->search)]);
});


Route::view('/ajax','ajax');

Route::get('/components/ajax/images', function () {
    return view('components.ajax.images',["images"=>Pixabay::get(request()->search)]);
});

