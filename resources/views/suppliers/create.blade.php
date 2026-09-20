@extends('layouts.app')

@section('title', 'Nuevo proveedor')

@section('content')
    <h1>Nuevo proveedor</h1>

    <div class="card" style="max-width:640px;">
        <form method="POST" action="{{ route('suppliers.store') }}">
            @csrf

            <label for="ruc">RUC</label>
            <input id="ruc" type="text" name="ruc" value="{{ old('ruc') }}" required>

            <label for="name">Razón social</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required>

            <label for="contact">Persona de contacto</label>
            <input id="contact" type="text" name="contact" value="{{ old('contact') }}">

            <label for="email">Correo de contacto</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}">

            <label for="phone">Teléfono</label>
            <input id="phone" type="text" name="phone" value="{{ old('phone') }}">

            <div style="margin-top:1.2rem;">
                <button class="btn" type="submit">Guardar proveedor</button>
                <a class="btn ghost" href="{{ route('suppliers.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
@endsection