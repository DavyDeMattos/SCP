<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;

class PrestationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \App\Models\Prestation::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $genre, int $id): RedirectResponse | Prestation
    {
        $prestation = \App\Models\Prestation::findOrFail($id);
        if ($prestation->genre !== $genre) {
            // En cas de mauvais genre dans l'URL, une redirection en corrigeant l'information
            return to_route('prestation.show', ['genre' =>$prestation->genre, 'id'=>$prestation->id]);
        }
        return $prestation;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestation $prestation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestation $prestation)
    {
        //
    }
}
