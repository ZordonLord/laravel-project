<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:books,title',
            'author' => 'required|string|max:100',
            'genre' => 'required|string',
            // Добавьте дополнительные поля, если есть
        ], [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'max' => 'Поле :attribute не должно превышать :max символов.',
            'unique' => 'Книга с таким названием уже существует.',
        ]);

        // Сохраняем книгу
        $book = new Book();
        $book->title = $validated['title'];
        $book->author = $validated['author'];
        $book->genre = $validated['genre'];
        // Дополнительные поля
        $book->save();

        return redirect('/index')->with('success', 'Книга успешно добавлена!');
    }
}
