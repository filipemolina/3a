<div class="sidebar col-md-4">

	<!-- Pesquisa -->

	<!-- <form action="<?php echo get_search_link(); ?>" class="pesquisa" method="get">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Enter Search Keywords" name="s" id="s" aria-describedby="basic-addon2">
			<span class="input-group-addon" id="basic-addon2"><img src="<?php bloginfo('template_url'); ?>/img/blog/lupa.png" alt=""></span>
		</div>
	</form> -->

	<?php get_search_form('true'); ?>

	<!-- Posts Recentes -->

	<h3>Últimos Posts</h3>

	<ul>

		<?php 

			$args = array(

				//Tipo e Status
				'post_type'   => 'post',
				'post_status' => 'publish',

				//Limite
				'posts_per_page' => 5,

			);

			$query = new WP_Query($args);
			

		?>
		
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

		<?php endwhile; endif; ?>

	</ul>

	<h3>Últimos Comentários</h3>

	<ul>
	
		<?php $comentarios = get_comments(array( 'number' => 5 )); ?>

		<?php foreach ($comentarios as $comentario): ?>

			<li><a href="<?php get_permalink($comentario->comment_post_ID ); ?>"><?php echo $comentario->comment_author; ?> > <?php echo get_the_title($comentario->comment_post_ID); ?></a></li>
			
		<?php endforeach ?>

	</ul>

	<h3>Arquivo</h3>

	<ul>
		
		<?php wp_get_archives('type=monthly'); ?>

	</ul>

	<h3>Categorias</h3>

	<ul>
		
		<?php wp_list_categories(array('title_li' => '')); ?>

	</ul>
	
</div>