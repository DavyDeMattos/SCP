<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route de récupération des articles
// Type : get
// Chemin : http://127.0.0.1:8000/articles
// Controller : ArticleControllerController
// Méthode : list
Route::get('/articles', [ArticleController::class, 'list'])->name('article-list');
Route::get('/coucou', function () {
    echo"Coucou";
});

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
