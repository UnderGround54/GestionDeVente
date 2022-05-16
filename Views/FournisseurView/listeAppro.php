<?php
  require_once'../../Controleurs/LigneComFrs/ctrlListAppro.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>liste  des produit approvisionne </title>
</head>
<body>
  <?php if (empty($listeAppros)): ?>
    <div class="panel">
      <div class="panel-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>CODEPRO</th><th>NOMPRO</th><th>QTEAPPRO</th>
            </tr>
          </thead>
        </table>
      </div>
  </div>
      <?php else: ?>
        <?php if($listeAppros===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>CODEPRO</th><th>NOMPRO</th><th>QTEAPPRO</th><th>NUMCOMMANDE</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($listeAppros as $listeAppro): ?>
                              <tr>
                                <td><?= $listeAppro['codePro']?></td>
                                <td><?= $listeAppro['design'] ?></td>
                                <td><?= $listeAppro['QteAppro']?> </td> 
                                <td><?= $listeAppro['numComFrs']?> </td>                          
                              </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endif; ?>
</body>
</html>
