<?php get_header() ?>

	<div class="container-fluid hero-unit">
		<img src="<?php bloginfo('template_url'); ?>/img/hero-unit/frase.png" alt="" class="wow fadeInRightBig"/>
	</div>
	
	<!-- Sessão Quem somos -->

	<?php get_template_part('sections/quem_somos'); ?>

	<!-- Parallax 1 -->

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-1">
		<div class="strong wow zoomIn">Nós comunicamos marcas</div>
		<div class="wow zoomIn">além de fronteiras</div>
	</div>

	<!-- Seção Equipe -->

	<?php get_template_part('sections/equipe'); ?>

	<!-- Seção Premios -->

	<?php get_template_part('sections/premios'); ?>

	<!-- Seção Estrutura -->

	<?php get_template_part('sections/estrutura'); ?>

	<!-- Seção Serviços -->

	<?php get_template_part('sections/servicos'); ?>


	<!-- Parallax 2 -->

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-2">
		<div class="strong wow zoomIn">Liberdade é a nossa inspiração</div>
		<div class="wow zoomIn">para gerar resultados</div>
	</div>

	<?php get_template_part('sections/portfolio'); ?>

	<!-- Parallax 3 -->

	<div class="parallax" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="150" id="parallax-3">
		<div class="strong wow zoomIn">Queremos encantar os mercados</div>
		<div class="wow zoomIn">com criatividade funcional</div>
	</div>

	<!-- 3A Internacional -->

	<?php get_template_part('sections/3ainternacional'); ?>

	<!-- 3A Internacional MAPA -->

	<?php get_template_part('sections/mapa'); ?>

	<!-- Contato -->

	<?php get_template_part('sections/contato'); ?>
	
	<!-- Formulário de Contato -->

	<?php get_template_part('sections/form-contato'); ?>

<?php get_footer() ?>