<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        dd($user);

        // return view('perfil', compact('user'));
       //dd($productos);
    }
}
