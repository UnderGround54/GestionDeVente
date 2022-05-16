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
<form class="" action="../../Controleurs/CommandeCliControleur/AjoutCommandeCli.php" method="post" style="margin-top : 60px;">
    <div class="container-fluid col-md-6 col-xs-12 col-md-offset-3 col-lg-11" style="margin-left: 4%;">
        <div class="panel panel-info">
            <div class="panel-heading"><h3>AJOUTER UN commandeCli</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="control-label">numcomCli:</label>
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" required="" name="numcomcli" value="" class="form-control " placeholder="numcomcli">
                    </div>

                    <label for="" class="control-label">codeCli :</label>
	              	<select class="form-control" data-toggle="dropdown" name="codecli">
	                <?php foreach ($clients as $client): ?>
	                	<option value="<?= $client->getCodeCli()?>"><?= $client->getCodeCli()?></option>
	                <?php endforeach; ?>
	              	</select>
                    <label for="" class="control-label">datecomCli :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="date" name="datecomcli" value="" class="form-control" placeholder="datecomcli">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning" style="margin-top: 10px;">AJOUTER <span class="glyphicon glyphicon-send"></span></button>
                    </div>

                </div>
            </div>
        </div>
        <?php require_once'../../assets/include/footer.php'; ?>
        <script type="text/javascript">
       $("#modalForm").validate({
                  rules: {
                    numcomcli : {
                      required : true;
                    },
                    
          },
        });
     </script>
</form>
</body>
</html>
