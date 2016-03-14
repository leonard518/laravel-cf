<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    /* Campos fillable: son los campos permitidos para mostrar los ejemplos json  */
    protected $fillable = ['name'];

    /*
     * Indicamos la relacion vinculada con este Model
     * Se declara en plural, porque una categoria puede tener muchos articulos
     * */
    public function articles()
    {
        /*
         * Indicamos el tipo de relacion que vamos a utilizar.
         * Indicamos el modelo que hace relacion.
         * Esta relacion tambien debe hacerse en el modelo ralcionado (App\Article).
         * Relationships: hasMany
         * Model: Article
         * */
        return $this->hasMany('App\Article');

    }
}
