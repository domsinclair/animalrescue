<?php

namespace App\Http\Controllers;

use App\Http\Resources\RescueCentreResource;
use App\Models\RescueCentre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;
use Inertia\Inertia;

class RescueCentreController extends Controller
{
    public function index()
    {
//        $centres = RescueCentreResource::collection((RescueCentre::all()));
//        return  \inertia((Re))
        return RescueCentre::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([

        ]);

        return RescueCentre::create($data);
    }

    public function show(RescueCentre $rescueCentre)
    {


//        return Inertia::render('RescueCentre/Show',[
//            'rescueCentre'=> $rescueCentre
//        ]);
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
