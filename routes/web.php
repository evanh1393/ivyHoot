<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ContactComp;   


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', ContactComp::class);

Route::get('/info', function () {
    phpinfo();
});