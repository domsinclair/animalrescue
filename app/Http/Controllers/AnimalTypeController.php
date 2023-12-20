<?php

namespace App\Http\Controllers;

use App\Models\AnimalType;
use Illuminate\Http\Request;

class AnimalTypeController extends Controller
{
    public function index()
    {
        return AnimalType::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([

        ]);

        return AnimalType::create($data);
    }

    public function show(AnimalType $animalType)
    {
        return $animalType;
    }

    public function update(Request $request, AnimalType $animalType)
    {
        $data = $request->validate([

        ]);

        $animalType->update($data);

        return $animalType;
    }

    public function destroy(AnimalType $animalType)
    {
        $animalType->delete();

        return response()->json();
    }
}
