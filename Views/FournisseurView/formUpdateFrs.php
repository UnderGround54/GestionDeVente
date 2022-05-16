<?php
  namespace Fournisseur;
  require_once'../../Modeles/FournisseurModele/FournisseurManager.php';
  require_once'../../Modeles/FournisseurModele/Fournisseur.php';
  USE Fournisseur;
  USE FournisseurManager;

  $fournisseurManager = new FournisseurManager();
  $fournisseur = $fournisseurManager->readFournisseur($_GET['codefrs']);
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Gestion De Vente | UPDATE FOURNISSEURS</title>
  <meta charset="utf-8">
 </head>
 <body>
   <?php require_once'../../assets/include/Entete.php'; ?>
   <form class="" action="../../Controleurs/FournisseurControleur/UpdateFournisseur.php" method="post" style="margin-top : 60px;">
      <div class="container spacer col-md-6 col-xs-12 col-md-offset-3>
        <div class="panel panel-info">
          <div class="panel-heading"><h3>Mise à jour d'un Fournisseur</h3></div>
            <div class="panel-body">
              <div class="form-group">

                <label for="" class="control-label">Code Frs :</label>
                <div class="input-group" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" disabled="" name="codefrs" value="<?=$fournisseur->getCodeFrs()?>" class="form-control">
                </div>

                <label for="" class="control-label">Nom Frs :</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" required="" name="nomfrs" value="<?=$fournisseur->getNomFrs()?>" class="form-control">
                </div>

                <label for="" class="control-label"> Adresse :</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" required="" name="adressefrs" value="<?=$fournisseur->getAdresseFrs()?>" class="form-control">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-warning" style="margin-top: 10px;">ENREGISTRER <span class="glyphicon glyphicon-send"></span></button>
                </div>
                <div class="form-group"><a href="ReadAllFrs.php">
                  <button type="" class="btn btn-danger" style="margin-left: 85%;margin-top: -13%;">ANNULER <span class=""></span></button></a>
                </div>
                <input type="hidden" name="codefrs" value="<?=$fournisseur->getCodeFrs()?>">

              </div>
            </div>
          </div>
       </div>
   </form>
   <?php require_once'../../assets/include/footer.php'; ?>
   <script type="text/javascript">
       $("#modalForm").validate({
                  rules: {
                    codefrs : {
                      required : true;
                    },
                    nomfrs : {
                      required : true;
                    },
                    adressefrs : {
                        required :true;
                    }
          },
        });
 </body>
 </html>
