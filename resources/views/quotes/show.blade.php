@extends('layouts.app')

@section('title', 'Detalle de la cotización')

@section('content')
    <h1>Cotización #{{ $quote }}</h1>

    <div class="card">
        <p><strong>Cliente:</strong> —</p>
        <p><strong>Monto total:</strong> —</p>
        <p><strong>Estado:</strong> —</p>
        <p><strong>Válida hasta:</strong> —</p>

        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" style="text-align:center; color:#6b7280;">Sin líneas de cotización.</td>
                </tr>
            </tbody>
        </table>

        <div style="margin-top:1.2rem;">
            <a class="btn" href="#">Convertir en pedido</a>
            <a class="btn ghost" href="{{ route('quotes.index') }}">Volver</a>
        </div>
    </div>
@endsection