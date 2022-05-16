<?php
  require_once'../../Controleurs/FournisseurControleur/CommandeFrsControleur.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Gestion De Vente | UPDATE FOURNISSEUR</title>
  <meta charset="utf-8">
 </head>
 <body>
   <?php require_once'../../assets/include/Entete.php'; ?>
   <form class="" action="../../Controleurs/CommandeFrsControleur/UpdateCommandeFrs.php" method="post" style="margin-top : 60px;">
      <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
        <div class="panel panel-info">
          <div class="panel-heading"><h3>Mise à jour d'un commandefrs</h3></div>
            <div class="panel-body">
              <div class="form-group">

                <label for="" class="control-label">numcomfrs :</label>
                <div class="input-group" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" disabled="" name="numcomfrs" value="<?=$fournisseur->getNumComFrs()?>" class="form-control">
                </div>

                <label for="" class="control-label">codefrs :</label>
                  <select class="form-control" data-toggle="dropdown" name="codefrs">
                  <?php foreach ($fournisseurs as $frs): ?>
                    <option value="<?= $frs->getCodeFrs()?>"><?= $frs->getCodeFrs()?></option>
                  <?php endforeach; ?>
                </select>

                <label for="" class="control-label"> datecomfrs:</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="date" name="datecomfrs" value="<?=$fournisseur->getDateComFrs()?>" class="form-control">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-warning" style="margin-top: 10px;">ENREGISTRER <span class="glyphicon glyphicon-send"></span></button>
                </div>
                <div class="form-group"><a href="Lignecommandfrs/readAllComFrs.php">
                  <button type="" class="btn btn-danger" style="margin-left: 85%;margin-top: -13%;">ANNULER <span class=""></span></button></a>
                </div>
                <input type="hidden" name="numcomfrs" value="<?=$fournisseur->getNumComFrs()?>">

              </div>
            </div>
          </div>
       </div>
   </form>
   <?php require_once'../../assets/include/footer.php'; ?>
 </body>
 </html>
