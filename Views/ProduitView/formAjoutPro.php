<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>creer visiteur</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <?php require_once'../../assets/include/Entete.php'; ?>
<form class="" action="../../Controleurs/ProduitControleur/ajoutProduit.php" method="post" style="margin-top : 60px;">
    <div class="container-fluid col-md-6 col-xs-12 col-md-offset-3 col-lg-11" style="margin-left: 4%;">
        <div class="panel panel-info">
            <div class="panel-heading"><h3>AJOUTER UN Produit</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="control-label">CodeProduit:</label>
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="codepro" value="" class="form-control " placeholder="codepro">
                    </div>

                    <label for="" class="control-label"> Design :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="design" value="" class="form-control" placeholder="design">
                    </div>

                    <label for="" class="control-label">Pu :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" name="pu" value="" class="form-control" placeholder="pu">
                    </div>
                    <label for="" class="control-label">stock :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" name="stock" value="" class="form-control" placeholder="stock en KG">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning" style="margin-top: 10px;">AJOUTER <span class="glyphicon glyphicon-send"></span></button>
                    </div>

                </div>
            </div>
        </div>

</form>
<?php require_once'../../assets/include/footer.php'; ?>
</body>
</html>
