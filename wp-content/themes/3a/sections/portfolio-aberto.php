<!-- Portfolio Aberto -->

	<div class="container-fluid portfolio-aberto">
			
		<!-- Título com a barrinha azul -->

		<div class="btn-portfolio">
			<ul>
				<li><a href="javascript:void(0)" data-function="prev"><img src="<?php echo bloginfo('template_url')?>/img/bt_left.png"></a></li>
				<li><a href="javascript:void(0)" data-function="close"><img src="<?php echo bloginfo('template_url')?>/img/bt_close.png"></a></li>
				<li><a href="javascript:void(0)" data-function="next"><img src="<?php echo bloginfo('template_url')?>/img/bt_right.png"></a></li>
			</ul>
		</div>

		<?php 
				/*Argumentos de equipe */
				
				$args = array(
					'post_type' => 'portfolio',
					'post_status' => 'publish',
					'posts_per_page' => -1
				); 

				$query = new WP_Query($args);
				$i = 0; ?>

				<?php while($query->have_posts()) : $query->the_post();
		?>

		<?php 
		// Saber se esse item do portfolio é uma peça ou um case

		$tipo = types_render_field('tipo-portfolio', array());
		$video_solucao = types_render_field('video', array());
		$video_peca = types_render_field('video-da-peca', array());

		if($tipo == "Case") : ?>

			<div class="item-portfolio" data-cliente="<?php echo the_title(); ?>">
				
				<div class="header-portfolio" style="background-image: url('<?php echo types_render_field('imagem-de-fundo-interna', array('raw' => 'true')); ?>'); background-position: center center; background-repeat: no-repeat; background-color: <?php echo types_render_field('cor-de-fundo', array('raw' => 'true')); ?>;">
					<div class="container">
						<div class="text-wrap">
							<h1><?php echo the_content(); ?></h1>
						</div>
						<div class="image-wrap">
							<img src='<?php echo types_render_field('logo-interno', array('raw' => 'true')); ?>' alt="">
						</div>
					</div>
				</div>

				<div class="container">

					<div class="row titulo-portfolio">

						<h2>Desafio</h2>

						<div class="borda-azul"></div>

						<div class="text-desafio">
							<?php echo types_render_field('desafio-port', array('raw' => 'true')); ?>
						</div>

					</div>

					<div class="row">
						<div class="titulo-portfolio">
							<h2>Solução</h2>
							<div class="setinha-azul"></div>
						</div>
						<div class="text-solucao">
							<?php echo types_render_field('solucao-port', array('raw' => 'true')); ?>
						</div>
					</div>

					<div class="row margin-portfolio">
						<?php /////////////////////// Exibir os videos apenas se o campo não estiver vazio ?>
						<?php if($video_solucao != ""): ?>					

							<iframe class="col-md-6" height="315" src="https://www.youtube.com/embed/<?php echo types_render_field('video', array('output' => 'raw', 'separator' => '" frameborder="0" allowfullscreen></iframe><iframe class="col-md-6" height="315" src="https://www.youtube.com/embed/')); ?>" frameborder="0" allowfullscreen></iframe>

						<?php endif; ?>

						<div class="imagens-solucao">
							<?php echo types_render_field('imagens-da-solucao', array('class' => 'col-md-6')); ?>
						</div>

					</div>

				
				
					<div class="row margin-row-portfolio">
						<div class="titulo-portfolio wow fadeInLeft">
							<h2>Resultado</h2>
							<div class="setinha-azul"></div>
						</div>
						<div class="text-desafio">
							<?php echo types_render_field('resultado-port', array('raw' => 'true')); ?>
						</div>
					</div>

					<div class="row">
						<div class="imagens-solucao">
							<?php echo types_render_field('imagens-dos-resultados', array('class' => 'col-md-6')); ?>
						</div>
					</div>

				</div>

			</div>

		<?php else: ?>

			<div class="item-portfolio" data-cliente="<?php echo the_title(); ?>">

				<div class="header-portfolio" style="background-image: url('<?php echo types_render_field('imagem-de-fundo-interna', array('raw' => 'true')); ?>'); background-position: center center; background-repeat: no-repeat; background-color: <?php echo types_render_field('cor-de-fundo', array('raw' => 'true')); ?>;">
					<div class="container">
						<div class="text-wrap">
							<h1><?php echo the_content(); ?></h1>
						</div>
						<div class="image-wrap">
							<img src='<?php echo types_render_field('logo-interno', array('raw' => 'true')); ?>' alt="">
						</div>
					</div>
				</div>

				<div class="container">

					<div class="row">
						<div class="titulo-portfolio peca">
							<h2>Descrição</h2>
							<div class="borda-azul"></div>
						</div>
						<div class="text-desafio">
							<?php echo types_render_field('descricao-da-peca', array('raw' => 'true')); ?>
						</div>
					</div>

					<div class="row">
						<div class="imagens-solucao">
							<?php echo types_render_field('imagens-da-peca', array('class' => 'img-responsive')); ?>
						</div>
					</div>

					<?php /////////////////////// Exibir os videos apenas se o campo não estiver vazio ?>

					<?php if($video_peca != ""): ?>					

						<div class="row margin-portfolio">
							<iframe class="col-md-6" height="315" src="https://www.youtube.com/embed/<?php echo types_render_field('video-da-peca', array('output' => 'raw', 'separator' => '" frameborder="0" allowfullscreen></iframe><iframe width="600" height="315" src="https://www.youtube.com/embed/')); ?>" frameborder="0" allowfullscreen></iframe>
						</div>

					<?php endif; ?>

				</div>

			</div>
	
		<?php endif; ?>

		<?php $i++; //Incrementar o contador ?>

	<?php endwhile; ?>

		<div class="btn-portfolio">
			<ul>
				<li><a href="javascript:void(0)" data-function="prev"><img src="<?php echo bloginfo('template_url')?>/img/bt_left.png"></a></li>
				<li><a href="javascript:void(0)" data-function="close"><img src="<?php echo bloginfo('template_url')?>/img/bt_close.png"></a></li>
				<li><a href="javascript:void(0)" data-function="next"><img src="<?php echo bloginfo('template_url')?>/img/bt_right.png"></a></li>
			</ul>
		</div>

		<a href="javascript:void(0)" class="btn-vermais" data-status="fechado" data-secao="portfolio-aberto" data-scroll="portfolio">VER MAIS</a>
	</div>