@extends('layouts.app')

@section('title', 'Listado de Centros')

@section('content')
    <h2>Centros</h2>

    <ul>
        @foreach($centros as $centro)
            <li>
                {{ $centro->nombre }}
                <form action="{{ route('centros.destroy', $centro->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

    <h2>Agregar Centro</h2>

    <form action="{{ route('centros.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre del Centro" required>
        <button type="submit">Agregar Centro</button>
    </form>
@endsection
