//Função que reinicia os parallaxes quando o conteúdo é movido ou redirecionado

function parallaxRestart()
{
	$(window).data('plugin_stellar').destroy();
	$(window).data('plugin_stellar').init();
}

function scroll(classe_elemento, offset)
{
	// //Scrollar até o elemento clicado

		animando = true;

		$('html, body').animate({
	    
	        scrollTop: $("."+classe_elemento).offset().top - offset
	    
	    }, 1000, "swing", function(){

	    	animando = false;

	    });
}

function proximo(item, grupo, atributo)
{
	if($(item).data(atributo) == $(grupo+":last").data(atributo))
	{
		// Caso esse seja o último item do grupo, retorna o primeiro item

		return $(grupo+":first");
	}
	else
	{
		// Caso contrário, retorna o próximo item do grupo

		return $(item).next(grupo);
	}
}

function anterior(item, grupo, atributo)
{
	if($(item).data(atributo) == $(grupo+":first").data(atributo))
	{
		// Caso esse seja o último item do grupo, retorna o primeiro item

		return $(grupo+":last");
	}
	else
	{
		// Caso contrário, retorna o próximo item do grupo

		return $(item).prev(grupo);
	}
}

/////////////////// Função executada quando todas as imagens da página são carregadas

jQuery(window).load(function(){

	/*----------------------------------------
	| Utilizar a forma mais comum do jQuery
	----------------------------------------*/

	$ = jQuery;

	/*---------------------------------
	| Retirar o Overlay
	---------------------------------*/

	$("div.overlay").addClass('inativo');
	
	window.setTimeout(function(){ 
		$("div.overlay").remove(); 
	}, 500);

	/*------------------------------------------------------------------------------
	| Sliders
	------------------------------------------------------------------------------*/

	$('.flexslider').flexslider({
        animation: "slide",
        prevText : "",
        nextText : "",
        start : function()
        {
        	//Plugin Stellar.js de parallax

        	$.stellar();
        }
    });

	/*------------------------------------------------------------------------------
	| Plugin para mostrar elementos apenas quando entrarem na tela
	------------------------------------------------------------------------------*/

	

	/*------------------------------------------------------------------------------
	| Mapas
	------------------------------------------------------------------------------*/

	//Esconder os mapas quando a página for carregada

	$(".container-fluid.mapa-contato").hide();

	/*--------------------------------------------------------------------------------
	| Menu Superior
	--------------------------------------------------------------------------------*/

	var animando = false;

	//Evitar que os links do Menu principal recarreguem a página
	//e alternar entre os links com a classe "ativo"

	$("ul#menu-principal a").click(function(e){
		
		e.preventDefault();

		//Adicionar a classe ativo

		$("ul#menu-principal").find("a").removeClass("ativo");

		$(this).addClass("ativo");

		//Tratar a propriedade href do link clicado para obter a classe do elemento
		//para o qual se deve scrollar

		var classe_elemento = $(this).attr("href").replace("http://", "");

		// //Scrollar até o elemento clicado

		animando = true;

		scroll(classe_elemento, 59);

		// $('html, body').animate({
	    
	 //        scrollTop: $("."+classe_elemento).offset().top - 59
	    
	 //    }, 1000, "swing", function(){

	 //    	animando = false;

	 //    });

	});

	//Link 3AW do topo

	$("a.navbar-brand").click(function(){

		$("ul#menu-principal").find("a").removeClass("ativo");

		$('html, body').animate({
	        scrollTop: 0
	    }, 1000);

	});

	/*--------------------------------------------------------------------------------
	| Ativar os links do menu superior pela posição da página
	--------------------------------------------------------------------------------*/

	

	$(window).scroll(function(){
		scrollou = true;
	});

	setInterval(function(){

		if(scrollou && !animando)
		{
			scrollou = false;

			if(document.body.scrollTop > 0)
			{
				$("ul#menu-principal a").removeClass('ativo');
			}

			if(document.body.scrollTop > quem_somos)
			{
				$("ul#menu-principal a").removeClass('ativo');
				$("ul#menu-principal a[href*='quem-somos']").addClass("ativo");
			}

			if(document.body.scrollTop > premios)
			{
				$("ul#menu-principal a").removeClass('ativo');
				$("ul#menu-principal a[href*='premios']").addClass("ativo");
			}

			if(document.body.scrollTop > estrutura)
			{
				$("ul#menu-principal a").removeClass('ativo');
				$("ul#menu-principal a[href*='estrutura']").addClass("ativo");
			}

			if(document.body.scrollTop > servicos)
			{
				$("ul#menu-principal a").removeClass('ativo');
				$("ul#menu-principal a[href*='servicos']").addClass("ativo");
			}

			if(document.body.scrollTop > portfolio)
			{
				$("ul#menu-principal a").removeClass('ativo');
				$("ul#menu-principal a[href*='portfolio']").addClass("ativo");
			}

			if(document.body.scrollTop > internacional)
			{
				$("ul#menu-principal a").removeClass('ativo');
				$("ul#menu-principal a[href*='3ainternacional']").addClass("ativo");
			}

			if(document.body.scrollTop > contato)
			{
				$("ul#menu-principal a").removeClass('ativo');
				$("ul#menu-principal a[href*='contato']").addClass("ativo");
			}
		}

	}, 250);

	/*--------------------------------------------------------------------------------
	| Abas de Serviços
	--------------------------------------------------------------------------------*/

	$(".servicos .item").click(function(){

		//Adicionar a classe "Ativo" ao item clicacado

		$(".servicos .item").removeClass("ativo");

		$(this).addClass("ativo");

		//Esconder a div "espaçamento"

		$("div.espacamento").css('height', 0);

		//Mostrar apenas o texto do serviço clicado

		$(".servicos .texto").removeClass("ativo");

		$(".servicos .texto." + $(this).data('texto')).addClass("ativo");

		//Animar a altura da div

		$("div.conteudo.servicos").stop().animate( { height : "300px" }, 0, "linear", function(){

			//Adicionar a classe "aberto" à div

			$("div.conteudo.servicos").addClass("aberto");

		});

		scroll('servicos .abas', 70);

		setTimeout(function(){

			parallaxRestart();

		}, 200);

	});

	// Seta para fechar a aba de serviços

	$(".seta-fechar").click(function(){

		$("div.conteudo.servicos").css({ height : 0 });

		$("div.espacamento").css('height', 120);

		setTimeout(function(){
			$("div.item").removeClass('ativo');
		}, 200);

	});

	/*--------------------------------------------------------------------------------
	| Portfolio
	--------------------------------------------------------------------------------*/

	// Imagens do portfolio fechado

	$("div.img-portfolio a").click(function(){

		// Esconder a Div com o portfólio fechado

		$("div.portfolio").addClass('fadeOutLeft animated');

		// Esconder o botão "Ver Mais"

		$("a.btn-vermais").css('display', 'none');

		// Obter o nome do cliente para ser aberto

		var cliente = $(this).data('cliente');

		setTimeout(function(){

			// Reduzir a altura da div "portfolio" para a entrada da div com as informações do cliente

			$("div.portfolio").css('height', 0);
			$("div.portfolio").css('display', 'none');

			// Adicionar as classes de animação nas divs de informações do cliente e na navegação

			$("div.portfolio-aberto div.item-portfolio[data-cliente='"+cliente+"'], div.portfolio-aberto div.btn-portfolio").css('display', 'block').removeClass('zoomOutDown animated').addClass('fadeInUp animated');

			// Remover a classe "aberto" de todas as divs e adicionar apenas na div do cliente escolhido

			$("div.portfolio-aberto div.item-portfolio").removeClass('aberto');

			$("div.portfolio-aberto div.item-portfolio[data-cliente='"+cliente+"']").addClass('aberto');

			// Rola a página até o elemento especificado. O primeiro argumento é a classe do elemento para o qual se deve rolar
			// o segundo é o offset em pixels com relação ao topo da página

			scroll('portfolio-aberto', 60);

			// Reiniciar o plugin de parallax para evitar que se atinja o limite das imagens

			parallaxRestart();

			// Remover as classes de animação após 1 segundo.

			setTimeout(function(){

				$("div.portfolio-aberto div.item-portfolio[data-cliente='"+cliente+"'], div.portfolio-aberto div.btn-portfolio").removeClass('fadeInUp animated');

			}, 1000);

		}, 500);

	});

	// Navegação do portfolio aberto

	$(".portfolio-aberto .btn-portfolio a").click(function(){

		// Próximo

		if($(this).data('function') == 'next')
		{
			// Esconder o item atual

			$("div.item-portfolio.aberto").addClass('fadeOutLeft animated');

			// Abrir o próximo item

			setTimeout(function(){

				$("div.item-portfolio.aberto").css('display', 'none').removeClass('fadeOutLeft animated');

				// Obter o próximo item da lista

				proximo_item = proximo("div.item-portfolio.aberto", "div.item-portfolio", "cliente");

				// Trocar a classe

				$("div.item-portfolio.aberto").removeClass('aberto');

				// Mostrar o próximo

				$(proximo_item).css('display', 'block').addClass('fadeInRight animated aberto')

				setTimeout(function(){

					$(proximo_item).removeClass('fadeInRight animated');

				}, 1000);

			}, 500);
		}

		// Anterior

		if($(this).data('function') == 'prev')
		{
			// Esconder o item atual

			$("div.item-portfolio.aberto").addClass('fadeOutRight animated');

			// Abrir o item anterior

			setTimeout(function(){

				$("div.item-portfolio.aberto").css('display', 'none').removeClass('fadeOutRight animated');

				// Obter o próximo item da lista

				item_anterior = anterior("div.item-portfolio.aberto", "div.item-portfolio", "cliente");

				// Trocar a classe

				$("div.item-portfolio.aberto").removeClass('aberto');

				// Mostrar o próximo

				$(item_anterior).css('display', 'block').addClass('fadeInLeft animated aberto')

				setTimeout(function(){

					$(item_anterior).removeClass('fadeInLeft animated');

				}, 1000);

			}, 500);
		}

		// Fechar

		if($(this).data('function') == 'close')
		{
			parallaxRestart();

			// Fechar a div com as informações

			$("div.item-portfolio.aberto, div.btn-portfolio").removeClass("fadeInUp animated").addClass('zoomOutDown animated');

			setTimeout(function(){

				// Mostrar novamente a lista de todos os clientes

				$("div.portfolio.desktop").css('height', 'auto').css('display', 'block').removeClass('fadeOutLeft animated').addClass('fadeInRight animated');

				$('div.item-portfolio, div.btn-portfolio').css('display', 'none').removeClass('zoomOutDown animated aberto');

				$("a.btn-vermais").css('display', 'block');

			}, 500);
		}

		scroll('portfolio-aberto', 60);

	});

	// Indica se o portfólio está sendo animado

	var animando = false;

	// Número de linhas para mostrar quando o portfólio estiver fechado

	var linhas = 2;

	// Mostrar todas as peças e cases no portfolio

	$("a.btn-vermais").click(function(){

		console.log("Clicou");

		// Realizar as ações apenas se o portfolio não estiver sendo animado

		if(!animando)
		{
			console.log("Clicou");

			// Obter o status do botão

			var status = $(this).data('status');

			// Qual é a seção deste botão

			var secao = $(this).data('secao');

			// Em qual div está o conteúdo a ser mostrado

			var conteudo = $(this).data('scroll');

			// Caso o portfolio esteja fechado

			if(status == 'fechado')
			{
				animando = true;

				$("div."+conteudo+" div.row.fechada").not('.portfolio-mobile .row').removeClass('fechada').addClass('fadeIn animated');

				$("."+secao+" a.btn-vermais").data('status', 'aberto').html('FECHAR');

				// Remover as classe

				setTimeout(function(){

					$("div."+secao+" div.row").not('.portfolio-mobile .row').removeClass('fadeIn animated');

					animando = false;

					// Reiniciar o parallax
			
					parallaxRestart();

				}, 1000);
			}
			else
			{

				console.log("Clicou");
				
				animando = true;

				$("div."+conteudo+":not('.portfolio-mobile') div.row").slice(linhas).addClass('fadeOut animated');

				$("."+secao+" a.btn-vermais").data('status', 'fechado').addClass('fadeOut animated');

				scroll(conteudo, 50);

				setTimeout(function(){

					$("div."+conteudo+":not('.portfolio-mobile') div.row").removeClass('fadeOut animated').slice(linhas).addClass('fechada');
					$("."+secao+" a.btn-vermais").removeClass('fadeOut animated').html('VER MAIS');

					animando = false;

					// Reiniciar o parallax
			
					parallaxRestart();

				}, 1000);
			}
		}

	});

	$("a.btn-vermais-mobile").click(function(){

		// Obter o status do botão

		var status = $(this).data('status');

		if(!animando)
		{
			if(status == 'fechado')
			{
				animando = true;

				$("div.portfolio-mobile .row.fechada").removeClass('fechada').addClass('fadeIn animated');

				$("div.conteudo-portfolio-mobile .btn-vermais-mobile").data('status', 'aberto').html("FECHAR");

				setTimeout(function(){

					$("div.portfolio-mobile .row").removeClass('fadeIn animated');

					animando = false;

					parallaxRestart();

				}, 1000);
			}
			else
			{
				animando = true;

				$("div.portfolio-mobile .row").slice(2).addClass('fadeOut animated');

				$("div.conteudo-portfolio-mobile .btn-vermais-mobile").data('status', 'fechado').addClass('fadeOut animated');

				scroll('portfolio-mobile', 50);

				setTimeout(function(){

					$("div.portfolio-mobile .row").removeClass('fadeOut animated').slice(2).addClass('fechada');
					$("div.conteudo-portfolio-mobile .btn-vermais-mobile").data('status', 'fechado').html('Ver Mais').removeClass('fadeOut animated');

					animando = false;

					parallaxRestart();

				}, 1000);
			}
		}

	});

	/*--------------------------------------------------------------------------------
	| Portfolio - Mobile
	--------------------------------------------------------------------------------*/

	$('div.img-portfolio-mobile a').click(function(){

		//Rolar até o portfólio aberto

		scroll('parallax.segundo', -400);

		// Esconder a parte externa dos portfólios

		$(".portfolio-mobile").addClass("fadeOut animated");

		// Obter o nome do cliente para ser aberto

		var cliente = $(this).data('cliente');

		setTimeout(function(){

			// Abrir o portfólio

			$(".conteudo-portfolio-mobile .item-portfolio[data-cliente='"+cliente+"']").css('display', 'block').addClass('fadeInUp animated aberto');

			// Mostrar os botões de navegação

			$(".conteudo-portfolio-mobile .btn-portfolio").css('display', 'block').addClass('fadeInUp animated');

			$(".portfolio-mobile").removeClass('fadeOut animated').css('display', 'none');

			// Esconder o botão "Ver Mais"

			$(".btn-vermais-mobile").addClass('fadeOut animated');

			setTimeout(function(){

				$(".conteudo-portfolio-mobile .item-portfolio[data-cliente='"+cliente+"']").removeClass('fadeInUp animated');
				$(".conteudo-portfolio-mobile .btn-portfolio").removeClass('fadeInUp animated');
				$(".btn-vermais-mobile").css('display', 'none').removeClass('fadeOut animated');

				parallaxRestart();			

			}, 1000);

			// Adicionar as classes de animação nas divs de informações do cliente e na navegação

		}, 1000);

	});

	$(".conteudo-portfolio-mobile .btn-portfolio a").click(function(){

		if($(this).data('function') == 'next')
		{
			// Subir a tela

			scroll('conteudo-portfolio-mobile', 70);

			// Esconder o item atual

			$("div.item-portfolio.aberto").addClass('fadeOut animated');

			// Abrir o próximo item

			setTimeout(function(){

				$("div.item-portfolio.aberto").css('display', 'none').removeClass('fadeOut animated');

				// Obter o próximo item da lista

				proximo_item = proximo(".conteudo-portfolio-mobile div.item-portfolio.aberto", ".conteudo-portfolio-mobile div.item-portfolio", "cliente");

				// Trocar a classe

				$("div.item-portfolio.aberto").removeClass('aberto');

				// Mostrar o próximo

				$(proximo_item).css('display', 'block').addClass('fadeIn animated aberto')

				setTimeout(function(){

					$(proximo_item).removeClass('fadeIn animated');

					parallaxRestart();

				}, 1000);

			}, 500);
		}

		if($(this).data('function') == 'prev')
		{
			// Subir a tela
			
			scroll('conteudo-portfolio-mobile', 70);

			// Esconder o item atual

			$("div.item-portfolio.aberto").addClass('fadeOut animated');

			// Abrir o próximo item

			setTimeout(function(){

				$("div.item-portfolio.aberto").css('display', 'none').removeClass('fadeOut animated');

				// Obter o próximo item da lista

				proximo_item = anterior(".conteudo-portfolio-mobile div.item-portfolio.aberto", ".conteudo-portfolio-mobile div.item-portfolio", "cliente");

				// Trocar a classe

				$("div.item-portfolio.aberto").removeClass('aberto');

				// Mostrar o próximo

				$(proximo_item).css('display', 'block').addClass('fadeIn animated aberto')

				setTimeout(function(){

					$(proximo_item).removeClass('fadeIn animated');

					parallaxRestart();

				}, 1000);

			}, 500);
		}

		if($(this).data('function') == 'close')
		{
			$(".conteudo-portfolio-mobile div.item-portfolio").addClass("fadeOut animated").removeClass('aberto');
			$(".conteudo-portfolio-mobile div.btn-portfolio").addClass("fadeOut animated");
			$(".btn-vermais-mobile").css('display', 'block').addClass('fadeIn animated');

			$(".portfolio-mobile").css('display', 'block').addClass("fadeIn animated");

			scroll('parallax.segundo', -400);

			setTimeout(function(){

				$(".conteudo-portfolio-mobile div.item-portfolio").css('display', 'none').removeClass('fadeOut animated');
				$(".conteudo-portfolio-mobile div.btn-portfolio").css('display', 'none').removeClass('fadeOut animated');
				$(".btn-vermais-mobile").removeClass('fadeIn animated');
				$(".portfolio-mobile").removeClass('fadeIn animated');

				parallaxRestart();

			}, 1000);
		}

	});

	/*--------------------------------------------------------------------------------
	| Google Maps
	--------------------------------------------------------------------------------*/

	$("div.contato .bloco a").click(function(){

		if($(this).hasClass('ativo'))
		{
			$(".container-fluid.mapa-contato").slideUp(400);
			$(this).html("COMO CHEGAR");
			$(this).removeClass("ativo");
			scroll('container-fluid.contato', 60);
			return false;
		}

		//Obter o valor do atributo "data-mapa" do link

		var mapa = $(this).data('mapa');

		//Retirar a classe "ativo" de todos os links

		$(".bloco a").removeClass("ativo");
		$(".bloco a").html("COMO CHEGAR");

		//Adicionar a classe "ativo" apenas ao link clicado

		$(this).addClass("ativo");
		$(this).html("FECHAR");

		//Levantar a div do mapa

		$(".container-fluid.mapa-contato").slideUp(400, function(){

			//Esconder todos os mapas
         
			$(".google-map").hide();

			//Mostrar apenas o mapa selecionado

			$("." + mapa).show();

			//Abaixar o mapa

			$(".container-fluid.mapa-contato").slideDown();

		});

		scroll('btn-mapa', 80);

	});

});