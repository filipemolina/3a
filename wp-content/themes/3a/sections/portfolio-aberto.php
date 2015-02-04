<!-- Portfolio Aberto -->

	<div class="container-fluid portfolio-aberto">
			
		<!-- Título com a barrinha azul -->

		<div class="btn-portfolio">
			<ul>
				<li><a href="javascript:void(0)" data-function="prev"><</a></li>
				<li><a href="javascript:void(0)" data-function="close">x</a></li>
				<li><a href="javascript:void(0)" data-function="next">></a></li>
			</ul>
		</div>

		<?php 
				/*Argumentos de equipe */
				
				$args = array(
					'post_type' => 'portfolio',
					'post_status' => 'publish'
				); 

				$query = new WP_Query($args);
				$i = 0; ?>

				<?php while($query->have_posts()) : $query->the_post();
		?>

		<div class="item-portfolio" data-cliente="<?php echo the_title(); ?>">
			
			<div class="header-portfolio">
				<div class="container">
					<div class="text-wrap">
						<h1><?php echo get_the_title(); ?></h1>
					</div>
					<div class="image-wrap">
						<img src='<?php echo types_render_field('logo-do-cliente', array('raw' => 'true')); ?>' alt="">
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
						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
					</div>
				</div>

				<div class="row col-md-offset-2">
					<div class="titulo-portfolio">
						<h2>Solução</h2>
						<div class="setinha-azul"></div>
					</div>
					<div class="text-desafio">
						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
					</div>
				</div>

				<div class="row">
					<div class="imagens-solucao">
						<img src="<?php bloginfo('template_url'); ?>../img/portfolio/mundial/1.jpg" alt="">
						<img src="<?php bloginfo('template_url'); ?>../img/portfolio/mundial/2.jpg" alt="">
					</div>
				</div>
			
				<div class="row margin-row-portfolio">
					<div class="titulo-portfolio wow fadeInLeft">
						<h2>Resultado</h2>
						<div class="setinha-azul"></div>
					</div>
					<div class="text-desafio">
						<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
					</div>
				</div>

				<div class="row">
					<div class="imagens-solucao">
						<img src="<?php bloginfo('template_url'); ?>../img/portfolio/mundial/resultados-1.jpg" alt="">
						<img src="<?php bloginfo('template_url'); ?>../img/portfolio/mundial/resultados-2.jpg" alt="">
					</div>
				</div>

			</div>

		</div>

		<?php $i++; //Incrementar o contador ?>

	<?php endwhile; ?>
	</div>