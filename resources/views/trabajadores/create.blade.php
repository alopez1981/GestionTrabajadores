@extends('layouts.app')

@section('title', 'Agregar Extras')

@section('content')
    <h2>Agregar Extras para {{ $trabajador->nombre }} {{ $trabajador->apellidos }}</h2>

    <form action="{{ route('extras.store', $trabajador->id) }}" method="POST">
        @csrf

        <label for="num_practicas">Número de Prácticas:</label>
        <input type="number" name="num_practicas" value="0" min="0" required>

        <label for="lavados_fuera_horario">Lavados fuera de horario:</label>
        <input type="number" name="lavados_fuera_horario" value="0" min="0" required>

        <label for="gestion_examenes">Gestión de Exámenes:</label>
        <input type="number" name="gestion_examenes" value="0" min="0" required>

        <label for="uso_movil">Uso del Móvil:</label>
        <input type="number" name="uso_movil" value="0" min="0" required>

        <label for="fecha">Mes:</label>
        <input type="date" name="fecha" required>

        <button type="submit">Agregar Extras</button>
    </form>
@endsection

