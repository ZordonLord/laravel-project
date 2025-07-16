<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee-form');
    }

    public function getPath(Request $request)
    {
        return $request->path();
    }

    public function getUrl(Request $request)
    {
        return $request->url();
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $position = $request->input('position');
        $address = $request->input('address');
        $workData = $request->input('workData');
        $jsonData = $request->input('jsonData');

        // Получаем служебную информацию
        $path = $this->getPath($request);
        $url = $this->getUrl($request);

        // Преобразуем JSON в массив
        $jsonArray = json_decode($jsonData, true);
        $jsonField1 = $jsonArray['field1'] ?? null;
        $jsonField2 = $jsonArray['field2'] ?? null;
        // Добавьте другие переменные по необходимости

        // Здесь можно добавить сохранение в БД или другую обработку
        return back()->with('success', 'Данные работника успешно отправлены!')->with('path', $path)->with('url', $url);
    }

    public function show($id, Request $request)
    {
        return "Employee ID: $id";
    }

    // Пример метода update
    public function update(Request $request, $id)
    {
        $jsonData = $request->input('jsonData');
        $jsonArray = json_decode($jsonData, true);
        $jsonField1 = $jsonArray['field1'] ?? null;
        $jsonField2 = $jsonArray['field2'] ?? null;
        // ...
        $path = $this->getPath($request);
        $url = $this->getUrl($request);
        // ...
        return "Updated employee $id";
    }
}
