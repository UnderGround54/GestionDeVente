 function surligne(champ,erreur)
 {
 	if(erreur){
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
 function verifFormfrs(f)
 {
 	var codecliOK=verifcode(f.codefrs);
 	var nomcliOK=verifpseudo(f.nomfrs);
 	var addressOk=verifpseudo(f.adressefrs);
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
 	var nomcliOK=verifpseudo(f.codefrs);
 	var addressOk=verifpseudo(f.adressefrs);
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
 	var numcomcliOk=verifNum(f.nomfrs);
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