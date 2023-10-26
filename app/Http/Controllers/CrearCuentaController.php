<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CrearCuentaController extends Controller
{
    public function index(){
        return view('registrarse');
    }

    public function store(Request $request){

        $this->validate($request,[
            'user' => 'required',
            'email' => 'required|unique:users|email',
            'pass1' => 'required|confirmed|min:4'
        ]);
        
        User::create([
            'user' => $request ->user,
            'email' => $request ->email,
            'pass1' => Hash::make($request ->pass1)
        ]);

        auth()->attempt([
            'email'=> $request->email,
            'pass1'=> $request->pass1
      ]);
      return redirect()->route('forms', auth()->user()->name); 
    }
}
