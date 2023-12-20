<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return Animal::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([

        ]);

        return Animal::create($data);
    }

    public function show(Animal $animal)
    {
        return $animal;
    }

    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([

        ]);

        $animal->update($data);

        return $animal;
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        return response()->json();
    }
}
