<!-- Sessão Premios -->

<div class="container-fluid premios">

	<div class="container">

		<div class="row">

			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2>Prêmios</h2>
				<div class="borda-azul"></div>
			</div>

			<?php 
				
				$args = array(
					'post_type' => 'premio',
					'post_status' => 'publish'
				); 

				$query = new WP_Query($args);
				$i = 0; 

			?>

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