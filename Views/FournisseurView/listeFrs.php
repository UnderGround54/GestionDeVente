<?php
    require_once'../../Controleurs/FournisseurControleur/readAllFrsControleur.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>liste  des produit approvisionne </title>
</head>
<body>
  <?php if (empty($fournisseurs)): ?>
    <select id="frs" class="form-control">       
                <option>
                </option>                                        
    </select>
      <?php else: ?>
        <?php if($fournisseurs===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>
          <select id="frs" class="form-control">
            <?php foreach ($fournisseurs as $listeAppro): ?>
                <option>
                </option> 
                <option value="<?= $listeAppro->getCodeFrs()?>">
                  <?= $listeAppro->getNomFrs()?>
                </option>                                     
            <?php endforeach; ?>
          </select>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>