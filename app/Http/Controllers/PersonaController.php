<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Carbon\Carbon;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::latest()->paginate(4);

        foreach ($personas as $persona) {
            $persona->dPerFechaNac = Carbon::parse($persona->dPerFechaNac);
        }

        return view('personas.index', compact('personas'));
    }

    public function show($nPerCodigo)
    {
        $persona = Persona::find($nPerCodigo);
        $persona->dPerFechaNac = Carbon::parse($persona->dPerFechaNac);

        return view('personas.show', compact('persona'));
    }
    

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        // Valida y guarda los datos enviados para crear una nueva persona
        $camposValidados = $request->validate([
            'cPerApellido' => 'required|max:50',
            'cPerNombre' => 'required|max:50',
            'cPerDireccion' => 'nullable|max:100',
            'dPerFechaNac' => 'required|date',
            'nPerEdad' => 'required|integer',
            'nPerSueldo' => 'required|numeric',
        ]);

        Persona::create($camposValidados);

        return redirect()->route('personas.index')
                        ->with('success', 'Persona creada exitosamente.');
    }

    public function edit($nPerCodigo)
    {
        $persona = Persona::findOrFail($nPerCodigo);
        $persona->dPerFechaNac = Carbon::parse($persona->dPerFechaNac);

        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, $nPerCodigo)
    {
        $camposValidados = $request->validate([
            'cPerApellido' => 'required|max:50',
            'cPerNombre' => 'required|max:50',
            'cPerDireccion' => 'nullable|max:100',
            'dPerFechaNac' => 'required|date',
            'nPerEdad' => 'required|integer',
            'nPerSueldo' => 'required|numeric',
        ]);

        $persona = Persona::findOrFail($nPerCodigo);
        $persona->update($camposValidados);

        return redirect()->route('personas.index')
                        ->with('success', 'Persona actualizada exitosamente.');
    }

    public function destroy($nPerCodigo)
    {
        $persona = Persona::findOrFail($nPerCodigo);
        $persona->delete();

        return redirect()->route('personas.index')
                        ->with('success', 'Persona eliminada exitosamente.');
    }
}
