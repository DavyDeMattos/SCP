<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Renvoie toutes les articles
     *
     * @return json
     */
      // Création de la méthode list
      public function list () {
        // Utilisation de la méthode all grâce à l'héritage
        $articles = Article::all();
        // Retour sous format JSON
        return response()->json($articles);
    }
}
