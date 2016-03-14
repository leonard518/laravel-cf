<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    /* Campos fillable: son los campos permitidos para mostrar los ejemplos json */
    protected $fillable = ['name', 'article_id'];

    /*
     * Indicamos la relacion vinculada con este Model
     * Se declara en singular, porque un articulo puede tener una imagen
     * */
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
