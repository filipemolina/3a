<?php get_header() ?>

	<?php //Obter o conteúdo da página "Banner" ?>
		<?php $args = array(
			'post_type' => 'banner',
			'post_status' => 'publish'
		); ?>

	<?php	$query = new WP_Query($args); ?>

	<?php while($query->have_posts()) : $query->the_post();?>

	<div class="container-fluid hero-unit" style="background-image: url('<?php echo types_render_field('bg_banner', array('raw' => 'true')); ?>');">
		<div class="row">
			<img class="img-responsive wow fadeInRightBig" src='<?php echo types_render_field('banner', array('raw' => 'true')); ?>'/>
		</div>
	</div>
	<?php endwhile; ?>
	<!-- Sessão Quem somos -->

	<?php get_template_part('sections/quem_somos'); ?>

	<!-- Parallax 1 -->

	<?php $args = array(
		'post_type' => 'frase',
		'post_status' => 'publish'
	); ?>

	<?php	$query = new WP_Query($args);
			$frases = array();
	 ?>

	<?php while($query->have_posts()) : $query->the_post();?>

		<?php $frases[] =  get_the_content();  ?>
	<?php endwhile;?>

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-1">
		<div class="wow zoomIn"><?php echo $frases[0]; ?></div>
	</div>

	<!-- Seção Equipe -->

	<?php get_template_part('sections/equipe'); ?>

	<!-- Seção Premios -->

	<?php get_template_part('sections/premios'); ?>

	<!-- Seção Estrutura -->

	<?php get_template_part('sections/estrutura'); ?>

	<!-- Seção Serviços -->

	<?php get_template_part('sections/servicos'); ?>

	<!-- Serviços Mobile -->

	<?php get_template_part('sections/servicos_mobile'); ?>

	<!-- Parallax 2 -->

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-2">
		<div class=" wow zoomIn"><?php echo $frases[1]; ?></div>
	</div>

	<?php get_template_part('sections/portfolio'); ?>
	<?php get_template_part('sections/portfolio-aberto'); ?>
	<?php get_template_part('sections/portfolio-mobile'); ?>

	<!-- Parallax 3 -->

	<div class="parallax" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="150" id="parallax-3">
		<div class="wow zoomIn"><?php echo $frases[2]; ?></div>
	</div>

	<!-- 3A Internacional -->

	<?php get_template_part('sections/3ainternacional'); ?>

	<!-- 3A Internacional MAPA -->

	<?php get_template_part('sections/mapa'); ?>

	<!-- Contato -->

	<?php get_template_part('sections/contato'); ?>
	
	<!-- Formulário de Contato -->

	<?php get_template_part('sections/form-contato'); ?>

	<!-- Redes Sociais -->

	<?php get_template_part('sections/redes-sociais'); ?>

<?php get_footer() ?>