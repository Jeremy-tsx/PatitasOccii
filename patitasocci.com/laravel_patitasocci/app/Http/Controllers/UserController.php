<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use app\Models\Role;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class UserController extends Controller
{
    // Muestra una lista de todos los usuarios
    public function index()
    {
        $users = User::with('roles')->get();
        return view('user-list', compact('users'));
    }

    // Muestra el formulario para asignar roles a un usuario
    public function edit(User $user)
    {
        $roles = DB::select ('select * from Roles');//Role::all();
        return view('edit', compact('user'))
        ->with('roles',$roles);
    }

    // Asigna un rol a un usuario
    public function update(Request $request, User $user)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->roles()->sync($request->role_id);

        return view('index');
    }
}
