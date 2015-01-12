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

	var wow = new WOW({
			offset : 100
	});

	//Adicionar os efeitos à todos os parágrafos

	$(".quem-somos p, .servicos p.principal").addClass("wow fadeInRight");

	wow.init();

	/*--------------------------------------------------------------------------------
	| Menu Superior
	--------------------------------------------------------------------------------*/

	//Evitar que os links do Menu principal recarreguem a página
	//e alternar entre os links com a classe "ativo"

	$("ul#menu-principal a").click(function(e){
		
		e.preventDefault();

		$("ul#menu-principal").find("a").removeClass("ativo");

		$(this).addClass("ativo");

	});

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

			$("div.conteudo.servicos").addClass("aberto")


		});

	});

});