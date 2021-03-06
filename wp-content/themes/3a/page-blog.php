<?php get_header(); ?>

<section class="blog">

	<div class="container">
			
		<h2>BLOG</h2>

		<div class="posts col-md-8">
		
			<?php ///////////////////////////////////////////////////////////////////////////////////// Loop do Wordpress 

				// $args = array(
					
				// 	//Tipo e Status
				// 	'post_type'   => 'post',
				// 	'post_status' => 'publish',
					
				// 	//Ordem
				// 	'order'               => 'DESC',
				// 	'orderby'             => 'date',
					
				// 	//Paginação
				// 	'posts_per_page' => 10,
				// 	'paged' => (get_query_var('page')) ? get_query_var('page') : 1
					
				// );
			
				// $query = new WP_Query( $args );

				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts('posts_per_page=10&paged=' . $paged);

			?>


			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

				<article>

					<!-------------------------------------------- Título -------------------------------------------->

					<h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>

					<!-------------------------------------------- Informações do Post -------------------------------------------->

					<div class="info">
						
						<div class="item">
							<span class="calendario"></span>
							<div class="post_info"><?php the_date(); ?></div>
						</div>
						
						<div class="item">
							<span class="usuario"></span>
							<div class="post_info"><?php the_author(); ?></div>
						</div>
						
						<div class="item">

							<span class="tag"></span>

							<div class="post_info">

								<?php

									// Mostrar as categorias

									$categories = get_the_category();
									$separator = ', ';
									$output = '';
									if($categories){
										foreach($categories as $category) {
											$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
										}
										echo trim($output, $separator);
									}

								?>

							</div>

						</div>

						<div class="item">
							<span class="comentario"></span>
							<div class="post_info"><?php comments_number("0", "1 comentário", "% comentários" ); ?></div>
						</div>

						<div style="clear: both;"></div>
					</div>

					<!-------------------------------------------- Imagem do Post -------------------------------------------->

					<?php if (has_post_thumbnail( $post->ID ) ): ?>
						
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

						<div class="imagem">
							<a href="<?php echo the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
						</div>

					<?php endif; ?>

					<!-------------------------------------------- Resumo do Post -------------------------------------------->

					<div class="post_content">

						<?php the_excerpt(); ?>
						
					</div>
					
				</article>

			<?php endwhile; endif; ?>

			<?php ///////////////////////////////////////////////////////////////////////////////////// Loop do Wordpress ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

</section>

<section class="pagination">
		<div class="container">
			<div class="col-md-8">
				<div class="anteriores"><?php next_posts_link("< Posts mais antigos"); ?></div>
				<div class="posteriores"><?php previous_posts_link("Posts mais recentes >"); ?></div>
			</div>
		</div>
</section>

<!-- Redes Sociais -->

<div class="footer_interno">
	
	<?php get_template_part('sections/footer-blog'); ?>

</div>

<?php get_footer(); ?>