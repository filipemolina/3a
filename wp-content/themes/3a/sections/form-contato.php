<?php $pagina = get_page_by_title('Contato'); ?>

<div class="container-fluid form-contato">
		
	<?php echo apply_filters("the_content", $pagina->post_content); ?>	

</div>

<div class="container trabalhe-conosco">
	<p class="negrito">Trabalhe Conosco</p>
	<p class="email"><a href="mailto:curriculum@3aworldwide.com.br">curriculum@3aworldwide.com.br</a></p>
</div>