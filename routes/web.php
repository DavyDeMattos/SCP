<?php

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
Route::get('/prestation', function () {return view('prestation.prestation');})->name("prestation");
Route::get('/prestation/particulier', function () {return view('prestation.particulier');})->name("particulier");
Route::get('/prestation/entreprise', function () {return view('prestation.entreprise');})->name("entreprise");
Route::get('/prestation/collectivite', function () {return view('prestation.collectivite');})->name("collectivite");
Route::get('/deontologie', function () {return view('deontologie');})->name("deontologie");
Route::get('/actualites', function () {return view('actualites');})->name("actualites");
Route::get('/contact', function () {return view('contact');})->name("contact");

Route::get('/test', function () {
    echo 'Bienvenue sur ma future API de test !';
});
