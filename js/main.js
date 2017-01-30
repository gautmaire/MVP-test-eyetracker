//  /* ----------------------------------
//  Vérification position de la souris dans la console
//  ---------------------------------- */
//
/*function mouse_position(event)
{
    console.log("CA MARCHE");
}*/



//  /* ----------------------------------
//          METHODE POUR AVOIR LA POSITION D'UN ELEMENT HTML
//  ---------------------------------- */
//
// jQuery.fn.extend({
//    findPos : function() {
//        obj = jQuery(this).get(0);
//        var curleft = obj.offsetLeft || 0;
//        var curtop = obj.offsetTop || 0;
//        while (obj = obj.offsetParent) {
//                 curleft += obj.offsetLeft
//                 curtop += obj.offsetTop
//        }
//        return {x:curleft,y:curtop};
//    }
// });
//
// $( function() {
//  pos = $('#pTest').findPos();
//  //retourne le coordonnées
//  alert('x : '+pos.x+' / y : '+pos.y);
//
//  pos = $('#span').findPos();
//  //retourne le coordonnées
//  alert('x : '+pos.x+' / y : '+pos.y);
//
//
// });



//  /* ----------------------------------
//      METHODE POUR TRANSFORMER METTRE TOUS LES MOTS DANS UNE SPAN
//  ---------------------------------- */
//
// $( function(){
//  // récupération du texte d'un <p>
//   var chaine = $('#testChaine').text();
//
//  // initialisation de chaque caractère dans une case d'un tableau
//  var tabChaine = new Array();
//  for(var i=0; i<=chaine.length; i++){
//      tabChaine[i] = chaine[i];
//  }
//  alert(tabChaine);
//
//  // Ajout d'une <span> pour le début du texte
//  tabChaine.splice(0,0,"<span>");
//  //
//  for(var i=0; i<=tabChaine.length; i++){
//      // simple côte fonctionne bizarrement
//      if(tabChaine[i] == " " || tabChaine[i] == "," || tabChaine[i] == "(" || tabChaine[i] == ")" || tabChaine[i] == "\""){
//          tabChaine.splice(i,1,"</span> <span>");
//
//      }
//
//  }
//  // Ajout d'une </span> pour la fin du texte
//  tabChaine.splice(tabChaine.lenght+1,0,"</span>");
//  console.log(tabChaine)
//  alert(tabChaine);
//
//
//  // transformation en chaine de charactère après traitement
//  var chaineAfter = "";
//  for(var i=0; i<=tabChaine.length; i++){
//      chaineAfter = chaineAfter+tabChaine[i];
//  }
//
//  alert(chaineAfter);
// });
//
//
//  /* ----------------------------------
// METHODE QUI FONCTION POUR L'AJOUT DES SPAN
//  ---------------------------------- */
//
$( function(){
    var words = $("#testChaine").text().split(" ");
    $("#testChaine").empty();
    $.each(words, function(i, v) {
        $("#testChaine").append($("<span>").text(v));
        $("#testChaine").append(" ");
    });
});


//  /* ----------------------------------
//      METHODE POUR MODIFIER LA COULEUR DE TOUT LES SPAN AU SURVOLE
//  ---------------------------------- */
//
$( function(){
    $("span").mouseover( function(){
        $(this).css("background", "#40A497");
    });

});