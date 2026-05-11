<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpareParts;

class SparePartsController extends Controller
{
    public function index()
    {
        return SpareParts::all();
    }

    public function show($id)
    {
        $spare_parts = SpareParts::findOrFail($id);
        return response()->json($spare_parts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $spare_parts = SpareParts::create($request->all());

        return response()->json($spare_parts, 201);
    }

    public function destroy($id)
    {
        $spare_parts = SpareParts::findOrFail($id);
        $spare_parts->delete();

        return response()->json(null, 204);
    }
}
