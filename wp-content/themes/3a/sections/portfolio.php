<!-- Portfolio -->

	<div class="container-fluid portfolio">
			
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
					'post_status' => 'publish'
				); 

				$query = new WP_Query($args);
				$i = 0;
				$velocidade = 0.1; ?>

			<!-- Iniciar o Loop Equipe -->
			
			<?php while($query->have_posts()) : $query->the_post();?>
				
				<?php if ($i % 4 == 0): ?>

					<!-- Abrir uma linha à cada 4 fotos -->

					<div class="row">

				<?php endif;?>

					<!-- Mostrar a Div com a foto -->
					
					<div class="col-md-3 container-image img-portfolio" data-wow-delay="<?php echo ($i+1) * $velocidade ?>s">

						
						<div class="overlay-hover"></div>
						<div class="logo-clientes"><img class="img-responsive" src='<?php echo types_render_field('logo-do-cliente', array('raw' => 'true')); ?>'/></div>

						<img class="img-responsive zoom-image" src='<?php echo types_render_field('bg-portfolio', array('raw' => 'true')); ?>'/>

						
					</div>


				<?php if (($i + 1) % 4 == 0 || $query->post_count == $i+1):  ?>

					<!-- Fechar uma Div à cada 4 fotos -->

					</div>

				<?php endif; ?>

				<?php $i++; //Incrementar o contador ?>

			<?php endwhile; ?>
		
	</div>