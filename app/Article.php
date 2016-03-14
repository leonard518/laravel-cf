<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    /* Campos fillable: son los campos permitidos para mostrar los ejemplos json */

    protected $fillable = ['title','content', 'category_id', 'user_id'];

    /*
     * Indicamos la relacion vinculada con este Model
     * Se declara en singular, porque un articulo puede tener una categoria
     * */
    public function category()
    {
        /*
         * Indicamos a cual relacion pertenece.
         * Indicamos el modelo que hace relacion.
         * Esta relacion tambien debe hacerse en el modelo ralcionado (App\Category).
         * Clase: belongsTo
         * Model: Category
         * */
        return $this->belongsTo('App\Category');
    }

    /*
     * Indicamos la relacion vinculada con este Model
     * Se declara en singular, porque un articulo puede tener un usuario
     * */
    public function user()
    {
        /*
         * Indicamos a cual relacion pertenece.
         * Indicamos el modelo que hace relacion.
         * Esta relacion tambien debe hacerse en el modelo ralcionado (App\Category).
         * Clase: belongsTo
         * Model: Category
         * */
        return $this->belongsTo('App\User');
    }

    /*
     * Indicamos la relacion vinculada con este Model
     * Se declara en plural, porque un articulo pueden tener muchas imagenes
     * */
    public function images()
    {
        /*
         * Indicamos el tipo de relacion que vamos a utilizar.
         * Indicamos el modelo que hace relacion.
         * Esta relacion tambien debe hacerse en el modelo ralcionado (App\Image).
         * Relationships: hasMany
         * Model: Image
         * */
        return $this->hasMany('App\Image');
    }

    /*
     * Indicamos la relacion vinculada con este Model
     * Se declara en plural, porque un articulo puede tener muchos tags
     * */
    public function tags()
    {
        /*
         * Indicamos el tipo de relacion que vamos a utilizar.
         * Indicamos el modelo que hace relacion.
         * Esta relacion tambien debe hacerse en el modelo ralcionado (App\Tag).
         * Relationships: belongsToMany
         * Model: Tag
         * */
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
