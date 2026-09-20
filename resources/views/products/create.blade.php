@extends('layouts.app')

@section('title', 'Nuevo producto')

@section('content')
    <h1>Nuevo producto</h1>

    <div class="card" style="max-width:640px;">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <label for="sku">SKU</label>
            <input id="sku" type="text" name="sku" value="{{ old('sku') }}" required>

            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required>

            <label for="description">Descripción</label>
            <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>

            <label for="price">Precio</label>
            <input id="price" type="number" step="0.01" min="0" name="price" value="{{ old('price') }}" required>

            <label for="supplier">Proveedor</label>
            <select id="supplier" name="supplier_id">
                <option value="">Selecciona un proveedor</option>
            </select>

            <div style="margin-top:1.2rem;">
                <button class="btn" type="submit">Guardar producto</button>
                <a class="btn ghost" href="{{ route('products.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
@endsection