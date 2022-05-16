<?php
  require_once'../../Controleurs/ProduitControleur/readAllproduitControleur.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> chart </title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../../assets/myjs/Chart.min.js" ></script>
	<script type="text/javascript">

	var produitListe = "<?php foreach ($produits as $produit): ?><?=$produit->getStock()."/"?>
		<?php endforeach; ?>";
		var produitDesign = "<?php foreach ($produits as $produit): ?><?=$produit->getDesign()."/"?>
		<?php endforeach; ?>";
		var tableauDesign = produitDesign.split("/");
        var tableau = produitListe.split("/");
        for (i;i<tableau.length-1;i++)
        {
        	tableau[i];
        }
</script>
</head>
<body>
	<div class="container">
		<canvas id="myChart"></canvas>
	</div>
	<script type="text/javascript">
		var x = tableau[3];
		var y = tableauDesign[1];
		let myChar = document.getElementById('myChart').getContext('2d');
		let massPopChart = new Chart(myChart,{
			type :'pie', //bar,horizontalBar,pie,line,doughnut,radar,polarArea
			data:{
				labels:[
				],
				datasets:[{
					label: "CyGarette",
					data:[x,20,30,78,9],backgroundColor:['red','green','aqua','yellow','black']
				}]
			},
			option:{}
		});
	</script>

</body>
</html>
