<?php

namespace App\Http\Controllers;

use App\Http\Requests\Rescue_CentreRequest;
use App\Http\Resources\Rescue_CentreResource;
use App\Models\Rescue_Centre;

class Rescue_CentreController extends Controller
{
    public function index()
    {
        return Rescue_CentreResource::collection(Rescue_Centre::all());
    }

    public function store(Rescue_CentreRequest $request)
    {
        return new Rescue_CentreResource(Rescue_Centre::create($request->validated()));
    }

    public function show(Rescue_Centre $rescue_Centre)
    {
        return new Rescue_CentreResource($rescue_Centre);
    }

    public function update(Rescue_CentreRequest $request, Rescue_Centre $rescue_Centre)
    {
        $rescue_Centre->update($request->validated());

        return new Rescue_CentreResource($rescue_Centre);
    }

    public function destroy(Rescue_Centre $rescue_Centre)
    {
        $rescue_Centre->delete();

        return response()->json();
    }
}
