<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [FormProcessor::class, 'index']);
