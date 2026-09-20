@extends('layouts.app')

@section('title', 'Registro')

@section('content')
    <div class="card" style="max-width:420px; margin:0 auto;">
        <h1>Registro de empresa</h1>
        <form method="POST" action="{{ route('auth.register.post') }}">
            @csrf

            <label for="company">Empresa</label>
            <input id="company" type="text" name="company" value="{{ old('company') }}" required>

            <label for="email">Correo electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required>

            <label for="password_confirmation">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>

            <div style="margin-top:1.2rem;">
                <button class="btn" type="submit">Crear cuenta</button>
            </div>
        </form>
        <p style="margin-top:1.2rem; font-size:.9rem;">
            ¿Ya tienes cuenta? <a href="{{ route('auth.login') }}">Inicia sesión</a>
        </p>
    </div>
@endsection