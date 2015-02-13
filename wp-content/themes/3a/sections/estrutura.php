<div class="container-fluid estrutura">

	<div class="container">

		<div class="row">

			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2>Estrutura</h2>
				<div class="borda-azul"></div>
			</div>
		
			<?php 
			
				$args = array(
					'post_type' => 'estrutura',
					'post_status' => 'publish',
					'posts_per_page' => -1
				); 

				$query = new WP_Query($args);
				$i = 0; 

			?>

			<!-- FlexSlider -->

			<div class="flexslider wow fadeIn margin-estrutura" data-wow-offset="300">

				<ul class="slides">
					
				<?php while($query->have_posts()) : $query->the_post(); ?>

	                <li>
	                	<img src="<?php echo types_render_field('foto', array('raw' => 'true')); ?>" alt="">

	                	<?php // Obter o texto para o caption do slide ?>

	                	<?php $caption = get_the_content(); ?>
	                
	                	<div class="flex-caption"><?php echo $caption; ?></div>
	                	
	                </li>

				<?php endwhile; ?>

				</ul>

	            
	        </div>

		</div>

	</div>

</div>