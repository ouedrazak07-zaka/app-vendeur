<?php

namespace App\Http\Controllers;

use App\Models\VenteGros;
use Illuminate\Http\Request;

class VenteGrosController extends Controller
{
    public function index()
    {
        return VenteGros::orderBy('date', 'desc')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'nom' => 'required|string',
            'nature' => 'required|string',
            'nbre' => 'required|numeric',
            'prix' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $vente = VenteGros::create($validated);

        return response()->json($vente, 201);
    }

    public function show(VenteGros $ventes_gro)
    {
        return $ventes_gro;
    }

    public function update(Request $request, VenteGros $ventes_gro)
    {
        $validated = $request->validate([
            'date' => 'sometimes|date',
            'nom' => 'sometimes|string',
            'nature' => 'sometimes|string',
            'nbre' => 'sometimes|numeric',
            'prix' => 'sometimes|numeric',
            'total' => 'sometimes|numeric',
        ]);

        $ventes_gro->update($validated);

        return response()->json($ventes_gro);
    }

    public function destroy(VenteGros $ventes_gro)
    {
        $ventes_gro->delete();

        return response()->json(null, 204);
    }
}
