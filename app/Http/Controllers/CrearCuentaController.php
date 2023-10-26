<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CrearCuentaController extends Controller
{
    public function index(){
        //dd('crearcuenta');
        return view('Layouts.navCount');
    }

    public function store(Request $request){

        $this->validate($request,[
            'user' => 'required',
            'email' => 'required|unique:Users|email',
            'password' => 'required|confirmed|min:4',
        ]);
        
        User::create([
            'user' => $request ->user,
            'email' => $request ->email,
            'pass1' => Hash::make($request ->password)
        ]);

        auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password,
      ]);
        return redirect()->route('navCount');
    }
}
