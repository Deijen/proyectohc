@extends('plantilla')
<!---Servira de ejemplo de formulario para crear una historia clínica-->
@section('contenido')

<h1> Contactos</h1>
<h2>Formulario (historia clinica v1)</h2>
<!---Se pregunta si en la sesión existe el mensaje "info" definido en pages controller---->
@if(session()->has('info'))
	<h1>{{ session('info')}}</h1>
@else

<!---La url es la acción del formulario cuando se vaya a colocar en el controlador 
action=contacto-->
	<form method="post" action= "{{ route('messages.store')}}"> 
		<input type="hidden" name="_token" value= "{{ csrf_token() }}" >
		{!! csrf_field() !!}
		<p>
			<label for="nombre">
			Nombre
			<input type="text" name="nombre" value="{{ old('nombre1')}}">
			{!! $errors->first('nombre1', '<span class=error>:message</span>') !!}
		</label>
		</p>
		<p>
			<label for="email">
			Email
			<input type="email" name="email" value="{{ old('email')}}">
			{!! $errors->first('email' , '<span class=error>:message</span>') !!}
		</label>
		</p>
		<p>
			<label for="Mensaje">
			Mensaje
			<textarea name="Mensaje"></textarea>
			{{ $errors ->first('Mensaje')}}
		</label>

		</p>
		<input type="submit" value="Enviar">
	</form>
@endif

@stop