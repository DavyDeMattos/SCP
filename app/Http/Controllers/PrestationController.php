<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrestationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param string $slug
     * @return View
     */
    public function index(string $slug): View
    {
        $prestations = DB::select('
        SELECT prestations.id, prestations.title, prestations.sub_title, prestations.slug, prestations.content, providers.name AS provider_name, providers.genre AS provider_genre
        FROM prestations
        INNER JOIN providers ON `prestations`.`providers_id` = `providers`.`id`
        WHERE genre = "' . $slug . '"
        ');
        // dd($prestations);
        return view('prestation.show', [
            'prestations' => $prestations
        ]);
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
     * @param string $genre
     * @param int $id
     * @param string $slug
     * @return View
     */
    public function show(string $genre, int $id, string $slug): RedirectResponse | View
    {
        $prestation = \App\Models\Prestation::findOrFail($id);
        // if ($prestation->genre !== $genre) {
        //     // En cas de mauvais genre dans l'URL, une redirection en corrigeant l'information
        //     return to_route('prestation.show', ['genre' =>$prestation->genre, 'id'=>$prestation->id]);
        // }
        // return $prestation;
        return view('prestation.prestation-show', [
            'prestation' => $prestation
        ]);
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
