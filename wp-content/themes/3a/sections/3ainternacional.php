<div class="container-fluid 3ainternacional">
	
	<div class="container">
		
		<div class="row">

		<?php $pagina = get_page_by_title("3A Internacional"); ?>
			
			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2><?php echo $pagina->post_title; ?></h2>
				<div class="borda-azul"></div>
			</div>

			<div class="principal"><p><?php echo apply_filters("the_content", $pagina->post_content); ?></p></div>

		</div>

		<div class="row conteudo-paises">

			<div class="col-sm-4 pais-wrap">

				<div class="item">
					<img class="img-responsive" src="<?php echo bloginfo('template_url') ?>/img/3aInternacional/eua.png" alt="">
				</div>

				<div class="overlay-pais eua">

					<div class="pais">
						EUA
					</div>

					<a class="visitar" href="http://www.3aworldwide.com/" target="_blank">
						VISITAR SITE
					</a>

				</div>

			</div>

			<div class="col-sm-4 pais-wrap">

				<div class="item">
					<img class="img-responsive" src="<?php echo bloginfo('template_url') ?>/img/3aInternacional/mexico.png" alt="">
				</div>

				<div class="overlay-pais mexico">

					<div class="pais">
						MÉXICO
					</div>

					<a class="visitar" href="javascript:void(0)">
						VISITAR SITE
					</a>

				</div>

			</div>

			<div class="col-sm-4 pais-wrap">

				<div class="item">
					<img class="img-responsive" src="<?php echo bloginfo('template_url') ?>/img/3aInternacional/espanha.png" alt="">
				</div>

				<div class="overlay-pais espanha">

					<div class="pais">
						ESPANHA
					</div>

					<a class="visitar" href="javascript:void(0)">
						VISITAR SITE
					</a>

				</div>

			</div>


		</div>

	</div>


</div>