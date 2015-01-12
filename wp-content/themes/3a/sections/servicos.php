<div class="container-fluid servicos">
	
	<div class="container">
		
		<div class="row">
			
			<!-- Título com a barrinha azul -->

			<div class="titulo wow fadeInLeft">
				<h2>Serviços</h2>
				<div class="borda-azul"></div>
			</div>

			<p class="principal">3A Worldwide fornece ideias, informações e planejamento para as marcas em todo o mundo, principalmente na América do Norte,
			América Latina e no Caribe. Com base no sul da Flórida, empregando profissionais de mídia especializados em todas as plataformas.</p>

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

			?>

			<div class="seta">
				<img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt="">
			</div>

			<p>Através da nossa rede mundial de contatos de mídia, temos a capacidade única de obter o máximo de valor do seu orçamento de planejamento de mídia, 
			fazendo com que nossos clientes atinjam diretamente seu público-alvo. Nossas estratégias se adaptam às necessidades de cada cliente. A partir do 
			departamento de planejamento de mídia, desenvolvemos planos usando a mídia mais adequada para atingir sua meta. Analizamos o mercado e selecionamos, 
			entre todas as possibilidades (tv, rádio, imprensa, revistas, internet e outros), a melhor opção para você. Na 3A Worldwide estamos sempre atualizados 
			para que possamos implementar as estratégias de acordo com a situação de mídia atual.</p>
	
			<div class="lista-servicos">

				<ul>
						
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

			?>

			<div class="seta">
				<img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt="">
			</div>

			<p>Oferecemos uma lista de serviços de relações públicas e eventos que atravessam fronteiras tanto para líderes de mercado quanto para clientes diretos. 
			Somos especializados em diversas áreas, com profissionais trazendo uma experiência valiosa para cada uma de nossas especialidades. Como uma das 
			principais empresas de relações públicas da América Latina, estamos prontos com um conjunto de habilidades para trazer especialização ao seu projeto, 
			seja ele gestão de crises ou gestão de eventos.</p>

			<div class="lista-servicos">

				<ul>

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

			?>

			<div class="seta">
				<img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt="">
			</div>

			<p>Reconhecemos que a mídia digital é uma parte crucial da estratégia de marketing, em particular no que diz respeito a novas marcas. Somos uma equipe 
			apaixonada, criativa e experiente, disposta a alcançar o maior número de visitar nos websites dos nossos clientes. Por essa razão escutamos 
			cuidadosamente os nossos clientes, os entendemos. Criamos, desenvolvemos e implementamos uma estratégia digital e medimos os resultados. Não podemos 
			esquecer que a Internet é mais do que tecnologia. É um tipo de comunicação, interação e organização social que nos informa e abre novos caminhos e 
			possibilidades.</p>

			<div class="lista-servicos">
				
				<ul>
				
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

			?>

			<div class="seta">
				<img src="<?php echo bloginfo('template_url') ?>/img/seta.png" alt="">
			</div>

			<p>Do departamento criativo da 3A Worldwide, gerenciamos a comunicação gráfica e audiovisual através do desenvolvimento de um estudo cuidadoso e 
			detalhado de cada cliente para obter sempre os melhores resultados. A imagem é um aspecto essencial da identidade de uma marca. Se for implementada 
			corretamente, ela ajuda no desempenho da empresa e consegue uma maior aceitação dos seus produtos.</p>

			<div class="lista-servicos">
				
				<ul>
					
					<?php while($query->have_posts()) : $query->the_post(); ?>

						<li><?php echo the_title(); ?></li>

					<?php endwhile; ?>

				</ul>

			</div>

		</div>

	</div>

</div>