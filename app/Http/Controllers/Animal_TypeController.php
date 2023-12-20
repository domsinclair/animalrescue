<?php

namespace App\Http\Controllers;

use App\Http\Requests\Animal_TypeRequest;
use App\Http\Resources\Animal_TypeResource;
use App\Models\Animal_Type;

class Animal_TypeController extends Controller
{
    public function index()
    {
        return Animal_TypeResource::collection(Animal_Type::all());
    }

    public function store(Animal_TypeRequest $request)
    {
        return new Animal_TypeResource(Animal_Type::create($request->validated()));
    }

    public function show(Animal_Type $animal_Type)
    {
        return new Animal_TypeResource($animal_Type);
    }

    public function update(Animal_TypeRequest $request, Animal_Type $animal_Type)
    {
        $animal_Type->update($request->validated());

        return new Animal_TypeResource($animal_Type);
    }

    public function destroy(Animal_Type $animal_Type)
    {
        $animal_Type->delete();

        return response()->json();
    }
}
