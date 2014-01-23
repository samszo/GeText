

function go() {
		// lancement des fonctions avec les paramètres correspondant
		// à chaque curseur
		draggable (1,"#cursor1", "#p1", 'triste',"#slide1","#pi1", "#compteur1");
		draggable (2,"#cursor2", "#p2", 'sentimental',"#slide2","#pi2", "#compteur2");
		draggable (3,"#cursor3", "#p3", 'rauque',"#slide3","#pi3", "#compteur3");
		draggable (4,"#cursor4", "#p4", 'régulier',"#slide4","#pi4", "#compteur4");


function draggable(number,cursor, p, feeling, slide, pi, compteur) {


// fonction draggable avec jquery, su l'axe X
$( cursor ).draggable({ axis: "x" , containment: "parent" });

// À chaque fois que la division est draggée
$( cursor ).on( "drag", function( event, ui ) {


var posx = $(cursor).css("left"); //position en pixel :
var posx = posx.replace('px', ''); //enlever le 'px'
var posx = posx/20.5; // la position passe de 0->224 à 0->10
var posx = Math.floor(posx); // on enlèvre la partie décimale


// On écrit la variable dans le paragraphe correspondant
$(compteur).html(posx);


} );
 	
 	$(p).html(feeling);





};

};
