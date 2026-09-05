<?php

namespace App\Http\Controllers;

use App\Models\VenteDetail;
use Illuminate\Http\Request;

class VenteDetailController extends Controller
{
    public function index()
    {
        return VenteDetail::orderBy('date', 'desc')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_client' => 'required|string',
            'date' => 'required|date',
            'nature' => 'required|string',
            'nbre' => 'required|numeric',
            'pu' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $vente = VenteDetail::create($validated);

        return response()->json($vente, 201);
    }

    public function show(VenteDetail $ventes_detail)
    {
        return $ventes_detail;
    }

    public function update(Request $request, VenteDetail $ventes_detail)
    {
        $validated = $request->validate([
            'nom_client' => 'sometimes|string',
            'date' => 'sometimes|date',
            'nature' => 'sometimes|string',
            'nbre' => 'sometimes|numeric',
            'pu' => 'sometimes|numeric',
            'total' => 'sometimes|numeric',
        ]);

        $ventes_detail->update($validated);

        return response()->json($ventes_detail);
    }

    public function destroy(VenteDetail $ventes_detail)
    {
        $ventes_detail->delete();

        return response()->json(null, 204);
    }
}
