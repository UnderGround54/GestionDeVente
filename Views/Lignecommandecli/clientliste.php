<?php
    require_once'../../Controleurs/ClientControleur/readAllClientControleur.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>liste  des produit approvisionne </title>
</head>
<body>
  <?php if (empty($clients)): ?>
  	<p>erreur</p>
      <?php else: ?>
        <?php if($clients===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>
            <option>
              ddddd
            </option>
            <?php foreach ($clients as $liste): ?>          
              <option value="<?= $listeAppro->getCodeCli()?>">
                <?= $liste->getNomCli()?>
              </option>                                     
            <?php endforeach; ?>  
          </select>     
  <?php endif; ?>
<?php endif; ?>
</body>
</html>