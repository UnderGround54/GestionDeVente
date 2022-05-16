
<!DOCTYPE html>
<html>
<head>
<title>Gestion De Vente | Acceuil</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li>
				 				<a href=""><?php $timezone = 3 ;echo date('d/m/y H:i:s', time() + 3600*($timezone+date("I")));?></a>
			  			</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
</div>
  <div id="navarea">
    <nav class="navbar navbar-default " role="navigation" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse" >
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="../../index.php" class="current">Acceuil</a></li>
						<li class="dropdown"><a href="../../Views/ClientView/ReadAllClient.php" class="" data-toggle="dropdown" role="button" aria-expanded="false">Clients</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="../../Views/ClientView/ReadAllClient.php">Liste Client</a></li>
                <li><a href="../../Views/Lignecommandecli/ReadAllLComCli.php">LIgne de Commande</a></li>
                <li><a href="../../Views/ClientView/ReadAllClient.php#chiffre">chiffre d'affaire Clients</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="../../Views/FournisseurView/ReadAllFrs.php" class="" data-toggle="dropdown" role="button" aria-expanded="false">Fournisseurs</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="../../Views/FournisseurView/ReadAllFrs.php">Liste Fournisseur</a></li>
                <li><a href="../../Views/Lignecommandfrs/readAllComFrs.php">Ligne de commande</a></li>
                <li><a href="../../Views/FournisseurView/ReadAllFrs.php#chiffre">chiffre d'affaire Fournisseur</a></li>
              </ul>
            </li>
						<li class="dropdown"> <a href="../../Views/ProduitView/ReadAllPro.php" class="" data-toggle="dropdown" role="button" aria-expanded="false">Produits</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="../../Views/ProduitView/ReadAllPro.php">Liste Produit</a></li>
                <li><a href="../../Views/ProduitView/ReadAllPro.php#stock">Etat de Stock</a></li>
								<li><a href="../../Views/Lignecommandecli/formfacture.php">Facture</a></li>
              </ul>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</body>
</html>
