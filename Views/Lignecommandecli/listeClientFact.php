<?php
  require_once'../../Controleurs/ClientControleur/readAllClientControleur.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Facture | Client</title>
</head>
<body>
<select class="cli form-control" >
	<option>séléctionnez</option>
    <?php foreach ($clients as $client): ?>
        <option value="<?= $client->getCodeCli()?>">
            <?= $client->getCodeCli()?>
         </option>
    <?php endforeach; ?>
</select>
</body>
</html>