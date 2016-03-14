<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    /* Esto permite ocultar los campos que no queremos mostrar */
    protected $hidden = ['password', 'remember_token'];

    /*
     * Indicamos la relacion vinculada con este Model
     * Se declara en plural, porque un usuario pueden tener muchos articulos
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
