<?php

namespace App\Http\Controllers;

use App\Models\CentrosCivicos;
use Illuminate\Http\Request;

class CentroCivicoController extends Controller {
    public function index() {
        $centros = CentrosCivicos::all();
        return view('centros.index', compact('centros'));
    }

    public function create() {
        return view('centros.create');
    }

    public function store(Request $request) {
        CentrosCivicos::create($request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'nullable',
            'email' => 'required|email',
            'horario' => 'required'
        ]));
        return redirect()->route('centros.index');
    }

    public function edit(CentrosCivicos $centro) {
        return view('centros.edit', compact('centro'));
    }

    public function update(Request $request, CentrosCivicos $centro) {
        $centro->update($request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'nullable',
            'email' => 'required|email',
            'horario' => 'required'
        ]));
        return redirect()->route('centros.index');
    }

    public function destroy(CentrosCivicos $centro) {
        $centro->delete();
        return redirect()->route('centros.index');
    }
}
