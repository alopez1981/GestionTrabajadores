@extends('layouts.app')

@section('title', 'Extras del Trabajador')

@section('content')
    <h2>Extras de {{ $trabajador->nombre }} {{ $trabajador->apellidos }}</h2>

    <table>
        <thead>
        <tr>
            <th>Mes</th>
            <th>Prácticas</th>
            <th>Lavados fuera de horario</th>
            <th>Gestión de Exámenes</th>
            <th>Uso del Móvil</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trabajador->extras as $extra)
            <tr>
                <td>{{ $extra->fecha->format('F Y') }}</td>
                <td>{{ $extra->num_practicas }}</td>
                <td>{{ $extra->lavados_fuera_horario }}</td>
                <td>{{ $extra->gestion_examenes }}</td>
                <td>{{ $extra->uso_movil }}</td>
                <td>{{ $extra->total_extras }} €</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
