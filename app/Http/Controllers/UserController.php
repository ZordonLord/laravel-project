<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'email' => [
                'required',
                'string',
                'max:255',
                'regex:/^[\w\.-]+@[\w\.-]+\.\w{2,}$/',
                'unique:users,email',
            ],
        ], [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'max' => 'Поле :attribute не должно превышать :max символов.',
            'regex' => 'Email должен быть в формате example@mail.com.',
            'unique' => 'Пользователь с таким email уже существует.',
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->surname = $validated['surname'];
        $user->email = $validated['email'];
        $user->save();

        return redirect()->back()->with('success', 'Пользователь успешно добавлен!');
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function get($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'Пользователь не найден'], 404);
        }
        return response()->json($user);
    }
} 