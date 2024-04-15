<?php

namespace App\Http\Controllers;

use App\Models\Especializacion;
use Illuminate\Http\Request;

class EspecializacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especializacion = Especializacion::all();

        return response()->json($especializacion,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
