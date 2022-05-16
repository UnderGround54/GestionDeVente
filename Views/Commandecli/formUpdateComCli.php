<?php
  require_once'../../Controleurs/ClientControleur/CommandeCliControleur.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Gestion De Vente | UPDATE COMMANDE</title>
  <meta charset="utf-8">
 </head>
 <body>
   <?php require_once'../../assets/include/Entete.php'; ?>
   <form class="" action="../../Controleurs/CommandeCliControleur/UpdateCommandeCli.php" method="post" style="margin-top : 60px;">
      <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
        <div class="panel panel-info">
          <div class="panel-heading"><h3>Mise à jour d'un commandeCli</h3></div>
            <div class="panel-body">
              <div class="form-group">

                <label for="" class="control-label">numcomCli :</label>
                <div class="input-group" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" disabled="" required="" name="numcomcli" value="<?=$client->getNumComCli()?>" class="form-control">
                </div>

                <label for="" class="control-label">codeCli :</label>
                  <select class="form-control" data-toggle="dropdown" name="codecli">
                  <?php foreach ($clientx as $cli): ?>
                    <option value="<?= $cli->getCodeCli()?>"><?= $cli->getCodeCli()?></option>
                  <?php endforeach; ?>
                </select>

                <label for="" class="control-label"> datecomCli:</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="date" name="datecomcli" id="datepicker" value="<?=$client->getDateComCli()?>" class="form-control">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-warning" style="margin-top: 10px;">ENREGISTRER <span class="glyphicon glyphicon-send"></span></button>
                </div>
                <div class="form-group"><a href="Lignecommandecli/ReadAllLComCli.php">
                  <button type="" class="btn btn-danger" style="margin-left: 85%;margin-top: -13%;">ANNULER <span class=""></span></button></a>
                </div>
                <input type="hidden" name="numcomcli" value="<?=$client->getNumComCli()?>">

              </div>
            </div>
          </div>
       </div>
   </form>
   <?php require_once'../../assets/include/footer.php'; ?>
   <script type="text/javascript">
    $(function(){
      $("#datepicker").datepicker();
    });
       
 </body>
 </html>
