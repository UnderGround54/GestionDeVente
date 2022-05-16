<?php
  require_once'../../Controleurs/CommandeCliControleur/readAllComCliControleur.php';
  require_once'../../Controleurs/ClientControleur/CommandeCliControleur.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Gestion De Vente | CLIENTS
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <?php if (empty($clients)): ?>    
      <div class="panel-body">
        <div id="html">
          <button data-toggle="modal" data-backdrop="false" href="#formulaireS" class="btn btn-primary">Ajouter</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>numcomCli</th><th>codeCli</th><th>datecomCli</th><th>MODIFICATION</th><th>SUPPRESSION</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
     <?php else: ?>
        <?php if($clients===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>
                <div class="panel-body">
                  <div id="html">
                    <button data-toggle="modal" data-backdrop="false" href="#formulaireS" class="btn btn-primary">Ajouter</button>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>numcomCli</th><th>codeCli</th><th>datecomCli</th><th>MODIFICATION</th><th>SUPPRESSION</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($clients as $client): ?>
                              <tr>
                                <td><?= $client->getNumComCli() ?></td>
                                <td><?= $client->getCodeCli() ?></td>
                                <td><?= $client->getDateComCli() ?> </td>
                                <td><a href="../Commandecli/formUpdateComCli.php?numcomcli=<?=$client->getNumComCli() ?>"><span class="glyphicon glyphicon-edit"></span> Modifier </a></td>
                                <td>
                                <a href="../../Controleurs/CommandeCliControleur/deleteCommandeCli.php?numcomcli=<?=$client->getNumComCli() ?>"><span class="glyphicon glyphicon-trash"></span> supprimer </a></td>
                              </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
              </div>
            </div>
          <?php endif; ?>
      <?php endif; ?>
<!-- Modal bootstrap-->
<div class="col-md-6 col-xs-12 col-md-offset-3">
    <div class="modal fade" id="formulaireS">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Ajouter</h4>
                </div>
                <div class="modal-body">
                    <form action="../../Controleurs/CommandeCliControleur/AjoutCommandeCli.php" id="modalForM" method="post">

                                <div class="form-group">
                                  <label for="" class="control-label">numcomCli:</label>
                                  <div class="input-group" >
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      <input type="text" required="" name="numcomcli" value="" class="form-control " placeholder="numcomcli">
                                  </div>

                                  <label for="" class="control-label">codeCli :</label>
                                <select class="form-control" data-toggle="dropdown" name="codecli">
                                <?php foreach ($clientx as $client): ?>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
      <script type="text/javascript">
            $(document).ready(function(){
                $("modalForM").submit(function(e) {
                e.preventDefault();
                var $modalForM = $(this);
                $.post($modalForM.attr("action"), $modalForM.serialize())
                    .done(function(data) {
                        $("#html").html(data);
                        $("#formulaireS").modal("hide");
                        $("table").load('readAllcomCli.php table' ,function () {
                        });
                    })
                    .fail(function() {
                        alert("ça marche pas...");
                    });
              });
                $("#modalForm").validate({
                  rules: {
                    numcomcli : {
                      required : true;
                    },           
          },
        });
        });
      </script>
   </body>
 </html>
