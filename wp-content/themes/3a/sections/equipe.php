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
				$velocidade = 0.1; ?>

			<!-- Iniciar o Loop Equipe -->

			<div class="row">
			
			<?php while($query->have_posts()) : $query->the_post();?>
				
				<?php if ($i % 4 == 0): ?>

					<!-- Abrir uma linha à cada 4 fotos -->

					<div class="row">

				<?php endif;?>

					<!-- Mostrar a Div com a foto -->
					
					<div class="col-md-3 col-sm-6 container-image wow flipInY" data-wow-delay="<?php echo ($i+1) * $velocidade ?>s">

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
		
	</div>