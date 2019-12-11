function test() {
	var errors ="";
	if(document.f.nom.value.charAt(0)  < 'A' || document.f.nom.value.charAt(0)  > 'Z'){
		document.getElementById('erreur').innerHTML = "Le nom doit commencer par une lettre Majuscule";
		return false;
		errors += "Le nom doit commencer par une lettre Majuscule <br>";
	}


	if( document.f.phone.value.length != 8){
		document.getElementById('erreur').innerHTML = "Numéro de téléphone erroné";
		return false;
		errors += "Numéro de téléphone erroné <br>";
	}
	var today = new Date();
	var reserv = document.f.date.value;
	if(reserv == "") {
		document.getElementById('erreur').innerHTML = "La date est obligatoire";
		return false;
	}
	var date_reserv = new Date(reserv);
	if(today.toISOString() > date_reserv.toISOString()) {
		document.getElementById('erreur').innerHTML = "Date doit être supérieur à Aujourd'hui";
		return false;
		errors += "Date doit être supérieur à Aujourd'hui <br>";
	}


}