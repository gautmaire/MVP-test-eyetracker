$(document).ready(function() {

	clickedFunction("concept");
	clickedFunction("comCaMarche");
	clickedFunction("eyetracker");
	clickedFunction("temoignages");
	clickedFunction("twitter");
	clickedFunction("equipe");
	clickedFunction("mentions-legales");


});


function clickedFunction(element){
	$("#"+element).on( "click", function()
	{
		$( "aside a.activeLink").removeClass( "activeLink" );
		$( "aside a#"+element).addClass( "activeLink" );

		// Cache les sections non selectionner a gauche
		$( "div > section" ).removeClass( "activeSection" ).addClass("desactiveSection");
		
		// ajouter le déplacement du menu a gauche
		$( "div > aside").addClass("activeItem");
		// Cacher les section non selectionner
		$( ".cache" ).addClass("activeCache");

		// rendre visible la section selectionner
		$( "."+element).addClass("activeSection").removeClass( "desactiveSection" );;

	});
}
