<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;
use App\Models\Employee;

Route::get('/', function () {
    return view('home', [
        'name' => 'Иван',
        'age' => 30,
        'position' => 'Разработчик',
        'address' => 'Москва, ул. Примерная, 1',
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'Санкт-Петербург, ул. Контактная, 2',
        'post_code' => '190000',
        'email' => 'contact@example.com',
        'phone' => '+7 999 123-45-67',
    ]);
});

Route::get('/userform', [FormProcessor::class, 'index']);
Route::post('/store_form', [FormProcessor::class, 'store']);
Route::get('/test_database', function () {
    $employee = new Employee();
    $employee->name = 'Test Name';
    $employee->save();
    return 'Employee saved!';
});
