<!-- Portfolio -->

	<div class="container-fluid portfolio desktop">
			
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
					'posts_per_page' => -1
				); 

				$query = new WP_Query($args);
				$i = 0;
				$velocidade = 0.1; ?>

			<div class="pecas-wrap">
				
				<!-- Iniciar o Loop Equipe -->
			
				<?php while($query->have_posts()) : $query->the_post();?>

					<?php // Abrir uma row a cada 4 items. ?>
					
					<?php if ($i % 4 == 0): ?>

						<?php // Apenas a primeira row é mostrada, as próximas recebem a classe "fechada" ?>

						<?php if ($i == 0): ?>

							<div class="row">

						<?php else: ?>

							<div class="row fechada">
							
						<?php endif; ?>

					<?php endif;?>

						<!-- Mostrar a Div com a foto -->
						
						<div class="col-md-3 container-image img-portfolio" data-wow-delay="<?php echo ($i+1) * $velocidade ?>s">

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