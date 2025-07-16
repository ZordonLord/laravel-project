<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [FormProcessor::class, 'index']);
Route::post('/store_form', [FormProcessor::class, 'store']);
Route::get('/test_database', function () {
    $employee = new Employee();
    $employee->name = 'Test Name';
    $employee->save();
    return 'Employee saved!';
});
