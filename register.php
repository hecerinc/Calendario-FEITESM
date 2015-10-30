<!DOCTYPE html>
<html lang="es">
<head>

	<!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
	<title>Calendario de Eventos - NP</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FONT
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!-- <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"> -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/pikaday.css">
	<link rel="stylesheet" href="style.css">
	<!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

</head>
<body>
	<header class="special-img-bg" data-bg="img/header.png">
		<div class="container">
			<div class="nav u-fr">
				<nav class="main">
					<a href="#" class="hamburger"><?= file_get_contents('img/hamburger.svg') ?></a>
					<div class="clear"></div>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="register.php">Registra tu evento</a></li>
						<li><a href="#">Cont&aacute;ctanos</a></li>
					</ul>
				</nav>
			</div>
			<div class="clear"></div>
			<h1 class="lh90 mb40">Calendario de Eventos <br> <span class="subtitle">Comunidades Estudiantiles</span></h1>
			<h2>un proyecto de <a href="#">Grupo Nueva Prensa</a></h2>
		</div>
	</header>
	<div class="clear h40px"></div>
	<section class="register">
		<h3 class="title">Registra tu evento</h3>		
		<div class="clear h30px"></div>
		<form action="#" class="register-event" method="post">
			<fieldset>
			<!-- Horario!! -->
				<label for="name">Nombre del evento:</label>
				<input type="text" name="name" id="name">
				<label for="name">Comunidad Estudiantil:</label>
				<input type="text" name="name" id="name">
				<label for="start_date">Fecha inicio:</label>
				<input type="text" name="start_date" id="start_date">
				<label for="end_date">Fecha fin:</label>
				<input type="text" name="end_date" id="end_date">
				<label for="sede">Sede:</label>
				<input type="text" name="sede" id="sede">
				<label for="sede">Link:</label>
				<input type="text" name="link" id="link">
				<label for="desc">Descripci&oacute;n:</label>
				<textarea class="u-full-width" name="desc" id="desc"></textarea>
				<label><input type="checkbox" name="featured" id="featured"> Featured</label>
				<label>Imagen (min. 220x220)</label>
				<input type="file" name="square" id="square">
				<button type="submit" class="btn button bg-skyblue submit">Enviar</button>
				<p class="text-center m0"><small>*Disclaimer note</small></p>
			</fieldset>
		</form>
	</section>
	<div class="clear h60px"></div>
	<footer>
		<p class="text-center fz12">Copyright &copy; 2015 H&eacute;ctor Rinc&oacute;n</p>
	</footer>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/pikaday.js"></script>
<script>
	$('section, article, .img-bg').each(function(){ 
		if($(this).attr('data-bg')) 
			$(this).css('background-image', 'url(' + $(this).attr('data-bg') + ')'); 
		if($(this).attr('data-bgc')) 
			$(this).css('background-color', '#' + $(this).attr('data-bgc')); 
	});
	moment.locale('es');
	var i18n = {
		previousMonth : 'Mes anterior',
		nextMonth     : 'Siguiente mes',
		months        : ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Deciembre'],
		weekdays      : ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
		weekdaysShort : ['Dom','Lun','Mar','Mie','Jue','Vie','Sab']
	};
    var picker = new Pikaday({ 
    	field: document.getElementById('end_date'),
		position:'bottom',
		i18n: i18n,
		format: 'DD MMMM YYYY'
 	});
    var picker2 = new Pikaday({field: document.getElementById('start_date'), i18n: i18n, format: 'DD MMMM YYYY'});
	if($('.special-img-bg').attr('data-bg')){
		var img = $('.special-img-bg').attr('data-bg');
		$('.special-img-bg').css({
			'background': 'linear-gradient(rgba(15,67,121,.85), rgba(15,67,121,.85)), url(\''+img+'\')',
			'background-size': 'cover',
			'background-repeat': 'no-repeat',
			'background-position': 'center top'
		});
	}
</script>
</body>
</html>