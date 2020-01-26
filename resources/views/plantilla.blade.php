<!---Esta plantilla contiene todo el html que se repite--->
<!---Request: Solicitudes o peticiones http que realiza el usuario a traves del navegador. --->
<!DOCTYPE html>
<html>
<head>

	<style>
		.error{
			color: red;
			font-size: 12px;
		}

	</style>
	<title>Inicio</title>
</head>
<body>
	<!---Navegación--->
	<header>
			<nav>
				<a href=" {{route('home')}} "> Inicio</a>
				<a href=" {{route ('saludoNombre')}} ">Saludos</a>
				<a href=" {{ route('messages.create')}} ">Contactos</a>

			</nav>

	</header>
	@yield('contenido') <!---Busca una sección establecida en la página-->
	<footer> Electronic health</footer>
</body>
</html>