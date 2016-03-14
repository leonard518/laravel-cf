<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    /* Campos fillable: son los campos permitidos para mostrar los ejemplos json */
    protected $fillable = ['name'];

    /*
     * Indicamos la relacion vinculada con este Model
     * Se declara en plural, porque un tag puede estar en varios articulos
     * */
    public function articles()
    {
        /*
         * Indicamos el tipo de relacion que vamos a utilizar.
         * Indicamos el modelo que hace relacion.
         * Esta relacion tambien debe hacerse en el modelo ralcionado (App\Article).
         * Relationships: belongsToMany
         * Model: Article
         * Error timestamps: se agrega withTimestamps.
         * */
        return $this->belongsToMany('App\Article')->withTimestamps();
    }
}
