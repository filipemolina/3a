<?php

	//Obter os dados da página "Serviços"

	$servicos = get_page_by_title("Serviços");

	$lista_midia = array();
	$lista_relacoes = array();
	$lista_digital = array();
	$lista_criacao = array();

?>

<div class="container-fluid servicos servicos-ativo">
	
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
				<a href="javascript:void(0)" class="seta-fechar"><img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt=""></a>
			</div>

			<!-- Descrição da categoria -->

			<div class="col-md-8">
				<p class="fadeIn animated"><?php echo $midia->description; ?></p>
			</div>

			<!-- Lista de serviços dessa categoria -->
	
			<div class="lista-servicos col-md-4">

				<ul class="fadeIn animated">
						
					<?php while($query->have_posts()) : $query->the_post(); ?>

						<?php 

							// Criar um vetor com os titulos para não ter que fazer a query novamente para o mobile

							$lista_midia[] = get_the_title(); 

						?>

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
				<a href="javascript:void(0)" class="seta-fechar"><img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt=""></a>
			</div>

			<!-- Descrição da categoria -->
			<div class="col-md-8">
				<p class="fadeIn animated"><?php echo $relacoes->description; ?></p>
			</div>

			<!-- Lista de serviços desta categoria -->

			<div class="lista-servicos col-md-4">

				<ul class="fadeIn animated">

					<?php while($query->have_posts()) : $query->the_post(); ?>

						<?php 

							// Criar um vetor com os titulos para não ter que fazer a query novamente para o mobile

							$lista_relacoes[] = get_the_title(); 

						?>

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
				<a href="javascript:void(0)" class="seta-fechar"><img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt=""></a>
			</div>

			<!-- Descrição da categoria -->
			<div class="col-md-8">
				<p class="fadeIn animated"><?php echo $digital->description; ?></p>
			</div>

			<!-- Lista de serviços desta categoria -->

			<div class="lista-servicos col-md-4">
				
				<ul class="fadeIn animated">
				
					<?php while($query->have_posts()) : $query->the_post(); ?>

						<?php 

							// Criar um vetor com os titulos para não ter que fazer a query novamente para o mobile

							$lista_digital[] = get_the_title(); 

						?>

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
				<a href="javascript:void(0)" class="seta-fechar"><img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt=""></a>
			</div>

			<!-- Descrição da categoria -->

			<div class="col-md-8">
				<p class="fadeIn animated"><?php echo $criacao->description; ?></p>
			</div>

			<!-- Lista de serviços desta categoria -->

			<div class="lista-servicos col-md-4">
				
				<ul class="fadeIn animated">
					
					<?php while($query->have_posts()) : $query->the_post(); ?>

						<?php

							// Criar um vetor com os titulos para não ter que fazer a query novamente para o mobile

							$lista_criacao[] = get_the_title();

						?>

						<li><?php echo the_title(); ?></li>

					<?php endwhile; ?>

				</ul>

			</div>

		</div>

	</div>

</div>

<!-- ****************************************************** Versão Mobile ****************************************************** -->

<div class="container-fluid servicos-mobile servicos-ativo">
	
	<div class="container">

		<div class="row principal">
			
			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2><?php echo $servicos->post_title; ?></h2>
				<div class="borda-azul"></div>
			</div>

			<?php echo apply_filters("the_content", $servicos->post_content); ?>

		</div>

		<div class="row">

			<div class="servico midia">
				
				<div class="wrap">
					<div class="icone">
						<img src="<?php echo bloginfo('template_url') ?>/img/servicos/icon_midia.png" alt="" class="icone_1"><div class="midia-text">Mídia</div>
					</div>
					<div style="clear: both"></div>
				</div>

				<div class="texto-categoria">
					<?php echo $midia->description; ?>
				</div>

				<div class="lista-servicos">

					<ul class="fadeIn animated">
							
						<?php foreach ($lista_midia as $item): ?>
							
							<li><?php echo $item; ?></li>

						<?php endforeach ?>

					</ul>

				</div>

			</div>

			<div class="servico relacoes">
				
				<div class="wrap">
					<div class="icone">
					<img src="<?php echo bloginfo('template_url') ?>/img/servicos/icon_rp.png" alt="" class="icone_2"><div class="rp-text">Relações</br>Públicas</div>
					</div>
					<div style="clear: both"></div>
				</div>

				<div class="texto-categoria">
					<?php echo $relacoes->description; ?>
				</div>

				<div class="lista-servicos">

					<ul class="fadeIn animated">
							
						<?php foreach ($lista_relacoes as $item): ?>
							
							<li><?php echo $item; ?></li>

						<?php endforeach ?>

					</ul>

				</div>

			</div>

			<div class="servico digital">
				
				<div class="wrap">
					<div class="icone">
					<img src="<?php echo bloginfo('template_url') ?>/img/servicos/icon_digital.png" alt="" class="icone_3"><div class="digital-text">Digital</div>
					</div>
					<div style="clear: both"></div>
				</div>

				<div class="texto-categoria">
					<?php echo $digital->description; ?>
				</div>

				<div class="lista-servicos">

					<ul class="fadeIn animated">
							
						<?php foreach ($lista_digital as $item): ?>
							
							<li><?php echo $item; ?></li>

						<?php endforeach ?>

					</ul>

				</div>

			</div>

			<div class="servico criacao">
				
				<div class="wrap">
					<div class="icone">
					<img src="<?php echo bloginfo('template_url') ?>/img/servicos/icon_criacao.png" alt="" class="icone_4"><div class="criacao-text">Criação</div>
					</div>
					<div style="clear: both"></div>
				</div>

				<div class="texto-categoria">
					<?php echo $criacao->description; ?>
				</div>

				<div class="lista-servicos">

					<ul class="fadeIn animated">
							
						<?php foreach ($lista_criacao as $item): ?>
							
							<li><?php echo $item; ?></li>

						<?php endforeach ?>

					</ul>

				</div>

			</div>

		</div>

	</div>

</div>