<?php
  require_once'../../Controleurs/LigneComCli/readAllLComCliCtrl.php';
  require_once'../../Controleurs/ClientControleur/CommandeCliControleur.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      liste des LigeComClis
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div id="html">
      <button data-toggle="modal" data-backdrop="false" href="#formulaire" class="btn btn-primary"><div class="glyphicon glyphicon-plus"></div> 
        Ajouter
      </button>
    </div>
  <?php if (empty($lignecomclis)): ?>
      <div class="panel-body"> 
        <table class="table table-striped">
          <thead>
            <tr>
              <th>NUMCOMCLI</th><th>CODEPRO</th><th>qtecom</th><th>MODIFICATION</th><th>SUPPRESSION</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
      <?php else: ?>
        <?php if($lignecomclis===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>
                <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>NUMCOMCLI</th><th>CODEPRO</th><th>qtecom</th><th>MODIFICATION</th><th>SUPPRESSION</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($lignecomclis as $LigeComCli): ?>
                              <tr>
                                <td><?= $LigeComCli->getNumComCli() ?></td>
                                <td><?= $LigeComCli->getCodePro() ?></td>
                                <td><?= $LigeComCli->getqtecom() ?> </td>
                                <td><a href="formUpdateLComCli.php?numcomcli=<?=$LigeComCli->getNumComCli()?>&codepro=<?=$LigeComCli->getCodePro()?>&qtecom=<?=$LigeComCli->getqtecom()?>"><span class="glyphicon glyphicon-edit"></span> Modifier </a></td>
                                <td>
                              <a href="../../Controleurs/LigneComCli/deleteLigneComCliCtrl.php?numcomcli=<?=$LigeComCli->getNumComCli()?>&codepro=<?=$LigeComCli->getCodePro()?>&qtecom=<?=$LigeComCli->getqtecom()?>"><span class="glyphicon glyphicon-trash"></span> supprimer </a></td>
                              </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
          <?php endif; ?>
      <?php endif; ?>
      <!-- Modal bootstrap-->
<div class="col-md-6 col-xs-12 col-md-offset-3">
    <div class="modal fade" id="formulaire">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title"><div class="glyphicon glyphicon-plus"></div> Ajouter</h4>
                </div>
                <div class="modal-body">
                    <form action="../../Controleurs/LigneComCli/ajoutLComCli.php" id="modalForm" method="post">

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
                                      <input type="text" required="" name="qtecom" value="" class="form-control" placeholder="QteCom">
                                  </div>

                                  <div class="form-group">
                                      <button type="submit" class="btn btn-warning" style="margin-top: 10px;"><div class="glyphicon glyphicon-plus"></div> AJOUTER <span class="glyphicon glyphicon-send"></span></button>
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
        $("modalForm").submit(function(e) {
        e.preventDefault();
        var $modalForm = $(this);
        $.post($modalForm.attr("action"), $modalForm.serialize())
            .done(function(data) {
                $("#html").html(data);
                $("#formulaire").modal("hide");
                $("table").load('readAllLcomCli.php table' ,function () {
                });
            })
            .fail(function() {
                alert("ça marche pas...");
            });
        });
        $("#modalForm").validate({
                  rules: {
                    qtecom : {
                      required : true;
          },
        });
    });
      </script>       
   </body>
 </html>
