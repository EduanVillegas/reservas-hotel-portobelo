<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hotel Portobelo</title>

	<base href="vistas/">

	<link rel="icon" href="img/icono.jpg">

	<!--=====================================
	VÍNCULOS CSS
	======================================-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Fuente Open Sans y Ubuntu -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Ubuntu" rel="stylesheet">

	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="{{url('css/plugins/bootstrap-datepicker.standalone.min.css')}}">

	<!-- jdSlider -->
	<link rel="stylesheet" href="{{url('css/plugins/jquery.jdSlider.css')}}">

	<!-- Pano -->
	<link rel="stylesheet" href="{{url('css/plugins/jquery.pano.css')}}">

	 <!-- fullCalendar -->
	<link rel="stylesheet" href="{{url('css/plugins/fullcalendar.min.css')}}">

	<!-- Hoja de estilo personalizada -->
	<link rel="stylesheet" href="{{url('css/style.css')}}">
	<link rel="stylesheet" href="{{url('css/habitaciones.css')}}">
	<link rel="stylesheet" href="{{url('css/reservas.css')}}">
	<link rel="stylesheet" href="{{url('css/perfil.css')}}">

	<!--=====================================
	VÍNCULOS JAVASCRIPT
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- bootstrap datepicker -->
	<!-- https://bootstrap-datepicker.readthedocs.io/en/latest/ -->
	<script src="{{url('js/plugins/bootstrap-datepicker.min.js')}}"></script>

	<!-- https://easings.net/es# -->
	<script src="{{url('js/plugins/jquery.easing.js')}}"></script>

	<!-- https://markgoodyear.com/labs/scrollup/ -->
	<script src="{{url('js/plugins/scrollUP.js')}}"></script>

	<!-- jdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
	<script src="{{url('js/plugins/jquery.jdSlider-latest.js')}}"></script>

	<!-- Pano -->
	<!-- https://www.jqueryscript.net/other/360-Degree-Panoramic-Image-Viewer-with-jQuery-Pano.html -->
	<script src="{{url('js/plugins/jquery.pano.js')}}"></script>

	<!-- fullCalendar -->
	<!-- https://momentjs.com/ -->
	<script src="{{url('js/plugins/moment.js')}}"></script>
	<!-- https://fullcalendar.io/docs/background-events-demo -->
	<script src="{{url('js/plugins/fullcalendar.min.js')}}"></script>


</head>
<body>

@yield('content')

<script src="{{url('js/plantilla.js')}}"></script>
<script src="{{url('js/menu.js')}}"></script>
<script src="{{url('js/idiomas.js')}}"></script>
<script src="{{url('js/habitaciones.js')}}"></script>
<script src="{{url('js/reservas.js')}}"></script>
</body>
</html>
