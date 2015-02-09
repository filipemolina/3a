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

		$('html, body').animate({
	    
	        scrollTop: $("."+classe_elemento).offset().top - 59
	    
	    }, 1000, "swing", function(){

	    	animando = false;

	    });

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

	var scrollou = false,
	    quem_somos = $(".container.quem-somos").offset().top - 70,
	    premios = $(".container-fluid.premios").offset().top - 70,
	    estrutura = $(".container-fluid.estrutura").offset().top - 70,
	    servicos = $(".container-fluid.servicos").offset().top - 70,
	    portfolio = $(".container-fluid.portfolio").offset().top - 70,
	    internacional = $(".container-fluid.3ainternacional").offset().top - 70,
	    contato = $(".container-fluid.contato").offset().top - 70,
	    body = $("body");

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

		$("div.espacamento").css('height', 0);

		$(this).addClass("ativo");

		//Mostrar apenas o texto do serviço clicado

		$(".servicos .texto").removeClass("ativo");

		$(".servicos .texto." + $(this).data('texto')).addClass("ativo");

		//Animar a altura da div

		$("div.conteudo.servicos").stop().animate( { height : "300px" }, 0, "linear", function(){

			//Adicionar a classe "aberto" à div

			$("div.conteudo.servicos").addClass("aberto");

			parallaxRestart();

		});

	});

	// Seta para fechar a aba de serviços

	$(".seta-fechar").click(function(){

		$("div.conteudo.servicos").css({ height : 0 });

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

		// Obter o nome do cliente para ser aberto

		var cliente = $(this).data('cliente');

		setTimeout(function(){

			// Reduzir a altura da div "portfolio" para a entrada da div com as informações do cliente

			$("div.portfolio").css('height', 0);

			// Adicionar as classes de animação nas divs de informações do cliente e na navegação

			$("div.item-portfolio[data-cliente='"+cliente+"'], div.btn-portfolio").css('display', 'block').removeClass('zoomOutDown animated').addClass('fadeInUp animated');

			// Remover a classe "aberto" de todas as divs e adicionar apenas na div do cliente escolhido

			$("div.item-portfolio").removeClass('aberto');

			$("div.item-portfolio[data-cliente='"+cliente+"']").addClass('aberto');

			scroll('btn-portfolio', 90);

			parallaxRestart();

			setTimeout(function(){

				$("div.item-portfolio[data-cliente='"+cliente+"'], div.btn-portfolio").removeClass('fadeInUp animated');

			}, 1000);

		}, 500);

	});

	// Navegação do portfolio aberto

	$(".btn-portfolio a").click(function(){

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
			// Fechar a div com as informações

			$("div.item-portfolio.aberto, div.btn-portfolio").removeClass("fadeInUp animated").addClass('zoomOutDown animated');

			setTimeout(function(){

				// Mostrar novamente a lista de todos os clientes

				$("div.portfolio").css('height', 'auto').removeClass('fadeOutLeft animated').addClass('fadeInRight animated');

				$('div.item-portfolio, div.btn-portfolio').css('display', 'none').removeClass('zoomOutDown animated aberto');

				parallaxRestart();

			}, 500);
		}

	});

	/*--------------------------------------------------------------------------------
	| Portfolio - Mobile
	--------------------------------------------------------------------------------*/

	$('div.img-portfolio-mobile a').click(function(){

		
		
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

	});

});