<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Trabajador;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function create($trabajador_id)
    {
        $trabajador = Trabajador::findOrFail($trabajador_id);
        return view('extras.create', compact('trabajador'));
    }

    public function store(Request $request, $trabajador_id)
    {
        $trabajador = Trabajador::findOrFail($trabajador_id);

        $request->validate([
            'num_practicas' => 'required|integer|min:0',
            'lavados_fuera_horario' => 'required|integer|min:0',
            'gestion_examenes' => 'required|integer|min:0',
            'uso_movil' => 'required|integer|min:0',
            'fecha' => 'required|date',
        ]);

        Extra::create([
            'trabajador_id' => $trabajador->id,
            'num_practicas' => $request->num_practicas,
            'lavados_fuera_horario' => $request->lavados_fuera_horario,
            'gestion_examenes' => $request->gestion_examenes,
            'uso_movil' => $request->uso_movil,
            'fecha' => $request->fecha,
        ]);

        return redirect()->route('trabajadores.index')->with('success', 'Extras agregados con éxito.');
    }

    // Mostrar los extras de un trabajador y el total
    public function show($trabajador_id)
    {
        $trabajador = Trabajador::with('extras')->findOrFail($trabajador_id);
        return view('extras.show', compact('trabajador'));
    }
}

