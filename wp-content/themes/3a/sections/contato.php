<div class="container-fluid contato">

	<div class="container">

		<div class="titulo wow fadeInLeft">
			<h2>Contato</h2>
			<div class="borda-azul"></div>
		</div>

		<div class="row">

			<?php 

				$args = array(
					'post_type' => 'escritorios',
					'post_status' => 'publish',
					'posts_per_page' => -1
				);

				$query = new WP_Query($args);

				if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); 

			?>

				<div class="bloco rio-de-janeiro col-md-4 col-sm-4">

					<img src="<?php echo types_render_field('imagem-do-escritorio', array('raw' => 'true')); ?>" alt="">

					<p><?php echo types_render_field('endereco-um', array('raw' => 'true')); ?></p>
					<p><?php echo types_render_field('endereco-dois', array('raw' => 'true')); ?></p>
					<p><?php echo types_render_field('endereco-tres', array('raw' => 'true')); ?></p>
					<p><span><img src="<?php echo bloginfo('template_url'); ?>/img/contato/telefone.png" alt=""></span><?php echo types_render_field('telefone-escritorio', array('raw' => 'true')); ?></p>

					<a class="btn-mapa" data-mapa="<?php echo types_render_field('slug-do-escritorio', array('raw' => 'true')); ?>" id="element1" onClick="" href="javascript:void(0)">COMO CHEGAR</a>
					
				</div>

			<?php 

			endwhile; endif; 

			// Resetar a query e começar novamente o loop

			wp_reset_query(); ?>

		</div>

	</div>

</div>

<div class="container-fluid mapa-contato">

	<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post();  ?>

		<?php 

			// Limpar a variável 'link-google-maps' para obter apenas o valor da propriedade src, e não todo o conteúdo da tag iframe.

			$link_mapa = types_render_field('link-google-maps', array('raw', 'true'));

			$link_mapa = str_replace('<iframe src="', '', $link_mapa);

			$link_mapa = explode('"', $link_mapa)[0];

		?>

		<iframe class="google-map <?php echo types_render_field('slug-do-escritorio', array('raw' => 'true')); ?>" src="<?php echo $link_mapa; ?>" width="100%" height="405" frameborder="0" style="border:0"></iframe>

	<?php endwhile; endif; ?>

</div>
