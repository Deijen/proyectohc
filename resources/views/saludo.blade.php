<!DOCTYPE html>
<html>
<head>
@extends('plantilla')


<!-----Sección para definir el contenido único de la vista--->
@section('contenido')

<h1>Saludos {{ $nombre}}</h1>

<ul>
	@forelse($consolas as $consola)
		<li>
			{{$consola}}

		</li>
		@empty 
		<p> No hay consolas</p>
	@endforelse

</ul>
<!---Se cierra la sección--->
@stop