<?php

namespace App\Http\Controllers;
use App\Models\RescueCentre;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RescueCentreController extends Controller
{
    public function index()
    {
        $rescueCentres = RescueCentre::all();
        return Inertia::render('RescueCentres/Index', ['rescueCentres' => $rescueCentres]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([

        ]);

        return RescueCentre::create($data);
    }

    public function show(RescueCentre $rescueCentre)
    {
        return $rescueCentre;
    }

    public function update(Request $request, RescueCentre $rescueCentre)
    {
        $data = $request->validate([

        ]);

        $rescueCentre->update($data);

        return $rescueCentre;
    }

    public function destroy(RescueCentre $rescueCentre)
    {
        $rescueCentre->delete();

        return response()->json();
    }
}
