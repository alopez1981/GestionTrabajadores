@extends('layouts.app')

@section('title', 'Listado de Trabajadores')

@section('content')
    <h2>Lista de Trabajadores</h2>

    <table>
        <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Centro</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trabajadores as $trabajador)
            <tr>
                <td>{{ $trabajador->dni }}</td>
                <td>{{ $trabajador->nombre }}</td>
                <td>{{ $trabajador->apellidos }}</td>
                <td>{{ $trabajador->centro->nombre }}</td>
                <td>
                    <a href="{{ route('extras.create', $trabajador->id) }}">Agregar Extras</a> |
                    <a href="{{ route('extras.show', $trabajador->id) }}">Ver Extras</a> |
                    <form action="{{ route('trabajadores.destroy', $trabajador->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2>Agregar Trabajador</h2>

    <form action="{{ route('trabajadores.store') }}" method="POST">
        @csrf
        <label for="dni">DNI:</label>
        <input type="text" name="dni" placeholder="DNI" required>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="Nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" placeholder="Apellidos" required>

        <label for="centro_id">Centro:</label>
        <select name="centro_id" required>
            @foreach($centros as $centro)
                <option value="{{ $centro->id }}">{{ $centro->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Agregar Trabajador</button>
    </form>
@endsection
