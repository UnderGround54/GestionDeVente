<?php
  namespace Produit;
  require_once'../../Modeles/ProduitModele/ProduitManager.php';
  require_once'../../Modeles/ProduitModele/Produit.php';
  USE Produit;
  USE ProduitManager;

  $produitManager = new ProduitManager();
  $produit = $produitManager->readProduit($_GET['codepro']);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update Produit</title>
  <meta charset="utf-8">
 </head>
 <body>
   <?php require_once'../../assets/include/Entete.php'; ?>
   <form class="" action="../../Controleurs/ProduitControleur/updateProduit.php" method="post" style="margin-top : 60px;">
      <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
        <div class="panel panel-info">
          <div class="panel-heading"><h3>Mise à jour d'un Produit</h3></div>
            <div class="panel-body">
              <div class="form-group">

                <label for="" class="control-label">code produit :</label>
                <div class="input-group" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-tree-deciduous"></i></span>
                <input type="text" disabled="" name="codepro" value="<?=$produit->getcodePro()?>" class="form-control">
                </div>

                <label for="" class="control-label">designation :</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                <input type="text" name="design" value="<?=$produit->getDesign()?>" class="form-control">
                </div>

                <label for="" class="control-label"> pu :</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                <input type="text" name="pu" value="<?= $produit->getPu()?>" class="form-control">
                </div>
                <label for="" class="control-label"> Stock :</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                <input type="text" name="stock" value="<?= $produit->getStock()?>" class="form-control">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-warning" style="margin-top: 10px;">ENREGISTRER <span class="glyphicon glyphicon-send"></span></button>
                </div>
                <div class="form-group"><a href="ReadAllPro.php">
                  <button type="" class="btn btn-danger" style="margin-left: 85%;margin-top: -13%;">ANNULER <span class=""></span></button></a>
                </div>
                <input type="hidden" name="codepro" value="<?= $produit->getcodePro()?>">

              </div>
            </div>
          </div>
       </div>
   </form>
   <?php require_once'../../assets/include/footer.php'; ?>
   <script type="text/javascript">
      $("#modalForm").validate({
                  rules: {
                    codepro : {
                      required : true;
                    },
                    design : {
                      required : true;
                    },
                    pu : {
                        required :true;
                    }
                    stock : {
                        required :true;
                    }
          },
        });
   </script>
 </body>
 </html>
