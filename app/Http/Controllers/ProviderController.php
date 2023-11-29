<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('prestation.index', [
            'providers' => \App\Models\Provider::all()
        ]);
        // return \App\Models\Provider::all();
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
    public function show(string $genre, int $id): RedirectResponse | Provider
    {
        $provider = \App\Models\Provider::findOrFail($id);
        return $provider;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider)
    {
        //
    }
}
