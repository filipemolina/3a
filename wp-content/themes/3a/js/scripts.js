//Função que reinicia os parallaxes quando o conteúdo é movido ou redirecionado

function parallaxRestart()
{
	$(window).data('plugin_stellar').destroy();
	$(window).data('plugin_stellar').init();
}

/////////////////// Função executada quando todas as imagens da página são carregadas

jQuery(function(){

	$ = jQuery;

	var largura = $(window).width();

	if(largura < 982)
	{
		$("*").removeClass("fadeInRightBig");
		$("*").removeClass("fadeInLeft");
		$("*").removeClass("fadeInRight");
		$("*").removeClass("zoomIn");
		$("*").removeClass("flipInY");
		$("*").removeClass("flipInX");
		$("*").removeClass("fadeIn");
		$("*").removeClass("wow");
	}

});

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

	//Executar as animações apenas na versão desktop

	var largura = $(window).width();

	if(largura > 981)
	{
		var wow = new WOW({
				offset : 100
		});

		//Adicionar os efeitos à todos os parágrafos

		$(".quem-somos p, .principal p").addClass("wow fadeInRight");

		wow.init();
	}

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
	    
	        scrollTop: $("."+classe_elemento).offset().top - 60
	    
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

		console.log("clicou");

		$("div.conteudo.servicos").stop().animate( { height : "300px" }, 0, "linear", function(){

			//Adicionar a classe "aberto" à div

			$("div.conteudo.servicos").addClass("aberto");

			parallaxRestart();

		});

	});

	/*--------------------------------------------------------------------------------
	| Google Maps
	--------------------------------------------------------------------------------*/

	$("div.contato .bloco a").click(function(){

		//Obter o valor do atributo "data-mapa" do link

		var mapa = $(this).data('mapa');

		//Retirar a classe "ativo" de todos os links

		$(".bloco a").removeClass("ativo");

		//Adicionar a classe "ativo" apenas ao link clicado

		$(this).addClass("ativo");

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

