<?php
  require_once'../../Controleurs/FournisseurControleur/CommandeFrsControleur.php';
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
<form class="" action="../../Controleurs/CommandeFrsControleur/AjoutCommandeFrs.php" method="post" style="margin-top : 60px;">
    <div class="container-fluid col-md-6 col-xs-12 col-md-offset-3 col-lg-11" style="margin-left: 4%;">
        <div class="panel panel-info">
            <div class="panel-heading"><h3>AJOUTER UN commandefrs</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="control-label">numcomfrs:</label>
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="numcomfrs" value="" class="form-control " placeholder="numcomfrs">
                    </div>

                    <label for="" class="control-label">codefrs :</label>
	              	<select class="form-control" data-toggle="dropdown" name="codefrs">
	                <?php foreach ($fournisseurs as $fournisseurv): ?>
	                	<option value="<?= $fournisseur->getCodeFrs()?>"><?= $fournisseurv->getCodeFrs()?></option>
	                <?php endforeach; ?>
	              	</select>
                    <label for="" class="control-label">datecomfrs :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="date" name="datecomfrs" value="" class="form-control" placeholder="datecomfrs">
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
