<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Podemos definir que los parametros sean opcionales e indicar uno por default */
/*Route::get('articles/{nombre?}', function($nombre = "No coloco nombre"){
    return "El nombre es: ".$nombre;
});*/

/* Agregar nombres a las rutas*/
Route::get('articles',[
    'as'    => 'alias',
    'uses'  => function(){
        return "Alias en las rutas";
    }
]);

/* Grupo de rutas*/
Route::group(['prefix'=>'articles'],function(){

    Route::get('view/{id}',[
        'uses'  =>  'TestController@view',
        'as'    =>  'articlesViews'
    ]);

});

