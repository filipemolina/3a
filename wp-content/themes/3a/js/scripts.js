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
        start : function()
        {
        	$.stellar();
        }
    });

	/*---------------------------------
	| Plugin Stellar.js de Parallax
	---------------------------------*/

	/*------------------------------------------------------------------------------
	| Plugin para mostrar elementos apenas quando entrarem na tela
	------------------------------------------------------------------------------*/

	var wow = new WOW({
			offset : 100
	});

	//Adicionar os efeitos à todos os parágrafos

	$(".quem-somos p").addClass("wow fadeInRight");

	wow.init();

	/*---------------------------------
	| Menu Superior
	---------------------------------*/

	//Evitar que os links do Menu principal recarreguem a página
	//e alternar entre os links com a classe "ativo"

	$("ul#menu-principal a").click(function(e){
		
		e.preventDefault();

		$("ul#menu-principal").find("a").removeClass("ativo");

		$(this).addClass("ativo");

	});

	


});