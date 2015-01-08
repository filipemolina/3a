<?php get_header() ?>

	<div class="container-fluid hero-unit">
		<img src="<?php bloginfo('template_url'); ?>/img/hero-unit/frase.png" alt="" class="fadeInRight animated"/>
	</div>

	<div class="container quem-somos">
		<div class="row">

			<?php //Obter o conteúdo da página "Quem Somos" ?>

			<?php $quem_somos = get_page_by_title('Quem Somos'); ?>
	
			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2><?php echo $quem_somos->post_title; ?></h2>
				<div class="borda-azul"></div>
			</div>	

			<?php //Formatar o conteudo de $quem_somos->post_content de acordo com os filtros em 'the_content' (adiciona tags Html, etc...) ?>

			<?php echo apply_filters( 'the_content', $quem_somos->post_content ); ?>

		</div>
	</div>

	<!-- Parallax 1 -->

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-1">
		<div class="strong">Liberdade é a nossa inspiração</div>
		<div class="">para gerar resultados</div>
	</div>

	<div class="container-fluid equipe">

		<div class="container">
			
			<?php //Obter todos os itens da categoria "Equipe" ?>

			<?php 
				
				$args = array(
					'post_type' => 'equipe',
					'post_status' => 'publish'
				); 

				$query = new WP_Query($args);
				$i = 0; ?>

			<!-- Iniciar o Loop -->
			
			<?php while($query->have_posts()) : $query->the_post();?>
				
				<?php if ($i % 4 == 0): ?>

					<!-- Abrir uma linha à cada 4 fotos -->

					<div class="row">

				<?php endif;?>

					<!-- Mostrar a Div com a foto -->

					<div class="col-md-3 container-image"><img class="img-responsive zoom-image" src='<?php echo types_render_field('foto', array('raw' => 'true')); ?>'/></div>


				<?php if (($i + 1) % 4 == 0 || $query->post_count == $i+1):  ?>

					<!-- Fechar uma Div à cada 4 fotos -->

					</div>

				<?php endif; ?>

				<?php $i++; //Incrementar o contador ?>

			<?php endwhile; ?>
		</div>
		
	</div>

	<!-- Parallax 2 -->

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-2">
		<div class="strong">Liberdade é a nossa inspiração</div>
		<div class="">para gerar resultados</div>
	</div>

	<!-- Parallax 3 -->

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-3">
		<div class="strong">Liberdade é a nossa inspiração</div>
		<div class="">para gerar resultados</div>
	</div>

<?php get_footer() ?>