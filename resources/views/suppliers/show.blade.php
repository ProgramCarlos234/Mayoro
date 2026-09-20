@extends('layouts.app')

@section('title', 'Detalle del proveedor')

@section('content')
    <h1>Proveedor #{{ $supplier }}</h1>

    <div class="card">
        <p><strong>RUC:</strong> —</p>
        <p><strong>Razón social:</strong> —</p>
        <p><strong>Contacto:</strong> —</p>
        <p><strong>Correo:</strong> —</p>
        <p><strong>Teléfono:</strong> —</p>

        <div style="margin-top:1.2rem;">
            <a class="btn" href="#">Editar</a>
            <a class="btn ghost" href="{{ route('suppliers.index') }}">Volver</a>
        </div>
    </div>
@endsection