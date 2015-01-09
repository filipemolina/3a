<?php get_header() ?>

	<div class="container-fluid hero-unit">
		<img src="<?php bloginfo('template_url'); ?>/img/hero-unit/frase.png" alt="" class="fadeInRightBig animated"/>
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
		<div class="strong wow zoomIn">Liberdade é a nossa inspiração</div>
		<div class="wow zoomIn">para gerar resultados</div>
	</div>

	<!-- Equipe -->

	<div class="container-fluid equipe">

		<div class="container">
			
			<?php //Obter todos os itens da categoria "Equipe" ?>

			<?php 
				/*Argumentos de equipe */
				$args = array(
					'post_type' => 'equipe',
					'post_status' => 'publish'
				); 

				$query = new WP_Query($args);
				$i = 0; 
				$velocidade = 0.1; //Diferença de tempo entre a abertura de cada foto nesta seção?>

			<!-- Iniciar o Loop Equipe -->
			
			<?php while($query->have_posts()) : $query->the_post();?>
				
				<?php if ($i % 4 == 0): ?>

					<!-- Abrir uma linha à cada 4 fotos -->

					<div class="row">

				<?php endif;?>

					<!-- Mostrar a Div com a foto -->
					
					<div class="col-md-3 container-image wow flipInY" data-wow-delay="<?php echo ($i+1) * $velocidade ?>s">

						<div class="overlay-hover">

							<div class="nome"> 
								<span><?php echo the_title(); ?></span> 
							</div>

							<p class="cargo"><?php echo types_render_field('cargo', array('raw' => 'true')); ?></p>

							<div class="bio"><?php echo the_content(); ?></div>
						</div>

						<img class="img-responsive zoom-image" src='<?php echo types_render_field('foto', array('raw' => 'true')); ?>'/>

					</div>


				<?php if (($i + 1) % 4 == 0 || $query->post_count == $i+1):  ?>

					<!-- Fechar uma Div à cada 4 fotos -->

					</div>

				<?php endif; ?>

				<?php $i++; //Incrementar o contador ?>

			<?php endwhile; ?>
		</div>
		
	</div>

	<!-- Sessão Premios -->
	<div class="container-fluid premios">

		<div class="container">

			<div class="row">

				<!-- Título com a barrinha azul -->

				<div class="titulo wow fadeInLeft">
					<h2>Prêmios</h2>
					<div class="borda-azul"></div>
				</div>	
				<?php //Obter todos os itens da categoria "Premios" ?>

				<?php 
					/*Argumentos de premios */
					$args = array(
						'post_type' => 'premio',
						'post_status' => 'publish'
					); 

					$query = new WP_Query($args);
					$i = 0; ?>

				<!-- Iniciar o Loop Premios -->
				
				<?php while($query->have_posts()) : $query->the_post();?>
					
					<?php if ($i % 4 == 0): ?>

						<!-- Abrir uma linha à cada 4 fotos -->

						<div class="row">

					<?php endif;?>

						<!-- Mostrar a Div com a foto -->

						<div class="col-md-3 container-image blocos-premios wow flipInX">
							<img class="img-responsive" src='<?php echo types_render_field('foto', array('raw' => 'true')); ?>'/>
							<h3><?php echo the_title(); ?></h3>
							<?php echo the_content(); ?>
						</div>


					<?php if (($i + 1) % 4 == 0 || $query->post_count == $i+1):  ?>

						<!-- Fechar uma Div à cada 4 fotos -->

						</div>

					<?php endif; ?>

					<?php $i++; //Incrementar o contador ?>

				<?php endwhile; ?>
			</div>

		</div>
		
	</div>

	<!-- Sessão Estrutura -->

	<div class="container-fluid estrutura">

		<div class="container">

			<div class="row">

				<!-- Título com a barrinha azul -->

				<div class="titulo wow fadeInLeft">
					<h2>Estrutura</h2>
					<div class="borda-azul"></div>
				</div>

			</div>

		</div>

	</div>

	<!-- Parallax 2 -->

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-2">
		<div class="strong wow zoomIn">Liberdade é a nossa inspiração</div>
		<div class="wow zoomIn">para gerar resultados</div>
	</div>

	<!-- Parallax 3 -->

	<div class="parallax" data-stellar-background-ratio="0.5" id="parallax-3">
		<div class="strong wow zoomIn">Liberdade é a nossa inspiração</div>
		<div class="wow zoomIn">para gerar resultados</div>
	</div>

<?php get_footer() ?>