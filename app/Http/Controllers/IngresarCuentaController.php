<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresarCuentaController extends Controller
{
    public function index(){
        return view ('Layouts.navCount');
    }
    public function store(Request $request){
        //dd($request);
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        elseif (auth()->user()->email === 'Admin@gmail.com') {
            return redirect()->route('navCount');
        }
        return redirect()->route('navCount');
    }
}