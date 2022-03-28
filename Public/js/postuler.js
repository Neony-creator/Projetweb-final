function verifierCaracteres(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById('mail');
			
	var caracteres = "'";
			
	if(caracteres.indexOf(touche) <= -1) {
		champ.value += touche;
	}
			
}