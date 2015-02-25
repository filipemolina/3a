<!-- Redes Sociais -->

<div class="container-fluid redes-sociais">

	<div class="container">

		<div class="row">

		<?php 

			$args = array(
				'post_type' => 'redes-sociais',
				'post_status' => 'publish',
				'posts_per_page' => -1
			);

			$query = new WP_Query($args);

			if($query->have_posts()) : while($query->have_posts()) : $query->the_post();

		?>
			
			<div class="icone <?php echo get_the_title(); ?> col-md-3 col-sm-3 col-xs-3">
				<a href="<?php echo get_the_content(); ?>">

					<img src="<?php echo bloginfo('template_url'); ?>/img/redes-sociais/ico_<?php echo get_the_title(); ?>.png" alt="">
					<div class="borda"></div>
				</a>
				
			</div>

		<?php endwhile; endif; ?>

		</div>

	</div>
</div>
	<div class="container-fluid footer">
		<p>Copyright © 2015 3A Worldwide. Todos os direitos reservados.</p>
	</div>