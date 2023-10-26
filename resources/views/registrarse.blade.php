@extends('Layouts.nav')
@section('title')
Registrarse
@endsection
@vite('resources/css/registrarse.css')
@section('registrarse')
    <div class="forms">
        <form class="form1" action="{{route('crearcuenta.post')}}" method="POST" novalidate>
            @csrf
            <span>Crea una Cuenta</span>
            <label for="">Username</label>
            <input id="user" name="user" type="text" placeholder="username">
            @error('user')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
            <label for="">Correo</label>
            <input id="email" name="email" type="text" placeholder="correo">
            @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
            <label for="">Contraseña</label>
            <input id="password" name="password" type="text" placeholder="contraseña">
            @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
            <label for="">Confirmar Contraseña</label>
            <input id="password_confirmation" name="password_confirmation" type="text" placeholder="contraseña">
            @error('password_confirmation')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
            <button type="submit">Crear</button>
        </form>
        <form class="form2" action="">
            @csrf
            <span>Inicia Sesion</span>
            <label for="">Correo</label>
            <input id="email" name="email" type="text" placeholder="correo">
            <label for="">Contraseña</label>
            <input id="pass1" name="pass1" type="text" placeholder="contraseña">
        </form>
    </div>
@endsection