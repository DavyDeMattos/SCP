<?php

use App\Http\Controllers\PrestationController;
use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('accueil');})->name("accueil");
/*
    Route::get('/prestation', function () {return view('prestation.prestation');})->name("prestation");
    Route::get('/prestation/particulier', function () {return view('prestation.particulier');})->name("particulier");
    Route::get('/prestation/particulier/famille', function () {return view('prestation.particulier.famille');})->name("particulier-famille");
    Route::get('/prestation/entreprise', function () {return view('prestation.entreprise');})->name("entreprise");
    Route::get('/prestation/collectivite', function () {return view('prestation.collectivite');})->name("collectivite");
*/
Route::get('/deontologie', function () {return view('deontologie');})->name("deontologie");
Route::get('/actualites', function () {return view('actualites');})->name("actualites");
Route::get('/contact', function () {return view('contact');})->name("contact");

Route::get('/test', function (Request $request) {
    $prestation = new \App\Models\Prestation();
    $prestation->title = 'Affaires conjugales et familiales';
    $prestation->sub_title = 'Adultère, enquêtes, rapport';
    $prestation->slug = 'affaires-conjugales-et-familiales';
    $prestation->genre = 'particulier';
    $prestation->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laborum inventore ratione praesentium fugit possimus dolorum magni iure enim voluptates!';
    $prestation->save();
    return $prestation;
});

Route::prefix('/prestation')->name('prestation.')->controller(ProviderController::class)->group(function (){
    Route::get('/','index')->name('index');

    // Route::get('/{genre}/{id}', 'show')->where([
    //     'id'=> '[0-9]+',
    //     'genre'=>'[a-z0-9\-]+'
    // ])->name('show');
});
Route::prefix('/prestation')->name('prestation.')->controller(PrestationController::class)->group(function (){
    Route::get('/{slug}','index')->where(['slug'=>'[a-z0-9\-]+'])->name('show');
    // Route::get('/{slug}/{id}', 'show')->where([
    //     'id'=> '[0-9]+',
    //     'slug'=>'[a-z0-9\-]+'
    // ])->name('show');
    // Route::get('/test','index')->name('prout');
});

Route::get('/test/create', function (Request $request) {
    $prestations = \App\Models\Prestation::create([
        'title' => 'Enquêtes de moralité',
        'sub_title' => 'Combien de chaton a-t-il tué ?',
        'slug' => 'enquetes-de-moralite',
        'genre' => 'particulier',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laborum inventore ratione praesentium fugit possimus dolorum magni iure enim voluptates!'
    ]);
    return $prestations;
});

// Route::get('/test/delete/1', function (Request $request) {
//     $prestations = \App\Models\Prestation::findOrFail(1);
//     $prestations->delete();
//     return $prestations;
// });
