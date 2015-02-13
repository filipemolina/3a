<!-- Portfolio Mobile -->

<div class="container-fluid portfolio portfolio-mobile">
		
		<!-- Título com a barrinha azul -->

		<div class="container">
			<div class="titulo wow fadeInLeft">
				<h2>Portfólio</h2>
				<div class="borda-azul"></div>
			</div>
		</div>

		<?php //Obter todos os itens da categoria "Equipe" ?>

		<?php 
			/*Argumentos de portfolio */
			$args = array(
				'post_type' => 'portfolio',
				'post_status' => 'publish',
				'posts_per_page' => '-1'
			); 

			$query = new WP_Query($args);
			$i = 0;
			$velocidade = 0.1; ?>

		<div class="pecas-wrap">
			
			<!-- Iniciar o Loop Equipe -->
		
			<?php while($query->have_posts()) : $query->the_post();?>
				
				<?php if ($i % 4 == 0): ?>

					<!-- Abrir uma linha à cada 4 fotos -->

					<?php if ($i == 0 || $i == 4): ?>

						<div class="row">

					<?php else: ?>

						<div class="row fechada">

					<?php endif; ?>

				<?php endif;?>

					<!-- Mostrar a Div com a foto -->
					
					<div class="col-md-3 col-sm-6 container-image img-portfolio-mobile" data-wow-delay="<?php echo ($i+1) * $velocidade ?>s">

						<div class="overlay-hover"></div>

						<div class="logo-clientes"><img class="img-responsive" src='<?php echo types_render_field('logo-externa-port', array('raw' => 'true')); ?>'/></div>

						<img class="img-responsive zoom-image" src='<?php echo types_render_field('thumbnail-externo', array('raw' => 'true')); ?>'/>

						<div class="detalhes">
							<a href="javascript:void(0)" data-cliente="<?php echo the_title(); ?>">VER DETALHES</a>
						</div>

					</div>


				<?php if (($i + 1) % 4 == 0 || $query->post_count == $i+1):  ?>

					<!-- Fechar uma Div à cada 4 fotos -->

					</div>

				<?php endif; ?>

				<?php $i++; //Incrementar o contador ?>

			<?php endwhile; ?>

		</div>
	
</div>

<div class="conteudo-portfolio-mobile">

		<div class="btn-portfolio">
			<ul>
				<li><a href="javascript:void(0)" data-function="prev"><img src="<?php echo bloginfo('template_url')?>/img/bt_left.png"></a></li>
				<li><a href="javascript:void(0)" data-function="close"><img src="<?php echo bloginfo('template_url')?>/img/bt_close.png"></a></li>
				<li><a href="javascript:void(0)" data-function="next"><img src="<?php echo bloginfo('template_url')?>/img/bt_right.png"></a></li>
			</ul>
		</div>

		<?php 
			/*Argumentos de portfolio */
			$args2 = array(
				'post_type' => 'portfolio',
				'post_status' => 'publish',
				'posts_per_page' => '-1'
			); 

			$query2 = new WP_Query($args);
			$j = 0;
		?>

		<?php while($query2->have_posts()) : $query2->the_post(); ?>

			<?php 
			// Saber se esse item do portfolio é uma peça ou um case

			$tipo = types_render_field('tipo-portfolio', array()); 

			if($tipo == "Case") : ?>

				<div class="item-portfolio" data-cliente="<?php echo the_title(); ?>">
					
					<div class="header-portfolio" style="background-image: url('<?php echo types_render_field('imagem-de-fundo-interna', array('raw' => 'true')); ?>'); background-position: center center; background-repeat: no-repeat; background-color: <?php echo types_render_field('cor-de-fundo', array('raw' => 'true')); ?>;">
						<div class="container">
							<div class="text-wrap">
								<h1><?php echo the_content(); ?></h1>
							</div>
						</div>
					</div>

					<div class="container">

						<div class="row">
							<div class="titulo-portfolio">
								<h2>Desafio</h2>
								<div class="borda-azul"></div>
							</div>
							<div class="text-desafio">
								<?php echo types_render_field('desafio-port', array('raw' => 'true')); ?>
							</div>
						</div>

						<div class="row col-md-offset-2">
							<div class="titulo-portfolio">
								<h2>Solução</h2>
								<div class="setinha-azul"></div>
							</div>
							<div class="text-desafio">
								<?php echo types_render_field('solucao-port', array('raw' => 'true')); ?>
							</div>
						</div>

						<div class="row">
							<div class="imagens-solucao">
								<?php echo types_render_field('imagens-da-solucao', array('class' => 'col-md-6 img-responsive')); ?>
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
								<?php echo types_render_field('imagens-dos-resultados', array('class' => 'col-md-6 img-responsive')); ?>
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
							<div class="titulo-portfolio">
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

					</div>

				</div>
		
			<?php endif; ?>

			<?php $j++; ?>

		<?php endwhile; ?>

		<a href="javascript:void(0)" class="btn-vermais" data-status="fechado" data-secao="portfolio-aberto" data-scroll="portfolio">VER MAIS</a>
	
</div>