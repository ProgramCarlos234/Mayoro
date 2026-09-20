@extends('layouts.app')

@section('title', 'Editar proveedor')

@section('content')
    <h1>Editar proveedor</h1>

    <div class="card" style="max-width:640px;">
        <form method="POST" action="{{ route('suppliers.update', $supplier) }}">
            @csrf
            @method('PUT')

            <label for="ruc">RUC</label>
            <input id="ruc" type="text" name="ruc" value="{{ old('ruc') }}" required>

            <label for="name">Razón social</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required>

            <label for="contact">Persona de contacto</label>
            <input id="contact" type="text" name="contact" value="{{ old('contact') }}">

            <div style="margin-top:1.2rem;">
                <button class="btn" type="submit">Actualizar proveedor</button>
                <a class="btn ghost" href="{{ route('suppliers.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
@endsection