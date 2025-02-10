@extends('layouts.plantillaApp')

@section('title', 'Iniciar Sesión')

@section('content')
    <div class="login">
        <h2 id="tituloLogin">Iniciar Sesión</h2>
        <form>
            <p>Usuario</p>
            <input type="text" id="usuario" name="usuario" placeholder="Usuario">
            <p>Contraseña</p>
            <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
            <button type="submit" id="entrar">Entrar</button>
        </form>
    </div>
@endsection