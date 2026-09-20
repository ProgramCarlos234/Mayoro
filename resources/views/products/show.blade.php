@extends('layouts.app')

@section('title', 'Detalle del producto')

@section('content')
    <h1>Producto #{{ $product }}</h1>

    <div class="card">
        <p><strong>SKU:</strong> —</p>
        <p><strong>Nombre:</strong> —</p>
        <p><strong>Descripción:</strong> —</p>
        <p><strong>Precio:</strong> —</p>

        <div style="margin-top:1.2rem;">
            <a class="btn" href="#">Editar</a>
            <a class="btn ghost" href="{{ route('products.index') }}">Volver</a>
        </div>
    </div>
@endsection