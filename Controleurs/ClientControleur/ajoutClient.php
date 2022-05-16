<?php
/**
 * Created by PhpStorm.
 * User: Underground
 * 
 */
namespace Controleurs;
require_once '../../Modeles/ClientModele/Client.php';
require_once '../../Modeles/ClientModele/ClientManager.php';

use Client;
use ClientManager;

    $client = new Client();
    $clientManager = new ClientManager();
    
    $client->setCodeCli($_POST['codecli'])
            ->setNomCli($_POST['nomcli'])
            ->setAdresseCli($_POST['adressecli']);
    $exist=$clientManager->exist($_POST['codecli']);

    //$clientManager->createClient($client);
    //header('location: ../../Views/ClientView/readAllClient.php');
?>
<!DOCTYPE html>
        <html>
        <head>
            <title></title>
        </head>
        <body>
    <?php if(!$exist) {	

    	$clientManager->createClient($client);?>
        <script type="text/javascript">
            alert("ajouté");
        </script>

    <?php header('location: ../../Views/ClientView/readAllClient.php'); } else { ?>
        <script type="text/javascript">
            alert("le code exist deja!!!");
        </script>
        <?php header('location: ../../Views/ClientView/readAllClient.php'); } 
        
        ?>

    </body>
  </html>
