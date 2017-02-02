var tab_paragraphe = []; /* va contenir tous les mots de chacun des paragraphes
tab_paragraphe[0] contiendra les mots du 1er paragraphe
tab_paragraphe[1] contiendra les mots du 2nd paragraphe 
... 
*/

var nombre_paragraphe = 0; // va contenir le nombre de paragraphe dans le texte

var id_premier_mot_paragraphe = []; // va contenir les id des 1er mots de chaque paragraphe

var k = 0; // va permettre de donner un id différent à chaque span

var lecture_paragraphe = []; /* va contenir les id du 1er mot du paragraphe en lecture et celui du prochain paragraphe
On devra donc lire les mots ayant leur id compris entre ces 2 ids */
var index; /* va permettre d'enregistrer dans la variable lecture_paragraphe, l'id qui servira d'intervalle
de fin pour la lecture du paragraphe */

var lecture = false; // indique si on est dans la lecture d'un paragraphe ou non

// var offsetX;
// var offsetY;

function compte_nombre_paragraphe() {
    $('p').each(
        function() {
            nombre_paragraphe = nombre_paragraphe + 1;
        }
    )
}

function ajout_span_et_id() {
    for(var i = 1; i <= nombre_paragraphe; i++) {
        var words = $('#contenu > p:nth-child('+(i+1)+')').text().split(" ");
        tab_paragraphe.push(words);
        $('#contenu > p:nth-child('+(i+1)+')').empty();
        $.each(words, function(j, v) {
            $('#contenu > p:nth-child('+(i+1)+')').append($('<span id="'+k+'">').text(v));
            k++;
            $('#contenu > p:nth-child('+(i+1)+')').append(" ");
        });
    }
}

function determination_id_premier_mot_paragraphe() {
    var nombre = 0;
    id_premier_mot_paragraphe.push(0);
    for(var i = 0; i < nombre_paragraphe; i++) { 
        var n = nombre + tab_paragraphe[i].length;
        id_premier_mot_paragraphe.push(n);
        nombre = n;
    }
}

compte_nombre_paragraphe();
ajout_span_et_id();
determination_id_premier_mot_paragraphe();

function contains(a, obj) {
    for (var i = 0; i < a.length; i++) {
        if (a[i] == obj) {
            index = i;
            return true;
        }
    }
    return false;
}

$("span").mouseover(function() {
    if(lecture == false) {
        if(contains(id_premier_mot_paragraphe, this.id)) {
            $(this).css("color", "blue");
            lecture_paragraphe.push(this.id);
            lecture_paragraphe.push(id_premier_mot_paragraphe[index+1]);
            lecture = true;
        }
    }
    else {
        if(parseInt(this.id) > parseInt(lecture_paragraphe[0]) && parseInt(this.id) < parseInt(lecture_paragraphe[1])) {
            $(this).css("color", "blue");
            if(parseInt(this.id) == parseInt(lecture_paragraphe[1] - 2)) {
                $(this).parent().css( "background-color", "green" );
                lecture_paragraphe = [];
                lecture = false;
            } 
        }
    }
    /*var myElement = document.querySelector("[id='" + this.id + "']");
    var position = getPosition(myElement);*/
});


/*function getPosition(el) {
    var xPos = 0;
    var yPos = 0;
 
    while (el) {
        if (el.tagName == "BODY") {
            // deal with browser quirks with body/window/document and page scroll
            var xScroll = el.scrollLeft || document.documentElement.scrollLeft;
            var yScroll = el.scrollTop || document.documentElement.scrollTop;
 
            xPos += (el.offsetLeft - xScroll + el.clientLeft);
            yPos += (el.offsetTop - yScroll + el.clientTop);
        } else {
            // for all other non-BODY elements
            xPos += (el.offsetLeft - el.scrollLeft + el.clientLeft);
            yPos += (el.offsetTop - el.scrollTop + el.clientTop);
        }
 
        el = el.offsetParent;
    }
    return {
        x: xPos,
        y: yPos
    };
};

window.addEventListener("scroll", updatePosition, false);
window.addEventListener("resize", updatePosition, false);

function updatePosition(myElement) {
    position = getPosition(myElement);
}*/