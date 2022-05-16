<?php
  namespace Client;
  require_once'../../Modeles/ClientModele/ClientManager.php';
  require_once'../../Modeles/ClientModele/Client.php';
  USE Client;
  USE ClientManager;

  $clientManager = new ClientManager();
  $client = $clientManager->readClient($_GET['codecli']);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Gestion De Vente | CLIENTS Update</title>
  <meta charset="utf-8">
 </head>
 <body>
   <?php require_once'../../assets/include/Entete.php'; ?>
   <form class="" action="../../Controleurs/ClientControleur/updateClient.php" method="post" style="margin-top : 60px;">
      <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
        <div class="panel panel-info">
          <div class="panel-heading"><h3>Mise à jour d'un client</h3></div>
            <div class="panel-body">
              <div class="form-group">

                <label for="" class="control-label">CODE CLIENT :</label>
                <div class="input-group" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" disabled="" name="codecli" value="<?=$client->getCodeCli()?>" class="form-control">
                </div>

                <label for="" class="control-label">NOM CLIENT :</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="nomcli" required="" value="<?=$client->getNomCli()?>" class="form-control">
                </div>

                <label for="" class="control-label"> ANDRESSE CLIENT :</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="adressecli" required="" value="<?= $client->getAdresseCli()?>" class="form-control">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-success" style="margin-top: 10px;">ENREGISTRER <span class="glyphicon glyphicon-send"></span></button>
                </div>
                <div class="form-group"><a href="ReadAllClient.php">
                  <button type="" class="btn btn-danger" style="margin-left: 85%;margin-top: -13%;">ANNULER <span class=""></span></button></a>
                </div>
                <input type="hidden" name="codecli" value="<?= $client->getCodeCli()?>">

              </div>
            </div>
          </div>
       </div>
   </form>
  <?php require_once'../../assets/include/footer.php'; ?>
  <script type="text/javascript">
  $().ready(function() {
    $("#myform").validate({
        rules: {
          nomcli : {
            required : true;
          },
          adressecli : {
              required :true;
          }
        },
      });
  });
</script>

 </body>
 </html>
