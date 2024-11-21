<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'Já existe um usuário com este e-mail.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
        ]);

        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Auth::login($user);

        return to_route('tasks.index');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }
}
