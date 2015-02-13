<!-- Sessão Premios -->

<div class="container-fluid premios">

	<div class="container">

		<!-- <div class="row"> -->

			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2>Prêmios</h2>
				<div class="borda-azul"></div>
			</div>

			<?php 
				
				$args = array(
					'post_type' => 'premio',
					'post_status' => 'publish',
					'posts_per_page'=> -1
				); 

				$query = new WP_Query($args);
				$i = 0; 

			?>

			<!-- Iniciar o Loop Premios -->
			
			<?php while($query->have_posts()) : $query->the_post();?>
				
				<?php if ($i % 4 == 0): ?>

					<?php if ($i == 0 || $i == 4): ?>

						<div class="row">
						
					<?php else: ?>

						<div class="row fechada">

					<?php endif; ?>

				<?php endif;?>

					<!-- Mostrar a Div com a foto -->

					<div class="col-md-3 col-sm-6 container-image blocos-premios wow flipInX">
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

	<!-- </div> -->

	<a href="javascript:void(0)" class="btn-vermais" data-status="fechado" data-secao="premios" data-scroll="premios">VER MAIS</a>
	
</div>