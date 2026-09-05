<?php

namespace App\Http\Controllers;

use App\Models\Inventaire;
use Illuminate\Http\Request;

class InventaireController extends Controller
{
    public function index()
    {
        return Inventaire::orderBy('date', 'desc')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'nature' => 'required|string',
            'nbre' => 'required|numeric',
            'pu_detail' => 'required|numeric',
            'pu_gros' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $item = Inventaire::create($validated);

        return response()->json($item, 201);
    }

    public function show(Inventaire $inventaire)
    {
        return $inventaire;
    }

    public function update(Request $request, Inventaire $inventaire)
    {
        $validated = $request->validate([
            'date' => 'sometimes|date',
            'nature' => 'sometimes|string',
            'nbre' => 'sometimes|numeric',
            'pu_detail' => 'sometimes|numeric',
            'pu_gros' => 'sometimes|numeric',
            'total' => 'sometimes|numeric',
        ]);

        $inventaire->update($validated);

        return response()->json($inventaire);
    }

    public function destroy(Inventaire $inventaire)
    {
        $inventaire->delete();

        return response()->json(null, 204);
    }
}
