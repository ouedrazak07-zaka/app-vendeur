<?php

namespace App\Http\Controllers;

use App\Models\DebitCredit;
use Illuminate\Http\Request;

class DebitCreditController extends Controller
{
    public function index()
    {
        return DebitCredit::orderBy('date', 'desc')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'nom' => 'required|string',
            'nature' => 'required|string',
            'debit' => 'nullable|numeric',
            'credit' => 'nullable|numeric',
        ]);

        $entry = DebitCredit::create($validated);

        return response()->json($entry, 201);
    }

    public function show(DebitCredit $debit_credit)
    {
        return $debit_credit;
    }

    public function update(Request $request, DebitCredit $debit_credit)
    {
        $validated = $request->validate([
            'date' => 'sometimes|date',
            'nom' => 'sometimes|string',
            'nature' => 'sometimes|string',
            'debit' => 'nullable|numeric',
            'credit' => 'nullable|numeric',
        ]);

        $debit_credit->update($validated);

        return response()->json($debit_credit);
    }

    public function destroy(DebitCredit $debit_credit)
    {
        $debit_credit->delete();

        return response()->json(null, 204);
    }
}
