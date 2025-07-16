@extends('layouts.default')

@section('content')
    <h2>Контакты</h2>
    <p>Адрес: {{ $address }}</p>
    <p>Почтовый индекс: {{ $post_code }}</p>
    <p>Email: 
        @if(!empty($email))
            {{ $email }}
        @else
            <span style="color:red;">Адрес электронной почты не указан</span>
        @endif
    </p>
    <p>Телефон: {{ $phone }}</p>
@stop 