<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title("|", true, 'right'); bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />

</head>

<body data-spy="scroll" data-target=".navbar-example" <?php body_class(); ?>>

	<!-- Overlay de Carregamento da Página -->

	<div class="overlay"></div>

	<!-- Menu Superior -->

	<nav class="menu navbar navbar-default navbar-fixed-top">

		<div class="container">

			<!-- A Logo e o Toggle ficam agrupados para melhorar a experiência Mobile -->

			<div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse">
				    <span class="sr-only">Navegação</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="javascript:void(0)"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
		    </div>

			<!-- Menu -->

		    <div class="collapse navbar-collapse scrollspy" id="menu-collapse">

		    	<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav navbar-right menu nav-tabs', 'container_class' => '', 'container' => '')); ?>

		    </div>

		</div>
	
	</nav>