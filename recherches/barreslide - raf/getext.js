

function go() {
		// lancement des fonctions avec les paramètres correspondant
		// à chaque curseur
		draggable (1,"#cursor1", "#p1", 'triste');
		draggable (2,"#cursor2", "#p2", 'sentimental');
		draggable (3,"#cursor3", "#p3", 'roque');
		draggable (4,"#cursor4", "#p4", 'régulier');


function draggable(number,cursor, p, feeling) {


// fonction draggable avec jquery, su l'axe X
$( cursor ).draggable({ axis: "x" , containment: "parent" });

// À chaque fois que la division est draggée
$( cursor ).on( "drag", function( event, ui ) {


var posx = $(cursor).css("left"); //position en pixel :
var posx = posx.replace('px', ''); //enlever le 'px'
var posx = posx/19.2; // la position passe de 0->192 à 0->10
var posx = Math.floor(posx); // on enlèvre la partie décimale


// On écrit la variable dans le paragraphe correspondant
$(p).html(feeling + ' : '+ posx);

} );
 	





};

};
