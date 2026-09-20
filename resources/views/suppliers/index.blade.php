@extends('layouts.app')

@section('title', 'Proveedores')

@section('content')
    <div style="display:flex; align-items:center; justify-content:space-between;">
        <h1>Proveedores</h1>
        <a class="btn" href="{{ route('suppliers.create') }}">Nuevo proveedor</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>RUC</th>
                    <th>Razón social</th>
                    <th>Contacto</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" style="text-align:center; color:#6b7280;">No hay proveedores registrados.</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection