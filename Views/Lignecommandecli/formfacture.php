<!DOCTYPE html>
<html>
<head>
	<title>facture | CLIENT</title>
	<script type="text/javascript" src="../../assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../assets/myjs/jsfacture.js"></script>
	<script type="text/javascript">
		function printFacture(element){
			var page = document.body.innerHTML;
			var imprimer = document.getElementById(element).innerHTML;
			document.body.innerHTML =  imprimer;
			window.print();
			document.body.innerHTML = page;
		}
	</script>	
</head>
<body onload="chargepage()">
	<?php require_once'../../assets/include/Entete.php'; ?>
	<section id="mainContent" style="min-height: 507px;">
    	<div class="content_middle">
       		<div class="col-lg-12">
        		<div class="content_bottom_middle">
            		<div class="single_category wow fadeInDown">
              			<h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"><div class="glyphicon glyphicon-file"></div> facture</a> </h2>
          					<div class="well">
          						<div class="form-group">
          						<div class="">
          							<button onclick="printFacture('facture');" class="btn btn-primary" style="margin-top: 2%; margin-left: 1%;"> <div class="glyphicon glyphicon-print"></div> IMPRIMER
									</button>
          						</div>
          						<br>
								<div class="col-lg-3">
									<label for="" class="control-label">Numéro du client :</label>
									<div id="idValeur"></div>
								</div>
								</div>
						<div id="facture"  margin-top: 2%;">	
									<br>
									<br>
									<br>
							<div style="margin-top: 2%;">
								<div id="idChamp" class="champ">
									<?php require_once'factureCli.php'; ?>
		 						</div>
							</div>
							<p style="margin-left: 90%">signature</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

	<?php require_once'../../assets/include/footer.php'; ?>
</body>
</html>