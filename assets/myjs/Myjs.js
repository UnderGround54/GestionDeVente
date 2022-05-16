$(document).ready(function(){
	chargePage();

});
function chargePage(){
	$.get("listeFrs.php",function(res){
		$("#idValeur").html(res);
		$("#frs").change(function(){
			chargeVisiteurs($(this).val());
		});
	});
}; 

function chargeVisiteurs(idN){
	$.get("listeAppro.php?res="+idN,function(res){
			$("#idChamp").html(res);
			
	});
}; 