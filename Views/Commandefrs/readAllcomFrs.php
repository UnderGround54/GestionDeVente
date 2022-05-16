<?php
  require_once'../../Controleurs/CommandeFrsControleur/readAllComFrsControleur.php';
  require_once'../../Controleurs/FournisseurControleur/CommandeFrsControleur.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
     Gestion De Vente | FOURNISSEURS
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <?php if (empty($fournisseursc)): ?>
    <div class="panel-body">
      <div id="html">
        <button data-toggle="modal" data-backdrop="false" href="#formulaires" class="btn btn-primary">Ajouter</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>numcomfrs</th><th>codefrs</th><th>datecomfrs</th><th>MODIFICATION</th><th>SUPPRESSION</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  <!-- </div> -->
      <?php else: ?>
        <?php if($fournisseursc===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>
                <div class="panel-body">
                  <div id="html">
                  <button data-toggle="modal" data-backdrop="false" href="#formulaires" class="btn btn-primary">Ajouter</button>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>numcomfrs</th><th>codefrs</th><th>datecomfrs</th><th>MODIFICATION</th><th>SUPPRESSION</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($fournisseursc as $fournisseur): ?>
                              <tr>
                                <td><?= $fournisseur->getNumComFrs() ?></td>
                                <td><?= $fournisseur->getCodeFrs() ?></td>
                                <td><?= $fournisseur->getDateComFrs() ?> </td>
                                <td><a href="../Commandefrs/formUpdateComFrs.php?numcomfrs=<?=$fournisseur->getNumComFrs() ?>"><span class="glyphicon glyphicon-edit"></span> Modifier </a></td>
                                <td>
                                <a href="../../Controleurs/CommandeFrsControleur/deleteCommandeFrs.php?numcomfrs=<?=$fournisseur->getNumComFrs() ?>"><span class="glyphicon glyphicon-trash"></span> supprimer </a></td>
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
    <div class="modal fade" id="formulaires">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Ajouter</h4>
                </div>
                <div class="modal-body">
                    <form action="../../Controleurs/CommandeFrsControleur/AjoutCommandeFrs.php" id="modalFormc" method="post">

                                <div class="form-group">
                                  <label for="" class="control-label">numcomfrs:</label>
                                    <div class="input-group" >
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" required="" name="numcomfrs" value="" class="form-control " placeholder="numcomfrs">
                                    </div>

                                    <label for="" class="control-label">codefrs :</label>
                                  <select class="form-control" data-toggle="dropdown" name="codefrs">
                                  <?php foreach ($fournisseurs as $fournisseu): ?>
                                    <option value="<?= $fournisseu->getCodeFrs()?>"><?= $fournisseu->getCodeFrs()?></option>
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
                $("modalFormc").submit(function(e) {
            e.preventDefault();
            var $modalFormc = $(this);
            $.post($modalFormc.attr("action"), $modalFormc.serialize())
                .done(function(data) {
                    $("#html").html(data);
                    $("#formulaires").modal("hide");
                    $("table").load('readAllcomFrs.php table' ,function () {
                    });
                })
                .fail(function() {
                    alert("ça marche pas...");
                });
            });
                <script type="text/javascript">
         $("#modalForm").validate({
                    rules: {
                      numcomfrs : {
                        required : true;
                      },
            },
        });
      });
      </script>
   </body>
 </html>
