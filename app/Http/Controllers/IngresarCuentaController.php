<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresarCuentaController extends Controller
{
    public function index(){
        return view('Layouts.navCount');
    }
    
    public function store(Request $request){
        //dd($request->all());
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        $user = auth()->user();
        
        if ($user->email === 'admin@gmail.com') {
            return redirect()->route('navCount');
        } else {
            return redirect()->route('navHome');
        }     
    }
}