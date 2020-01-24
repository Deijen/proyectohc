<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Las rutas son las url de entrada de nuestra aplicación
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//practica rutas.
Route::get('/', ['as'=> 'home' ,function(){
	//echo "<a href=" . route('contactos') . ">Contacto</a><br>";

	//echo "<a href= 'contactos'> contactos</a><br>";

	//echo "<a href= 'contactos'> contactos</a><br>";

	return view('home');
}]);

////////////////////////////////////
/*
darle nombre a las url o rutas.  Puesto que se hace referencia al nombre de la ruta y no a la url
*/
Route::get('contactame', ['as' => 'contactosNombre' , function(){
	return 'hola desde contactos';

}]);

//ejemplo con parametro. El parametro es obligatorio en esta forma. Al agregar ? deja de ser obligatorio.

route::get('saludos/{nombre?}', ['as' => 'saludoNombre' , function($nombre ="invitado"){
	return view('saludo', compact('nombre')); //la funcion compact devuelve un array con la llave  nombre  y el valor nombre, siempre y cuando la variable "nombre" exista.
}])->where('nombre', "[A-Za-z]*");

