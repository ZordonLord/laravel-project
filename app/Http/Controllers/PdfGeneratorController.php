<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response('Пользователь не найден', 404);
        }
        // Здесь должен быть код генерации PDF
        return response("PDF для пользователя: {$user->name} {$user->surname} ({$user->email})", 200)
            ->header('Content-Type', 'text/plain');
    }
}
