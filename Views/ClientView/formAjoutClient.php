!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>creer visiteur</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
<?php require_once'../../assets/include/Entete.php'; ?>
<form class="" action="../../Controleurs/ClientControleur/ajoutClient.php" method="post" style="margin-top : 60px;">
    <div class="container-fluid col-md-6 col-xs-12 col-md-offset-3 col-lg-11" style="margin-left: 4%;">
        <div class="panel panel-info">
            <div class="panel-heading"><h3>AJOUTER UN Client</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="control-label">CodeClient:</label>
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="codecli" value="" class="form-control " placeholder="codecli">
                    </div>

                    <label for="" class="control-label"> NomCli :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="nomcli" value="" class="form-control" placeholder="nomcli">
                    </div>

                    <label for="" class="control-label">AdresseCli :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" name="adressecli" value="" class="form-control" placeholder="adressecli">
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
