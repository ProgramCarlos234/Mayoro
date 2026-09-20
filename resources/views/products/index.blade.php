@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <div style="display:flex; align-items:center; justify-content:space-between;">
        <h1>Productos</h1>
        <a class="btn" href="{{ route('products.create') }}">Nuevo producto</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Proveedor</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" style="text-align:center; color:#6b7280;">No hay productos registrados.</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection