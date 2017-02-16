//***************************/
// Menu de la page d'accueil
//***************************/

$(document).ready(function() {

    menuAccueil("concept");
    menuAccueil("comCaMarche");
    menuAccueil("eyetracker");
    menuAccueil("temoignages");
    menuAccueil("twitter");
    menuAccueil("equipe");
    menuAccueil("mentions-legales");

    /* menu user */
    menuUsers("us-tab-bord");
    menuUsers("us-textes");
    menuUsers("us-question");
    menuUsers("us-twitter");
    menuUsers("us-mentions-legales");

    $(".buttonBurger").on( "click", function()
    {
        if( $( ".menu" ).hasClass( "activeMenuUsers" ) && $( ".buttonBurger" ).hasClass( "activeButBurger" ) )
        {
            // Cacher le menu Users a gauche
            $( ".menu" ).removeClass( "activeMenuUsers" );
            $(".buttonBurger").removeClass( "activeButBurger" );
        }else{
            // rendre visible le menu user
            $( ".menu").addClass("activeMenuUsers");
            $(".buttonBurger").addClass( "activeButBurger" );
        }
    })


    // témoignage
    $('#quote-carousel').carousel({
    pause: true, interval: 10000,
    });
    
});


function menuAccueil(element){
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
        $( "."+element).addClass("activeSection").removeClass( "desactiveSection" );

    });
}


//***************************/
//      Menu users
//***************************/

$(".buttonBurger").click(function(){
    $(".buttonBurger__top").toggleClass("buttonBurger__top--active");
    $(".buttonBurger__middle").toggleClass("buttonBurger__middle--active");
    $(".buttonBurger__bottom").toggleClass("buttonBurger__bottom--active");
});

function menuUsers(element){
    $("#"+element).on( "click", function()
    {
        $( ".menu > nav a.activeLink").removeClass( "activeLink" );
        $( ".menu > nav a#"+element).addClass( "activeLink" );
        

    });
}

