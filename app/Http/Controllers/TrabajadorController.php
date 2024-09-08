<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use App\Models\Centro;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadores = Trabajador::with('centro')->get();
        $centros = Centro::all();
        return view('trabajadores.index', compact('trabajadores', 'centros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|unique:trabajadores',
            'nombre' => 'required',
            'apellidos' => 'required',
            'centro_id' => 'required'
        ]);

        Trabajador::create($request->all());
        return redirect()->route('trabajadores.index');
    }

    public function destroy(Trabajador $trabajador)
    {
        $trabajador->delete();
        return redirect()->route('trabajadores.index');
    }
}

