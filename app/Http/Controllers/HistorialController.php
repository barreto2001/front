<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_paciente' => 'required',
            'id_doctor' => 'required',
            'id_cita' => 'required',
            'especializacion' => 'required',
            'descripcion' => 'required|string'
        ]);


        Historial::create([
            'id_paciente' => $request['id_paciente'],
            'id_doctor' => auth()->user()->id,
            'id_cita' => $request['id_cita'],
            'especializacion' => $request['especializacion'],
            'fecha' => $request['fecha'],
            'descripcion' => $request['descripcion']
        ]);

        $cita = Cita::find($request['id_cita']);

        // Eliminar la cita
        $cita->update([
            "estado" => "T"
        ]);

        return redirect()->route('home')->with('success', 'La cita ha terminado Exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
