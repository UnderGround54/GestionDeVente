 function surligne(champ,erreur)
 {
 	if(erreur){
 		//champ.style.borderColor="red";
 		champ.style.boxShadow="0.5px 0.5px 0.5px 0.5px red";
 	}	
 	else
 		champ.style.boxShadow="0px 0px 0px 0px";
 }

 function verifpseudo(champ)
 {
 	if(champ.value.length<2||champ.value.length>30)
 	{
 		surligne(champ,true);
 		return false;
 	}
 	else
 	{
 		surligne(champ,false);
 		return true;
 	}
 }
 function verifNum(champ)
 {var regex=/^[0-9]{2,4}$/;
 	if(!regex.test(champ.value))
 	{
 		surligne(champ,true);
 		return false;
 	}
 	else
 	{
 		surligne(champ,false);
 		return true;
 	}
 }
 function verifExist(champ)
 {

 }
 /*function reverif(champ)
 {
champ.style.boxShadow="0px 0px 0px 0px";
 }*/
 function verifcode(champ)
 {
 	var regex=/CL[0-9]{2,4}$/;
 	if(!regex.test(champ.value))
 	{
 		surligne(champ,true);
 		return false;
 	}
 	else
 	{
 		surligne(champ,false);
 		return true;
 	}
 }
 function verifForm(f)
 {
 	var codecliOK=verifcode(f.codecli);
 	var nomcliOK=verifpseudo(f.nomcli);
 	var addressOk=verifpseudo(f.adressecli);
 	if(codecliOK && nomcliOK && addressOk){
 	return true;}
 	else
 	{
 		alert(" veuillez remplir correctement tous les champs");
 		return false;
 	}
 }
 function verifFormUp(f)
 {
 	var nomcliOK=verifpseudo(f.nomcli);
 	var addressOk=verifpseudo(f.adressecli);
 	if(nomcliOK && addressOk){
 	alert("modifié"); 
 	return true;}
 	else
 	{
 		alert(" veuillez remplir correctement tous les champs");
 		return false;
 	}
 }
 function verifDate(champ)
 {
 	var regex=/^[1-9][0-9]{3}-[-9]{2}-[0-9]{2}$/;
 }
 function verifAjout(f)
 {
 	var numcomcliOk=verifNum(f.numcomcli);
 	var dateOK=verifDate(f.date);
 	if(numcomcliOk && dateOK)
 	{
 		return true;
 	}
 	else{
 		alert("veuillez remplir correctement tous les champs");
 		return false;
 	}
 }
 // function verif_integer(champ){

	// 	   	var nombre = new RegExp("[0-9.-]"),verifNb;

	// 	   	for(var x = 0; x < champ.value.length; x++) {

	// 		  	verifNb = nombre.test(champ.value.charAt(x));

	// 		 	if(verifNb == false){

	// 			champ.value = champ.value.substr(0,x);

	// 			alert('Ce champ est obligatoirement en chiffre');
	// 		   }
	// 	   	}
		// } 
