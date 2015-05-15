<!Doctype html>
<!--[if lt IE 7]><html lang="es-mx" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="es-mx" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="es-mx" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="es-mx" class="no-js"><!--<![endif]-->

<html>
<head>
	
	<meta charset="UTF-8">
	
	<meta name="author" content="The NuevaWeb Team">
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width">
	<?php //This is my custom stylesheet ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php // icons & favicons ?>
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/assets/apple-icon-touch.png">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/assets/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/assets/favicon.ico">
	<![endif]-->
	<meta name="msapplication-TileColor" content="#f8e047">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/assets/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); // wordpress admin-bar functions ?>

	<?php // Your Google Analytics goes here. ?>


</head>
<body>

	<?php 
	/*
	*
	* El css que genera el "En Construcción" está salvado en el archivo .less
	* únicamente comenta la línea o elimínala para quitar el display en construcción
	*
	* Elimina éste comentario y ya estás listo 
	* Happy Developing!
	*
	*/
	?>

	<header id="main-header">
	    <?php if(is_active_sidebar('cta-slider')): ?>
			<div class="cta-slider">
				<div class="container">
					<div class="row">
						<div class="hidden-xs col-sm-12">
							<?php dynamic_sidebar( 'cta-slider' ); ?>
						</div><!--.hidden-xs col-sm-12-->
					</div><!--.row-->
				</div><!--.container-->					
			</div><!--.cta-slider-->
		<?php endif; ?>
		<div class="container">
			<div class="row">
				<nav class="navbar" role="navigation">
					<div class="col-xs-3">
						<a href="<?php bloginfo('url') ?>" class="logo">
							<img src="<?php bloginfo('template_url'); ?>/img/index/logo.png">
						</a>
					</div><!--col-sm-3-->
					<div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
				      	<h1 class="none"><?php bloginfo('name'); ?></h1>
				      </a>
				    </div><!--navbar-header-->


					<?php nw_main_nav(); ?>

				</nav><!-- /navbar -->
			</div><!--row-->
		</div><!--.container-->
	</header><!-- /#main-header -->



