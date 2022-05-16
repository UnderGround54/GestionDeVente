<?php
  require_once'../../Controleurs/ClientControleur/ctrlListClient.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>liste  des produit approvisionne </title>
</head>
<body>
  <?php if (empty($clients)): ?>
  <div>
    <div class="panel panel-info">
      <div class="panel-heading">
      </div>
      <div class="panel-body">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>NumCli</th><th>NOMCLI</th><th>CA</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
      <?php else: ?>
        <?php if($clients===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>
          <div>
            <div class="panel panel-info">
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>NUMERO</th><th>NOM</th><th>CHIFFRE D'AFFAIRE</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($clients as $liste): ?>
                              <tr>
                                <td><?= $liste['codeCli']?></td>
                                <td><?= $liste['nomCli'] ?></td>
                                <td><?= $liste['ca']?> </td>

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
