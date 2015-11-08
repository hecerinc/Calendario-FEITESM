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
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="css/dropkick.css">
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
						<li><a href="#">Inicio</a></li>
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
	<!-- Slider -->
	<section class="slider u-cf">
		<div class="feature-img u-fl">
			<div class="ftr">
				<img src="img/fbevent.png" alt="Featured image title">
			</div>
			<div class="ftr">
				<img src="img/fbevent.png" alt="Featured image title">
			</div>
			<div class="ftr">
				<img src="img/fbevent.png" alt="Featured image title">
			</div>
			<div class="ftr">
				<img src="img/fbevent.png" alt="Featured image title">
			</div>
			<div class="ftr">
				<img src="img/fbevent.png" alt="Featured image title">
			</div>
			<div class="ftr">
				<img src="img/fbevent.png" alt="Featured image title">
			</div>
			<div class="ftr">
				<img src="img/fbevent.png" alt="Featured image title">
			</div>
		</div>
		<div class="slickerd u-fr">
			<div class="thumb">
				<img src="img/event.png" alt="Image">
			</div>
			<div class="thumb">
				<img src="img/event.png" alt="Image">
			</div>
			<div class="thumb">
				<img src="img/event.png" alt="Image">
			</div>
			<div class="thumb">
				<img src="img/event.png" alt="Image">
			</div>
			<div class="thumb">
				<img src="img/event.png" alt="Image">
			</div>
			<div class="thumb">
				<img src="img/event.png" alt="Image">
			</div>
			<div class="thumb">
				<img src="img/event.png" alt="Image">
			</div>
		</div>
	</section>
	<div class="clear "></div>

	
	<section class="calendar container">
		<h3 class="title">Eventos de la semana</h3>
		<a href="#" class="u-fr add-all">Agregar todos a mi calendario</a>
		<div class="clear"></div>
		<select id="period" class="dropkick u-fl">
			<option value="1">25 al 31 de octubre</option>
			<option value="2">22 al 28 de noviembre</option>
			<option value="3">29 de nov al 5 de dic</option>
		</select>
		<!-- <div class="clear"></div> -->
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
<script src="js/slick.min.js"></script>
<script src="js/dropkick.js"></script>
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
	$('.dropkick').dropkick({mobile:true});
	$('.slickerd').slick({
		vertical: true,
		verticalSwiping: true,
		slidesToScroll:1,
		slidesToShow: 3,
		focusOnSelect: true,
		asNavFor: '.feature-img',
		autoplay: true
	});
	$('.feature-img').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		// fade: true,
		asNavFor: '.slickerd'
	});
</script>
</body>
</html>