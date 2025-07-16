<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfGeneratorController;
use App\Models\Employee;
use App\Models\Log;

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
Route::get('get-employee-data', [EmployeeController::class, 'index']);
Route::post('store-form', [EmployeeController::class, 'store']);
Route::get('employee/{id}', [EmployeeController::class, 'show']);
Route::get('/test_database', function () {
    $employee = new Employee();
    $employee->name = 'Test Name';
    $employee->save();
    return 'Employee saved!';
});
Route::get('/index', [BookController::class, 'index']);
Route::post('/store', [BookController::class, 'store']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'get']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);
Route::get('/logs', function () {
    $logs = Log::orderByDesc('id')->limit(100)->get();
    return view('logs', compact('logs'));
});
