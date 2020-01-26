<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Requests;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller

/*
Los controladores se encargan de la lógica del proyecto. Remplazan las funciones que se definen en las rutas para que estas estén más limpias.
*/
{
/*
middleware: intercepta un request y verifica que se cumpla
*/
/*
public function __construct(){
	$this->middleware('example', ['only' => 'home']);

}
*/



public function home(){

	return view('home');
}

public function contactos(){
	return view('contactos');
}

public function saludo( $nombre = 'Invitado'){

	$consolas= [
		"play",
		"ds",
		"nintendo"
	];
	return view('saludo', compact('nombre' , 'consolas'));
}

/*
Requeset: solicitudes o peticiones http que realiza el usuario atraves del navegador.
Validate: valida los formularios.
*/
public function mensajes(CreateMessageRequest $request){



	$data= $request->all(); //procesar los datos del formulario
	//return responses()->json(['data' => $data], 202);
	//return redirect('/');
	
	//return $request->all();
	return redirect()->route('contactosNombre')->with('info', 'Mensaje enviado'); //una vez se envía el formulario, nos redireccionamos a la ruta ContactosNombre, y envíamos un mensaje. El mensaje se debe mostrat en la vista y se llama "info"
	//return $request->post();
}

}
