@extends('layouts.app')

@section('title', 'Editar cotización')

@section('content')
    <h1>Editar cotización</h1>

    <div class="card" style="max-width:720px;">
        <form method="POST" action="{{ route('quotes.update', $quote) }}">
            @csrf
            @method('PUT')

            <label for="customer">Cliente</label>
            <input id="customer" type="text" name="customer" value="{{ old('customer') }}" required>

            <label for="valid_until">Válida hasta</label>
            <input id="valid_until" type="date" name="valid_until" value="{{ old('valid_until') }}">

            <label for="notes">Notas</label>
            <textarea id="notes" name="notes" rows="4">{{ old('notes') }}</textarea>

            <div style="margin-top:1.2rem;">
                <button class="btn" type="submit">Actualizar cotización</button>
                <a class="btn ghost" href="{{ route('quotes.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
@endsection