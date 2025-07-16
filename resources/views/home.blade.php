@extends('layouts.default')

@section('content')
    <h2>Добро пожаловать, {{ $name }}!</h2>
    <p>Возраст: 
        @if($age > 18)
            {{ $age }}
        @else
            <span style="color:red;">Указанный человек слишком молод.</span>
        @endif
    </p>
    <p>Должность: {{ $position }}</p>
    <p>Адрес: {{ $address }}</p>
@stop 