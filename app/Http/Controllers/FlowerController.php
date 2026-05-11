<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;

class FlowerController extends Controller
{
    public function index()
    {
        return Flower::all();
    }

    public function show($id)
    {
        $flower = Flower::findOrFail($id);
        return response()->json($flower);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $flower = Flower::create($request->all());

        return response()->json($flower, 201);
    }

    public function destroy($id)
    {
        $flower = Flower::findOrFail($id);
        $flower->delete();

        return response()->json(null, 204);
    }
}
