<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalRequest;
use App\Http\Resources\AnimalResource;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        return AnimalResource::collection(Animal::all());
    }

    public function store(AnimalRequest $request)
    {
        return new AnimalResource(Animal::create($request->validated()));
    }

    public function show(Animal $animal)
    {
        return new AnimalResource($animal);
    }

    public function update(AnimalRequest $request, Animal $animal)
    {
        $animal->update($request->validated());

        return new AnimalResource($animal);
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        return response()->json();
    }
}
