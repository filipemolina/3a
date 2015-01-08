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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
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
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />

</head>

<body <?php body_class(); ?>>

	<!-- Overlay de Carregamento da Página -->

	<div class="overlay"></div>

	<!-- Menu Superior -->

	<div class="container-fluid menu navbar-fixed-top">

		<div class="container">

			<!-- Logo -->
			
			<div class="logo3a">
				<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
			</div>

			<!-- Menu -->

			<?php wp_nav_menu(['container_class' => 'principal', 'container' => 'nav']); ?>

		</div>
	
	</div>