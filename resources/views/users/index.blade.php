@extends('layouts.app')

@section('content')
    <h1>Пользователи</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
@endsection 