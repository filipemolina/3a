jQuery(document).ready(function($){

	/*---------------------------------
	| Plugin Stellar.js de Parallax
	---------------------------------*/

	$.stellar();

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