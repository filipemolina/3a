<?php $pagina = get_page_by_title('Contato'); ?>

<div class="container-fluid contato">
		
	<?php echo apply_filters("the_content", $pagina->post_content); ?>	

</div>