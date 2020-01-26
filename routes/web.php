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
//Route::get('/', ['as'=> 'home' ,function(){
	//echo "<a href=" . route('contactos') . ">Contacto</a><br>";

	//echo "<a href= 'contactos'> contactos</a><br>";

	//echo "<a href= 'contactos'> contactos</a><br>";

//	return view('home');
//}]);

/*
GET: GET lleva los datos de forma "visible" al cliente (navegador web). El medio de envío es la URL. Los datos los puede ver cualquiera.
*El GET es obtener información del servidor. Traer datos que están almacenados en el servidor o una base de datos

POST: POST consiste en datos "ocultos" (porque el cliente no los ve) enviados por un formulario cuyo método de envío es post. Es adecuado para formularios. Los datos no son visibles.
*El POST es envíar información desde el cliente para que sea procesada y actualice o guarde la información desde el servidor.
*/
route::get('/' , ['as' => 'home', 'uses' => 'PagesController@home']);
/////////////////////////////////////////////////////
Route::get('contactame', ['as' => 'contactosNombre' , 'uses' => 'PagesController@contactos']);

Route::post('contacto',  'PagesController@mensajes'); //enviar formulario

//////////////////////////////////////////////////////

route::get('saludos' , ['as' => 'saludoNombre', 'uses' => 'PagesController@saludo']);


////////////////////////////////////

route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);

route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);

route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);

route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);

route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);

route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);
/*
darle nombre a las url o rutas.  Puesto que se hace referencia al nombre de la ruta y no a la url
*/
//Route::get('contactame', ['as' => 'contactosNombre' , function(){
//	return view('contactos');

//}]);




//ejemplo con parametro. El parametro es obligatorio en esta forma. Al agregar ? deja de ser obligatorio.

//route::get('saludos/{nombre?}', ['as' => 'saludoNombre' , function($nombre ="invitado"){

//	$consolas= [
//		"play",
//		"ds",
//		"nintendo"
//	];
//	return view('saludo', compact('nombre', 'consolas')); //la funcion compact devuelve un array con la llave  nombre  y el valor nombre, siempre y cuando la variable "nombre" exista.
//}])->where('nombre', "[A-Za-z]*");

