<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Inicio</title>
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

			<h2>Nuevo Material</h2>


				<form action="{{ route ('guardarMateriales')}}" method="POST" name="nuevo">

					{{ csrf_field() }}

					<div style="padding: 1%;">
						Nombre del material : <input type="text"  id="nombre" name="nombre" value="{{ old('nombre')}}">
                        
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

					<div style="padding: 1%;">
						Tipo de material : <input type="text"  id="tipo_material" name="tipo_material" value="{{ old('tipo_material')}}">
					</div>
					@if($errors->first('tipo_material')) <i>{{$errors -> first ('tipo_material')}}</i>@endif
					
					<hr>

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')
	<script>

	$("#nombre").keyup(function(){
							var txtapm = $("#nombre").val();
                            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
							
				

                            if(formato.test(txtapm)){ $("#nombre").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                            else{ $("#nombre").css({"border": "1px solid #F00"}).fadeIn(2000); }
                        });
//----------------------Editar tipo material----------------------------------------
	$("#tipo_material").keyup(function(){
		var txtapm = $("#tipo_material").val();
        var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
		
        if(formato.test(txtapm)){ $("#tipo_material").css({"border": "1px solid #0F0"}).fadeIn(2000); }
        else{ $("#tipo_material").css({"border": "1px solid #F00"}).fadeIn(2000); }
    });
	</script>

</body>

</html>