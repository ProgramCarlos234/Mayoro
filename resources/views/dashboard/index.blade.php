@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <div class="grid">
        <div class="stat">
            <span class="value">0</span>
            <span class="label">Cotizaciones activas</span>
        </div>
        <div class="stat">
            <span class="value">0</span>
            <span class="label">Pedidos en curso</span>
        </div>
        <div class="stat">
            <span class="value">0</span>
            <span class="label">Proveedores registrados</span>
        </div>
        <div class="stat">
            <span class="value">0</span>
            <span class="label">Productos</span>
        </div>
    </div>

    <div class="card" style="margin-top:1.5rem;">
        <h2>Actividad reciente</h2>
        <p>No hay actividad reciente para mostrar.</p>
    </div>
@endsection