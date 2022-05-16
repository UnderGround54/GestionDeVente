<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<script type="text/javascript" src="../../assets/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="../../assets/myjs/Myjs.js"></script>
	</head>
	<body onload="chargepage()">
		<div >
			<label for="" class="control-label">NOM FOURNISSEUR :</label>
			<div id="idValeur"></div>
		</div>
		<div>
			<label for="" class="control-label">LISTE APPROVISIONNEMENT :</label>
			
			<div id="idChamp" class="champ">
				<?php require_once'listeAppro.php'; ?>
			</div>
		</div>
	</body>
	</html>
