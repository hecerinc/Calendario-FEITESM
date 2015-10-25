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

	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="style.css">
	<!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

</head>
<body>
	<header class="special-img-bg" data-bg="img/header.png">
		<div class="container">
			<h1 class="lh90 mb40">Calendario de Eventos <br> <span class="subtitle">Comunidades Estudiantiles</span></h1>
			<h2>un proyecto de <a href="#">Grupo Nueva Prensa</a></h2>
		</div>		
	</header>
	<section class="slider u-cf">
		<h1>Slider</h1>
	</section>
	<div class="clear h100px"></div>
	<section class="calendar container">
		<h3 class="title">Eventos de la semana</h3>
		<a href="#" class="u-fr add-all">Agregar todos a mi calendario</a>
		<div class="clear"></div>
		<div class="layout-icons u-fr">
			<a href="#" class="list-view"><?= file_get_contents('img/listview.svg'); ?></a>
			<a href="#" class="grid-view"><?= file_get_contents('img/grid.svg'); ?></a>
		</div>
		<div class="clear h40px"></div>
		
		<!-- Calendar -->
		<?php for($i=0; $i < 2; $i++): ?>
		<div class="events row">
			<?php for($j=0; $j<4; $j++): ?>
			<div class="event three columns">
				<div class="overlay">
					<div class="va-p">
						<div class="va">
							<h5>Expotec 2015</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat cupiditate atque.</p>
							<a class="btn bg-navy" href="#">Agendar</a>
							<p class="u-fr daybr">29 <small>Mi&eacute;rcoles</small></p>
						</div>
					</div>
				</div>
				<a class="square" href="#">
					<img src="img/event.png" alt="Nombre del evento">
					<span class="date">18</span>
				</a>
				<div class="clear h5px"></div>
				<a href="#" class="caption">Congreso Internacional La Invenci&oacute;n de la Novela Moderna</a>
			</div>
			<?php endfor; ?>
		</div>
		<?php endfor; ?>

	</section>
	<div class="clear h60px"></div>
	<footer>
		<p class="text-center fz12">Copyright &copy; 2015 H&eacute;ctor Rinc&oacute;n</p>
	</footer>
<script src="js/jquery-1.11.0.min.js"></script>
<script>
	$('section, article, .img-bg').each(function(){ 
		if($(this).attr('data-bg')) 
			$(this).css('background-image', 'url(' + $(this).attr('data-bg') + ')'); 
		if($(this).attr('data-bgc')) 
			$(this).css('background-color', '#' + $(this).attr('data-bgc')); 
	});
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