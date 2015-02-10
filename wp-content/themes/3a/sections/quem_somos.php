<div class="container-fluid">
	<div class="container quem-somos">
		<div class="row">

			<?php //Obter o conteúdo da página "Quem Somos" ?>

			<?php $quem_somos = get_page_by_title('Quem Somos'); ?>
	
			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2><?php echo $quem_somos->post_title; ?></h2>
				<div class="borda-azul"></div>
			</div>	

			<?php //Formatar o conteudo de $quem_somos->post_content de acordo com os filtros em 'the_content' (adiciona tags Html, etc...) ?>

			<?php echo apply_filters( 'the_content', $quem_somos->post_content ); ?>

		</div>
	</div>
</div>