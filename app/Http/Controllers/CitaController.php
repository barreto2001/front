<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Especializacion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CitaController extends Controller
{
    public function __construct()
    {
       /*  $this->middleware('auth'); */
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cita');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cita.create');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'especializacion' => ['required'],
            'fecha' => ['required'],
            'turno' => ['required'],
            'descripcion' => ['required', 'string']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'especializacion' => 'required',
            'fecha' => 'required',
            'turno' => 'required',
            'descripcion' => 'required|string'
        ]);

        $doctor = User::where('especializacion', $request->input('especializacion'))->first();

        Cita::create([
            'id_paciente' => auth()->user()->id,
            'id_doctor' => $doctor->id,
            'estado' => 'A',
            'especializacion' => $request['especializacion'],
            'fecha' => $request['fecha'],
            'turno' => $request['turno'],
            'descripcion' => $request['descripcion']
        ]);

        return redirect()->route('home')->with('success', 'La cita ha sido creada Exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cita = Cita::findOrFail($id);

        $cita->id_paciente = User::find($cita->id_paciente);
        $cita->especializacion = Especializacion::find($cita->especializacion);

        return view('cita.show', ['cita' => $cita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cita = Cita::findOrFail($id);

        return view('cita.edit', ['cita' => $cita]);
    }

    public function getCitas(string $especializacion, string $fecha)
    {
        // Utiliza el operador de igualdad '=' en lugar de '->' en where
        $citas = Cita::where('especializacion', '=', $especializacion)
            ->where('fecha', '=', $fecha)
            ->get();

        // Devuelve las citas como una respuesta JSON
        return response()->json($citas, 200);
    }

    public function getCitaDisponibilidad(string $especializacion, string $fecha, string $turno)
    {
        // Utiliza el operador de igualdad '=' en lugar de '->' en where
        $cita = Cita::where('especializacion', '=', $especializacion)
            ->where('fecha', '=', $fecha)
            ->where('turno','=',$turno)
            ->get();

        if (!$cita) {
            return response()->json($cita,200);
        }else{
            return response()->json($cita,201);
        }
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
        $cita = Cita::find($id);
        // Verificar si la cita existe
        if (!$cita) {
            return redirect()->route('home')->with('error', 'La cita no existe.');
        }

        // Eliminar la cita
        $cita->update([
            "estado" => "C"
        ]);

        // Redirigir al usuario a la página de inicio (o a donde desees)
        return redirect()->route('home')->with('success', 'La cita ha sido cancelada exitosamente.');
    }
}
