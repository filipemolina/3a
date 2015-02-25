<!-- Equipe -->

	<div class="equipe-mobile">

		<div class="container">
			
			<?php //Obter todos os itens da categoria "Equipe" ?>

			<?php

				/*Argumentos de equipe */

				$args = array(
					'post_type' => 'equipe',
					'post_status' => 'publish',
					'posts_per_page' => -1
				); 

				$query = new WP_Query($args);
				$i = 0;
				$velocidade = 0.1; ?>

			<!-- Iniciar o Loop Equipe -->
			
			<?php while($query->have_posts()) : $query->the_post();?>

					<!-- Mostrar a Div com a foto -->
					
					<div class="container-image wow flipInY" data-wow-delay="<?php echo ($i+1) * $velocidade ?>s">

						<img class="img-responsive zoom-image" src='<?php echo types_render_field('foto', array('raw' => 'true')); ?>'/>

					</div>

					<div class="info">
						<div class="nome"> 
							<span><?php echo the_title(); ?></span> 
						</div>

						<p class="cargo"><?php echo types_render_field('cargo', array('raw' => 'true')); ?></p>

						<div class="bio"><?php echo the_content(); ?></div>
					</div>

			<?php endwhile; ?>

		</div>
		
	</div>