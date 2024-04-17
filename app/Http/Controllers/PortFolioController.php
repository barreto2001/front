<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
/* Controlador de crud de productos */
class PortFolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio = null;
        
        if(auth()->user()->rol == 1){
            $portfolio = Portfolio::all();
        }else{
            $portfolio = Portfolio::latest()->takes(3)->get();
        }

        return view('portfolio',['portfolio' => $portfolio]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'smallDescription' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string'
        ]);

        Portfolio::create([
            'name' => $request['name'],
            'smallDescription' => $request['smallDescription'],
            'description' =>$request['description'],
            'image' => $request['image']
        ]);

        return response()->json(200, null);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $portfolio = Portfolio::find($id);

        return response()->json(200, $portfolio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'smallDescription' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string'
        ]);

        $portfolio = Portfolio::find($id);

        $portfolio::update([
            'name' => $request['name'],
            'smallDescription' => $request['smallDescription'],
            'description' =>$request['description'],
            'image' => $request['image']
        ]);

        return response()->json(200, null);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Portfolio::deleted($id);

        return response()->json(200, null);
    }
}
