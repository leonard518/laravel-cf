<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
/* Declaramos el modelo a usar*/
use App\Article;


class TestController extends Controller
{
    public function view($id){

        $article = Article::find($id);
        // Debemos indicar cuales son las funciones que hacen las relaciones
        $article->category;
        $article->user;
        $article->tags;

        return view('test.index', ['article'=>$article]);
    }
}
