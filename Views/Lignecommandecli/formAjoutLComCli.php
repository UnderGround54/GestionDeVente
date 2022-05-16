<?php
  require_once'../../Controleurs/ClientControleur/CommandeCliControleur.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>creer visiteur</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <?php require_once'../../assets/include/Entete.php'; ?>
<form class="" action="../../Controleurs/LigneComCli/ajoutLComCli.php" method="post" style="margin-top : 60px;">
    <div class="container-fluid col-md-6 col-xs-12 col-md-offset-3 col-lg-11" style="margin-left: 4%;">
        <div class="panel panel-info">
            <div class="panel-heading"><h3>Ligne de COmmande </h3></div>
            <div class="panel-body">
                <div class="form-group">

                    <label for="" class="control-label">numComCli :</label>
                    <select class="form-control" data-toggle="dropdown" name="numcomcli">
                      <?php foreach ($comclis as $comcli): ?>
                        <option value="<?=$comcli->getNumComCli()?>"><?= $comcli->getNumComCli()?></option>
                      <?php endforeach; ?>
                    </select>

                    <label for="" class="control-label">codePro :</label>
                    <select class="form-control" data-toggle="dropdown" name="codepro">
                      <?php foreach ($produits as $pro): ?>
                        <option value="<?=$pro->getCodePro()?>"><?=$pro->getCodePro()?></option>
                      <?php endforeach; ?>
                    </select>

                    <label for="" class="control-label">QteCom :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" name="qtecom" value="" class="form-control" placeholder="QteCom">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning" style="margin-top: 10px;">AJOUTER <span class="glyphicon glyphicon-send"></span></button>
                    </div>

                </div>
            </div>
        </div>
        <?php require_once'../../assets/include/footer.php'; ?>
</form>
</body>
</html>
