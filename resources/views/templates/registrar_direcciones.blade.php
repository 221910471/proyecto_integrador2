<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Nueva Dirección</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

			@include ('layouts.header')

			<h2>Registre su Direccion</h2>


				<form action="{{ route ('guardarDirecciones2')}}" method="POST" name="nuevo">

					{{ csrf_field() }}
					<div style="padding: 1%;">
						Cliente_id : <input type="text" name="cliente_id" value="{{ old('cliente_id')}}">
					</div>
					<div style="padding: 1%;">
						Calle : <input type="text" name="calle" value="{{ old('calle')}}">
					</div>
					<div style="padding: 1%;">
						Numero : <input type="number" name="numero_direccion" value="{{ old('numero_direccion')}}">
					</div>
					<div style="padding: 1%;">
						Localidad : <input type="text" name="localidad" value="{{ old('localidad')}}">
					</div>
					<div style="padding: 1%;">
						Municipio : <input type="text" name="municipio" value="{{ old('municipio')}}">
					</div>
					<div style="padding: 1%;">
						Estado : <input type="text" name="estado" value="{{ old('estado')}}">
					</div>
					
					<hr>
					
					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>