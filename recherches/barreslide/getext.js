

function go() {
		// lancement des fonctions avec les paramètres correspondant
		// à chaque curseur
		draggable (1, 'triste');
		draggable (2, 'sentimental');
		draggable (3, 'roque');
		draggable (4, 'régulier');
};

function draggable(number, feeling) {

	// fonction draggable avec jquery, su l'axe X
	$("#cursor"+number).draggable({ axis: "x" , containment: "parent" });
	
	// À chaque fois que la division est draggée
	$("#cursor"+number).on( "drag", function( event, ui ) {
		var posx = $("#cursor"+number).css("left"); //position en pixel :
		posx = posx.replace('px', ''); //enlever le 'px'
		posx = posx/19.2; // la position passe de 0->192 à 0->10
		posx = Math.floor(posx); // on enlèvre la partie décimale
		
		$("#slide"+number).css("background","linear-gradient(to right, rgb(231,197,234) 50%,rgb(168,229,248) 100%)"); //position en pixel :
		
		// On écrit la variable dans le paragraphe correspondant
		$("#p"+number).html(feeling + ' : '+ posx);
		
		} );
	};
