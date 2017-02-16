        $("#dummy").css("color","green");
        $("span input").not($("#readModeButton")).css("visibility", "hidden");

         var socket;

         //Outdated array names, not last ten, but last cursorUpdateRate
         var lastLeftX = [];
         var lastLeftY = [];
         var lastRightX = [];
         var lastRightY = [];

         var CursorMeanBufferSize = 60;
         var offsetX= 0;
         var offsetY= 0;

         var displayBoundingBox;
         var spanWordClassName = "word";
         var keepTrace = false;

         var viewRangeMode = false;
         var readMode = false;
         var updateFunc = null;

         var readModeTime = 100;
         var wordsReaden = [];


         function init(){

                 displayBoundingBox = false;
                 window.onmousemove = update;
                 fontsizeinput = document.getElementById('text-size-input');
                 txt = document.getElementById('words');
                 fontsizeinput.value = parseFloat(window.getComputedStyle(txt, null).getPropertyValue('font-size'));
         }


         $(document).ready(function(){

             window.onmousemove = function(e){
                 offsetX = -1 * (e.clientX-e.screenX);
                 offsetY = -1 * (e.clientY-e.screenY);
             };
             socket = io("http://localhost:3000");

             function update() {

                 socket.emit('updateRequest', $('#m').val());
                 $('#m').val('');
                 return false;

             }

             setInterval(update, 1);//Ask server for update every 1ms
             setInterval(updateCursor, 1);//Refresh the cursor every "CursorMeanBufferSize" ms


             //When data received from the server
             socket.on('coordinates', function(leftX, leftY, rightX, rightY){
             updateArrays(leftX, leftY, rightX, rightY);
             });

              spanText();


             function updateCursor(){

                var l = document.getElementById('cursorL');
                l.style.position = "absolute";
                l.style.visibility = "hidden";

                var r = document.getElementById('cursorR');
                r.style.position = "absolute";
                r.style.visibility = "hidden"; 

                var x = document.getElementById('cursor');
                x.style.position = "absolute";
                x.style.visibility = "hidden"; 


                var averageLeftX = 0;
                var averageLeftY = 0;
                var averageRightX = 0;
                var averageRightY = 0;


                for(i=0 ; i < lastLeftX.length ; i++)
                    averageLeftX += lastLeftX[i];

                for(i=0 ; i < lastLeftY.length ; i++)
                    averageLeftY += lastLeftY[i];

                averageLeftX = averageLeftX/lastLeftX.length;
                averageLeftY = averageLeftY/lastLeftY.length;

                var leftX = averageLeftX*screen.width-offsetX;
                var leftY = averageLeftY*screen.height-offsetY;
                l.style.left = (leftX)+window.pageXOffset+'px';
                l.style.top = (leftY)+window.pageYOffset+'px';


                for(i=0 ; i < lastRightX.length ; i++)
                    averageRightX += lastRightX[i];

                for(i=0 ; i < lastRightY.length ; i++)
                    averageRightY += lastRightY[i];

                averageRightX = averageRightX/lastRightX.length;
                averageRightY = averageRightY/lastRightY.length;

                var rightX = averageRightX*screen.width-offsetX;
                var rightY = averageRightY*screen.height-offsetY;
                r.style.left = (rightX)+window.pageXOffset+'px';
                r.style.top = (rightY)+window.pageYOffset+'px';

                var avgLRX = (rightX+leftX)/2;
                var avgLRY = (rightY+leftY)/2;
                x.style.left = (avgLRX)+window.pageXOffset+'px';
                x.style.top = (avgLRY)+window.pageYOffset+'px';

         //Update coordinates displaying
                /*$('#right').empty().append($('<li>').text("Right Eye : x : "+averageRightX+"   y :  "+averageRightY));
                $('#left').empty().append($('<li>').text("Left Eye : x : "+averageLeftX+"   y :  "+averageLeftY));
                */
         if(updateFunc != null)
            updateFunc(avgLRX,avgLRY);
            };


         function updateArrays(leftX, leftY, rightX, rightY){

         if((leftX == 0. || leftY == 0.) && (rightX == 0. || rightY == 0.))
             return;
         if(leftX == 0. || leftY == 0.){
             leftX = rightX;
             leftY = rightY;
         }
         if(rightX == 0. || rightY == 0.){
             rightX = leftX;
             rightY = leftY;
         }

                 lastLeftX.unshift(leftX);
                 lastLeftY.unshift(leftY);

                 if(lastLeftX.length>CursorMeanBufferSize){

                     tmp = [];
                     for(i=0 ; i < CursorMeanBufferSize ; i++)
                         tmp.push(lastLeftX[i]);

                     lastLeftX = tmp;
                 }

                 if(lastLeftY.length>CursorMeanBufferSize){

                     tmp = [];
                     for(i=0 ; i < CursorMeanBufferSize ; i++)
                         tmp.push(lastLeftY[i]);

                     lastLeftY = tmp;
                 }



                 lastRightX.unshift(rightX);
                 lastRightY.unshift(rightY);

                 if(lastRightX.length>CursorMeanBufferSize){

                     tmp = [];
                     for(i=0 ; i < CursorMeanBufferSize ; i++)
                         tmp.push(lastRightX[i]);

                     lastRightX = tmp;
                 }

                 if(lastRightY.length>CursorMeanBufferSize){

                     tmp = [];
                     for(i=0 ; i < CursorMeanBufferSize ; i++)
                         tmp.push(lastRightY[i]);

                     lastRightY = tmp;
                 }
         }


         });



     /*********-------- FONCTIONS -----------**********/


     function distToElement(x, y, e){
         var rect = e.getBoundingClientRect();
         var avX = (rect.left+rect.right)/2;
         var avY = (rect.top+rect.bottom)/2;

         return Math.sqrt((avX-x)*(avX-x) + (avY-y)*(avY-y));

     }

     function triggerDisplayBoundingBox(butt) {
         if(displayBoundingBox){
         displayBoundingBox = false;
         butt.value = butt.value.replace("ON", "OFF");
         removeAllBoundingBoxes();
         }
         else{
         displayBoundingBox = true
         butt.value = butt.value.replace("OFF", "ON");
         addBoundingBoxes();
         }
     }


     function setFontSize(s) {
         txt = document.getElementById('words');
         txt.style.fontSize = s+"px";
         if(displayBoundingBox){
         removeAllBoundingBoxes();
         addBoundingBoxes();

         }
     }

     function setReadModeTime(s){
         readModeTime = s;
     }

     function setCursorMeanBufferSize(s){
         CursorMeanBufferSize = s;
     }

     function unspanText() {
         removeAllBoundingBoxes();
         txt = document.getElementById('words');
         txt.innerHTML = txt.innerText.replace("&nbsp;", " ");
     }
        
        var counterWord = 0;
        var phrase;
        var mot_phrase = [];
        var nombre_paragraphe = 0;
        var lecture = false;
        var lecture_mot = [];
        var id_debut_Paragraphe = [];
        var numero_id = 0;
        var index;
        var Liste_Mot_Position = []; // il va contenir chaque mot, avec leur position left et top, leur hauteur, leur largeur et leur id
        var wordsPerParagraph = [];
        var whichParagraph = [];

     function spanText() {
        // ICI ON TRANSFORME TOUS LES "WORD" EN "<span id="word"> WORD </span>"
        txt = document.getElementById('words');
        txt.innerHTML = txt.innerText;
        str = txt.innerHTML;
        str2 = str;
        str2 = str.replace("&nbsp;", " ");
        str2 = str2.replace(/\w+/g, "<span class=\""+spanWordClassName+"\">$&</span>");
        txt.innerHTML = str2;

        // ON RAJOUTE LE TOUT DANS UN P, POUR LA MISE EN PLACE DE LA LECTURE PHRASE PAR PHRASE
        document.getElementById("words").innerHTML = '<p id="texte">' + $("#words").html() + '</p>';

        p = $("#texte").html();
        var debut = 0;
        var texte;
        $("#texte").empty();

        // ON SEPARE LE GROS PARAGRAPHE EN PLUSIEURS PETITS EN FONCTION DES RETOUR CHARIOTS
            var idP = "p1";
        for(var i = 0; i < p.length; i++) {
            if(p[i] == '\n') {
                texte = p.substring(debut, i);
                $("#texte").append($('<p id="'+idP+'"></p>').html(texte));
                debut = i + 1;
            idP = "p" + (parseInt(idP.slice(1,idP.length)) + 1);
            }
        }

        for(var i = 0 ; i <= $("#texte p").length; i++)
        {
            var count = 0;
            whichParagraph.push("p"+i);
            $("#p"+i+" span").each(function(){
                count+=1;
            });
            wordsPerParagraph.push(count);
        }
        /*wordsPerParagraph.splice(0,1);*/

       /* phrase = $('#texte p').text().replace("?", ".").replace("...", ".").replace("!", ".").split(".");
        
        // Pour enlever les espaces qui apparaissent ocasionnellement en début de phrase 
        for(var i = 0; i < phrase.length; i++) {
            if(phrase[i].charAt(0) == ' ') {
                phrase[i] = phrase[i].substring(1, phrase[i].length);
            }
        }*/
        
        //mot_phrase va contenir les différentes phrases du texte, avec le point à la fin, pour permettre 
        //un arrêt. C'est un tableau de string.
        
        /*for(var i = 0; i < phrase.length; i++) {
            mot_phrase[i] = phrase[i].split(" ");
        }*/

        // COMPTE NOMBRE DE PARAGRAPHES

        

        /*for(var i = 0; i < phrase.length; i++) {
            numero_id = numero_id + mot_phrase[i].length;
            id_debut_Paragraphe.push(numero_id);
        }
*/
        // POUR CHACUN DES SPAN DE CLASS "WORD" ON LEUR ATTRIBUT UN ID ET UNE VALEUR INCREMENTEE
        var nbId = 0;
        
        $(".word").each(function(){
            if( $(this) != "." && $(this) != "!" && $(this) != "?" && $(this) && "..."){
                Liste_Mot_Position.push(nbId);
                $(this).attr("id",nbId);
                nbId++;
            }
        });


/*
         // FUNCTION DETERMINATION DEBUT ID PHRASE
        $("#texte p span:first-child").each(function()
        {
            id_debut_Paragraphe.push(parseInt($(this).attr("id")));
        });
        id_debut_Paragraphe.push(parseInt($("#texte p:last-child span:last-child").attr("id"))-1);
*/

        /*id_debut_Paragraphe.push(parseInt($("#texte p:last-child span:last-child").attr("id"))+1);
        console.log(id_debut_Paragraphe); */

        // SI ON A CHECKE LE BOUTON REBORD ALORS ...
        if(displayBoundingBox)
           addBoundingBoxes();
     }
 
//********** FONCTIONS POUR CONSTRUCTIONS PHRASES ET PARAGRAPHES ***********//

    function contains(a, obj) {
        for (var i = 0; i < a.length; i++) {
            if (a[i] == obj) {
                index = i;
                return true;
            }
        }
        return false;
    }

    function phraseDone(debut, fin, paragraph) {
        for(var i = debut; i < fin; i++) {
            $('#' + i).css("color", "green");
        }
    }
     

//_________ FIN DES FONCTIONS POUR CONSTRUCTIONS PHRASES ET PARAGRAPHES _________//

     function removeAllBoundingBoxes(){
         brects = document.getElementsByClassName("boundingRectDisplay");
         r = [];
         for(i=0; i< brects.length; i++){
         r[i] = brects[i];
         }
         for(i=0; i<r.length; i++)
         r[i].parentNode.removeChild(r[i]);
     }

     function addBoundingBoxes(){
         words = document.getElementsByClassName(spanWordClassName);
         for(i=0; i<words.length; i++){
         r = words[i].getBoundingClientRect();
         div = document.createElement("div");
         div.className = "boundingRectDisplay"
         div.style.position = "absolute";
         div.style.left = r.left+"px";
         div.style.top = r.top+"px";
         div.setAttribute("style","position:absolute;left:"+r.left+"px;top:"+r.top+"px;width:"+r.width+"px;height:"+r.height+"px;border:1px solid #000;pointer-events:none;")
         document.body.appendChild(div);
         }
     }

     function handleCheckBox(e){
         keepTrace = !keepTrace;

     }

     function clearWordsColor(){
         txt = document.getElementById("words");

         wList = txt.getElementsByClassName("word");

         for(i=0; i<wList.length; i++){
         wList[i].style.color = "rgb(0,0,0)";
         }
     }

     function clearModes(){
         clearWordsColor();
         updateFunc = null;
         viewRangeMode = false;
         butt = document.getElementById("viewRangeModeButton");
         butt.value = butt.value.replace("ON", "OFF");
         readMode = false;
         butt = document.getElementById("readModeButton");
         butt.value = butt.value.replace("ON", "OFF");
     }

     function triggerViewRangeMode(){

         if(viewRangeMode){
         clearModes();
         }else{
         clearModes();
         viewRangeMode = true;
         butt = document.getElementById("viewRangeModeButton");
         butt.value = butt.value.replace("OFF", "ON");
         updateFunc = updateViewRangeMode;
         }
     }

     function triggerReadMode(){
         if(readMode){
         clearModes();
         }else{
         clearModes();
         readMode = true;
         butt = document.getElementById("readModeButton");
         butt.value = butt.value.replace("OFF", "ON");
         updateFunc = updateReadMode;
         }
     }

     function updateViewRangeMode(x,y){
         distMax = 50;
         words = document.getElementsByClassName("word");

         for(i = 0; i < words.length; i++){
         e = words[i];
         d = distToElement(x, y, e);

         if(parseInt(d) > parseInt(distMax)){
             if(!keepTrace)
             e.style.color = "rgb(100,100,100)";
         }
         else{
             coef = -1* (d - distMax)/distMax;
             colR = Math.round(255 * coef);
             colB = Math.round(255 * (1 - coef));
             e.style.color = "rgb("+colR+",0,"+colB+")";
         }

         }
     }

        
// QUAND LE MODE LECTURE EST ACTIVE 
        var word = null;
        var time = 0;
        var nombre_mot = 0;
        var timerWorking = true;
        var sameParagraph = false;
        
        function updateReadMode(x,y){
            /*var compt = 0;
            var timer = setInterval($('.number,#compteurMot').empty().text(compt = compt + 1),1000);*/
        timerStart();

        parse = true;
        if(word != null){
            if(isInRect(x,y,word.getBoundingClientRect()))
            {
                parse = false;
            }
            else
            {
                d = new Date();
                readTime = d.getTime() - time;
                
                        // SI LE TEMPS QU'ON A PASSE SUR UN MOT EST SUPERIEUR AU TEMPS DONNE        
                if(readTime > readModeTime){
                   
                // ON VERIFIE SI LE MOT EST DANS LA PHRASE EN COURS, SINON ON NE LE CONSIDERE PAS COMME LU
                    for(var i = 0; i < Liste_Mot_Position.length; i++) 
                        {
                            // ON RECUPERE LIDEE DU PARAGRAPHE DANS LEQUEL ON EST
                        var paragrapheActu = $("#"+word.id).parent().attr("id");          

                        if(word.id == Liste_Mot_Position[i]){

                            if(word.style.color != "green"){
                            sameParagraph = verifDebutParagraph(word.id,parseInt(paragrapheActu.slice(1,paragrapheActu.length)));

                            if(sameParagraph == true && lecture == false) {
                                // EST CE QUE LE MOT EN COURS EST DAS LA LISTE DES MOTS DE DEBUT ?
                               
                                /*if(contains(id_debut_Paragraphe, Liste_Mot_Position[i])) {*/
                                    readenYet(i,"red");
                                    lecture_mot.push($("#" + paragrapheActu + " span:first-child").attr("id"));
                                    // ON VERIFIE SI LE MOT CONSIDERE COMME PREMIER N'EST PAS LE DEUXIEME 
                                    /*if(id_debut_Paragraphe[index+1] != parseInt(Liste_Mot_Position[i])+1){*/
                                    lecture_mot.push($("#" + paragrapheActu + " span:last-child").attr("id"));
                                    /*}*/
                                    /*else
                                    {
                                        lecture_mot.push(id_debut_Paragraphe[index+2]);
                                    }*/
                                    // ON ACTIVE LE MODE LECTURE
                                    lecture = true;
                                /*}*/
                                }
                            
                            else {
                                // SI LE MOT LU EST UN MOT DU PARAGRAPHE EN COURS
                                if(parseInt(Liste_Mot_Position[i]) >= parseInt(lecture_mot[0]) && parseInt(Liste_Mot_Position[i]) <= parseInt(lecture_mot[1]))
                                {
                                    readenYet(i,"blue");

                                    // SI ON LIT LE DERNIER MOT ET QU'ON A LU AU MOINS 60% DU PARAGRAPHE ALORS C'EST CONSIDERE COMME LU  
                                    nombre_mot = nombre_mot + 1;
                                    /*console.log(parseInt(nombre_mot / wordsPerParagraph[parseInt(paragrapheActu.slice(1,paragrapheActu.length))] * 100 ));
                                   */
                                   var percentage = parseInt(nombre_mot / wordsPerParagraph[parseInt(paragrapheActu.slice(1,paragrapheActu.length))] * 100);
                                   if ( percentage >= 60 && (word.id == parseInt(lecture_mot[1]) || word.id == parseInt(lecture_mot[1]-1))) 
                                    {
                                        phraseDone(lecture_mot[0], parseInt(lecture_mot[1])+1, paragrapheActu);
                                        lecture_mot = [];
                                        lecture = false;
                                        nombre_mot = 0;
                                        if(verifFinText() == true){
                                            sauvegardeMots();
                                            propositionNouveauTexte();
                                            stopCounter();
                                         }
                                    }

                                    /*if(parseInt(Liste_Mot_Position[i]) == parseInt(lecture_mot[1] - 1)) {
                                        
                                        phraseDone(lecture_mot[0], lecture_mot[1]);
                                        lecture_mot = [];
                                        lecture = false;
                                        nombre_mot = 0;
                                    } */
                                }
                            }
                          }
                        }
                    }

                    // ON COLORIE EN ROUGE LE MOT LU ET ON AFFICHE LE TEMPS QU'ON A MIS A LE LIRE
                    /*console.log("mot lu : \""+word.innerText+"("+readTime+") ms");
                    word.style.color = "rgb(255,0,0)";*/
                }

                word = null;
                time = 0;
            }
        }
         
        if(parse){
             
            txt = document.getElementById("words");
             
            wList = txt.getElementsByClassName("word");
             
            for(i=0; i<wList.length; i++){
                r = wList[i].getBoundingClientRect();
                if(isInRect(x,y,r)){
                    word = wList[i];
                    d = new Date();
                    time = d.getTime();
                    break;
                }
            }
        }
         
    }
    var troisMotsdaffile = [];
    var paragraphdaffile = [];
    function verifDebutParagraph(mot,paragraph){
        var nbmot = 0;
        troisMotsdaffile.push(mot);
        paragraphdaffile.push(paragraph);
        /*console.log("id mot : " + troisMotsdaffile);
        console.log("id paragraphe : " + paragraphdaffile);
*/
        for (var i = 0; i <= troisMotsdaffile.length; i++) {
            if(paragraphdaffile[i] == paragraphdaffile[i+1])
                nbmot+=1;
        }
       /* console.log("nbmot : " + nbmot);
       */ 
        if(nbmot>=4){
            troisMotsdaffile = [];
            paragraphdaffile = [];
            /*console.log("on retourne true");*/
            return true;
        }
        else {
            /*console.log("on retourne false");*/
            return false;
        }
     }
    
    var valueTimer = 0;
    var timer;
    function timerStart(){
        if(timerWorking==true)
        {
        timer = setInterval(
            function(){
                valueTimer++;
                $('#compteurNbSecondes').empty().text(valueTimer + "s");
        }
        ,1000);
        }
        timerWorking = false;
    }
    
    function stopCounter(){
        clearTimeout(timer);
        valueTimer = 0;
    }


    function verifFinText(){
        var interupt = false;

        $("#texte p span").each(function(){
            console.log($(this).text()); 
            if($(this).css("color") != $("#dummy").css("color")){
                interupt = true;
                interuptText = true;
                return false;
            }
            interuptText = false;
        });
        if(interuptText == true)
        {
            return false;
        }
        else{
            return true;
        }
    }

    function sauvegardeMots(){
        var jqxhr = $.post( "saveWords.php", function() {
          console.log( "success" );
        })
          .done(function() {
            console.log( "second success" );
          })
          .fail(function() {
            console.log( "error" );
          })
          .always(function() {
            alert("L'ensemble des mots que vous avez lu dans ce texte ont bien été enregistrés !")
            console.log( "finished" );
          });
    }

    function propositionNouveauTexte(){

    }

    function importText(){
        $.ajax({
            url : "C:/Users/jeremy/Cours/EyeTracker/Demo/See-To-Learn/texte1.txt",
            dataType: "text",
            type: "GET",
            async: true,
            success : function (data) {
                $("#words").empty();
                $("#words").html(data);
            }
        });
    }

    function isInRect(x,y,r){
         if(x < r.left || x > r.left+r.width || y < r.top || y > r.top+r.height)
         return false;
         return true;
     }

     function readenYet(i,color){/*
        $('#' + Liste_Mot_Position[i]).css("color", color);*/
        $('.lastWord p:nth-child(2)').empty().text(word.innerText);

        // EST CE QUE LE MOT EN COURS A DEJA ETE LU
        if (wordsReaden.indexOf(word.innerText) === -1){
            wordsReaden.push(word.innerText)
            $('#compteurMot').empty().text(wordsReaden.length);
        }
     }
    