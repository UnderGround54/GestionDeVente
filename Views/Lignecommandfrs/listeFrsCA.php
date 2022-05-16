<?php
  require_once'../../Controleurs/fournisseurControleur/ctrlListFrs.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>liste  des produit approvisionne </title>
</head>
<body>
  <?php if (empty($fournisseurs)): ?>
            
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>NUMERO</th><th>NOM FOURNISSEUR</th><th>CHIFFRE D'AFFAIRE</th>
                        </tr>
                      </thead>
                    </table>
              </div>
      <?php else: ?>
        <?php if($fournisseurs===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>     
            <div class="panel panel-info">
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>NUMERO</th><th>NOM FOURNISSEUR</th><th>CHIFFRE D'AFFAIRE</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($fournisseurs as $liste): ?>
                              <tr>
                                <td><?= $liste['codeFrs']?></td>
                                <td><?= $liste['nomFrs'] ?></td>
                                <td><?= $liste['ca']?> </td>
                              </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
              </div>
            </div>
        <?php endif; ?>
      <?php endif; ?>
</body>
</html>
