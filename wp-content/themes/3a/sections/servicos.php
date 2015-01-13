<?php

	//Obter os dados da página "Serviços"

	$servicos = get_page_by_title("Serviços");

?>

<div class="container-fluid servicos">
	
	<div class="container">
		
		<div class="row principal">
			
			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2><?php echo $servicos->post_title; ?></h2>
				<div class="borda-azul"></div>
			</div>

			<?php echo apply_filters("the_content", $servicos->post_content); ?>

		</div>

		<!-- Menu -->

		<div class="row abas">
			
			<div class="col-sm-3">
				<div class="item midia" data-texto="midia">
					<div class="icone"></div>
					<div class="caption">MÍDIA</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="item relacoes" data-texto="relacoes">
					<div class="icone"></div>
					<div class="caption">RELAÇÕES PÚBLICAS</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="item digital" data-texto="digital">
					<div class="icone"></div>
					<div class="caption">DIGITAL</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="item criacao" data-texto="criacao">
					<div class="icone"></div>
					<div class="caption">CRIAÇÃO</div>
				</div>
			</div>

		</div>

	</div>

	<div class="espacamento"></div>

</div>

<div class="conteudo servicos container-fluid">

	<div class="container">
			
		<div class="texto midia">

			<?php

				//Obter os serviços da categoria Mídia
				
				$args = array(
					'post_type' => 'servico',
					'post_status' => 'publish',
					'category_name' => 'midia'
				); 

				$query = new WP_Query($args);
				$i = 0;

				//Obter a categoria

				$midia = get_category_by_slug('midia');

			?>

			<!-- Imagem da seta -->

			<div class="seta">
				<img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt="">
			</div>

			<!-- Descrição da categoria -->

			<p class="fadeIn animated"><?php echo $midia->description; ?></p>

			<!-- Lista de serviços dessa categoria -->
	
			<div class="lista-servicos">

				<ul class="fadeIn animated">
						
					<?php while($query->have_posts()) : $query->the_post(); ?>

						<li><?php echo the_title(); ?></li>

					<?php endwhile; ?>

				</ul>

			</div>

		</div>

		<div class="texto relacoes">

			<?php

				//Obter os serviços da categoria Relações Públicas
				
				$args = array(
					'post_type' => 'servico',
					'post_status' => 'publish',
					'category_name' => 'relacoes-publicas'
				); 

				$query = new WP_Query($args);
				$i = 0;

				//Obter a categoria

				$relacoes = get_category_by_slug("relacoes-publicas");

			?>

			<!-- Imagem da seta -->

			<div class="seta">
				<img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt="">
			</div>

			<!-- Descrição da categoria -->

			<p class="fadeIn animated"><?php echo $relacoes->description; ?></p>

			<!-- Lista de serviços desta categoria -->

			<div class="lista-servicos">

				<ul class="fadeIn animated">

					<?php while($query->have_posts()) : $query->the_post(); ?>

						<li><?php echo the_title(); ?></li>

					<?php endwhile; ?>

				</ul>

			</div>

		</div>

		<div class="texto digital">

			<?php

				//Obter os serviços da categoria Digital
				
				$args = array(
					'post_type' => 'servico',
					'post_status' => 'publish',
					'category_name' => 'digital'
				); 

				$query = new WP_Query($args);
				$i = 0;

				//Obter a categoria

				$digital = get_category_by_slug("digital");

			?>

			<!-- Imagem da seta -->

			<div class="seta">
				<img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt="">
			</div>

			<!-- Descrição da categoria -->

			<p class="fadeIn animated"><?php echo $digital->description; ?></p>

			<!-- Lista de serviços desta categoria -->

			<div class="lista-servicos">
				
				<ul class="fadeIn animated">
				
					<?php while($query->have_posts()) : $query->the_post(); ?>

						<li><?php echo the_title(); ?></li>

					<?php endwhile; ?>

				</ul>

			</div>

		</div>

		<div class="texto criacao">

			<?php

				//Obter os serviços da categoria Digital
				
				$args = array(
					'post_type' => 'servico',
					'post_status' => 'publish',
					'category_name' => 'criacao'
				); 

				$query = new WP_Query($args);
				$i = 0; 

				//Obter a categoria

				$criacao = get_category_by_slug("criacao");

			?>

			<!-- Imagem da seta -->

			<div class="seta">
				<img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt="">
			</div>

			<!-- Descrição da categoria -->

			<p class="fadeIn animated"><?php echo $criacao->description; ?></p>

			<!-- Lista de serviços desta categoria -->

			<div class="lista-servicos">
				
				<ul class="fadeIn animated">
					
					<?php while($query->have_posts()) : $query->the_post(); ?>

						<li><?php echo the_title(); ?></li>

					<?php endwhile; ?>

				</ul>

			</div>

		</div>

	</div>

</div>