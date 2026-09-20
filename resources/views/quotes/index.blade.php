@extends('layouts.app')

@section('title', 'Cotizaciones')

@section('content')
    <div style="display:flex; align-items:center; justify-content:space-between;">
        <h1>Cotizaciones</h1>
        <a class="btn" href="{{ route('quotes.create') }}">Nueva cotización</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Monto total</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" style="text-align:center; color:#6b7280;">No hay cotizaciones registradas.</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection