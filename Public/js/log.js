function verifierCaracteres(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById('Nom Ville Secteur Nbstagiaire NomE Ville Ddébut Rémunération NBplace');
			
	var caracteres = "'";
			
	if(caracteres.indexOf(touche) <= -1) {
		champ.value += touche;
	}
			
}