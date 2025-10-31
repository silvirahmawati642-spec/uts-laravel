<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di file inilah kita mendefinisikan semua route (rute URL)
| yang akan digunakan dalam aplikasi Laravel kita.
|
*/

Route::get('/', function () {
    // Mengarahkan ke file resources/views/home.blade.php
    return view('home');
});