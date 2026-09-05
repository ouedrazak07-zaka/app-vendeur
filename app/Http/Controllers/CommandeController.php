<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        return Commande::orderBy('date', 'desc')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'nature' => 'required|string',
            'nbre' => 'required|numeric',
            'prix' => 'required|numeric',
            'p_total' => 'required|numeric',
        ]);

        $commande = Commande::create($validated);

        return response()->json($commande, 201);
    }

    public function show(Commande $commande)
    {
        return $commande;
    }

    public function update(Request $request, Commande $commande)
    {
        $validated = $request->validate([
            'date' => 'sometimes|date',
            'nature' => 'sometimes|string',
            'nbre' => 'sometimes|numeric',
            'prix' => 'sometimes|numeric',
            'p_total' => 'sometimes|numeric',
        ]);

        $commande->update($validated);

        return response()->json($commande);
    }

    public function destroy(Commande $commande)
    {
        $commande->delete();

        return response()->json(null, 204);
    }
}
