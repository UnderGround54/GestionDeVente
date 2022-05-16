$(document).ready(function(){
	chargePage();

});
function chargePage(){
	$.get("listeClientFact.php",function(res){
		$("#idValeur").html(res);
		$(".cli").change(function(){
			chargeVisiteurs($(this).val());
		});
	});
}; 

function chargeVisiteurs(idN){
	$.get("factureCli.php?res="+idN,function(res){
			$("#idChamp").html(res);
			
	});
}; 