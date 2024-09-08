<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function index()
    {
        $centros = Centro::all();
        return view('centros.index', compact('centros'));
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required|unique:centros']);
        Centro::create($request->all());
        return redirect()->route('centros.index');
    }

    public function destroy(Centro $centro)
    {
        $centro->delete();
        return redirect()->route('centros.index');
    }
}

