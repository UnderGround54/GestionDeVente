<?php
  namespace Fournisseur;
  require_once'../../Controleurs/FournisseurControleur/CommandeFrsControleur.php';
  require_once'../../Modeles/FournisseurModele/FournisseurManager.php';
  require_once'../../Modeles/FournisseurModele/LigneComFrs.php';
  USE LigneComFrs;
  USE FournisseurManager;

  $FournisseurManager = new FournisseurManager();
  $lignecomFrss = $FournisseurManager->readLigneComFrs($_GET['numcomFrs']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gestion De Vente | UPDATE</title>
</head>
<body>
<?php require_once'../../assets/include/Entete.php'; ?>
<form class="" action="../../Controleurs/LigneComFrs/UpdateLigneComFrs.php" method="post" style="margin-top : 60px;">
    <div class="container-fluid col-md-6 col-xs-12 col-md-offset-3 col-lg-11"" style="margin-left: 4%;">
        <div class="panel panel-info">
            <div class="panel-heading"><h3>Ligne de COmmande </h3></div>
            <div class="panel-body">
                <div class="form-group">

                    <label for="" class="control-label">numComFrs :</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
                        <input type="text" name="numcomfrs" value="<?= $lignecomFrss->getNumComFrs()?>"class="form-control" placeholder="numcomfrs">
                    </div> 

                    <label for="" class="control-label">codePro :</label>
                    <select class="form-control" data-toggle="dropdown" name="codepro">
                      <?php foreach ($produits as $pro): ?>
                        <option value="<?= $pro->getCodePro()?>"><?= $pro->getCodePro()?></option>
                      <?php endforeach; ?>
                    </select>

                    <label for="" class="control-label">QteAppro :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" required="" name="qteappro" value="<?=$lignecomFrss->getQteAppro()?>" class="form-control" placeholder="QteAppro">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning" style="margin-top: 10px;">AJOUTER <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                    <div class="form-group"><a href="Lignecommandfrs/readAllComFrs.php">
                      <button type="" class="btn btn-danger" style="margin-left: 85%;margin-top: -5%;">ANNULER <span class=""></span></button></a>
                     </div>
                    <input type="hidden" name="numcomfrs" value="<?=$lignecomFrss->getNumComFrs()?>">
                    <input type="hidden" name="qte" value="<?=$_GET['qteappro']?>">
                </div>
            </div>
        </div>
</form>
<?php require_once'../../assets/include/footer.php'; ?>
<script type="text/javascript">
  $("#modalForm").validate({
                  rules: {
                    QteAppro : {
                      required : true;
          },
        });
</script>
</body>
</html>
