<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

	require_once('vendor/Mobile_Detect.php');

	$detect = new Mobile_Detect;

?>
	
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.stellar.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/wow.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.flexslider.js"></script>

	<?php 

	// Remover todas as classes de animações caso o site estaja sendo visualizado em um dispositivo mobile 

	if($detect->isMobile()): ?>

		<script type="text/javascript">

			/////////////////// Executada antes que as imagens sejam carregadas.

			jQuery(function(){

				$ = jQuery;

				var largura = $(window).width();

				// Ajusta o parallax para uma velocidade menor

				$(".parallax").data('stellar-background-ratio', "0.8");

				// Remove as classes de animação

				$("*").removeClass("fadeInRightBig");
				$("*").removeClass("fadeInLeft");
				$("*").removeClass("fadeInRight");
				$("*").removeClass("zoomIn");
				$("*").removeClass("flipInY");
				$("*").removeClass("flipInX");
				$("*").removeClass("fadeIn");
				$("*").removeClass("wow");

				// Desabilitar a classe de serviços Dekstop

				if(largura < 981)
				{
					$(".servicos").removeClass('servicos-ativo');
				}

				// Fechar a navegação no click do menu

				$("#menu-principal a, .navbar-brand img").click(function(){

					$('.navbar-collapse').collapse('hide');

				});

			});

		</script>

	<?php else: ?>

		<script type="text/javascript">

			jQuery(window).load(function(){

				$ = jQuery;

				//Executar as animações apenas na versão desktop

				var largura = $(window).width();

				if(largura > 981)
				{
					var wow = new WOW({
							offset : 100
					});

					//Adicionar os efeitos à todos os parágrafos

					$(".quem-somos p, .principal p").addClass("wow fadeInRight");

					wow.init();
				}

			});

		</script>

	<?php endif; ?>

	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/scripts.js"></script>

	<?php wp_footer(); ?>

</body>
</html>
