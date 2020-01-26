@extends('plantilla')

@section('contenido')

	<h1>Editar mensaje de {{ $message->nombre}}</h1>
	<form method="post" action= "{{ route('messages.update' , $message->id)}}"> 
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<p>
			<label for="nombre">
			Nombre
			<input type="text" name="nombre" value="{{ $message->nombre}}">
			{!! $errors->first('nombre1', '<span class=error>:message</span>') !!}
		</label>
		</p>
		<p>
			<label for="email">
			Email
			<input type="email" name="email" value="{{ $message->email}}">
			{!! $errors->first('email' , '<span class=error>:message</span>') !!}
		</label>
		</p>
		<p>
			<label for="Mensaje">
			Mensaje
			<textarea name="Mensaje">{{$message->mensaje}}</textarea>
			{{ $errors ->first('Mensaje')}}
		</label>

		</p>
		<input type="submit" value="Enviar">
	</form>
	

@stop