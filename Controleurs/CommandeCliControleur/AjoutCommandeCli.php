<?php
/**
 * Created by PhpStorm.
 * User: Underground
 */
namespace Controleurs;
require_once '../../Modeles/ClientModele/CommandeCli.php';
require_once '../../Modeles/ClientModele/ClientManager.php';

use CommandeCli;
use ClientManager;

    $commandecli = new CommandeCli();

    $commandecli->setNumComCli($_POST['numcomcli'])
	            ->setCodeCli($_POST['codecli'])
	            ->setDateComCli($_POST['datecomcli']);
    $clientManager = new ClientManager();
    $clientManager->createCommandeCli($commandecli);
    header('location: ../../Views/Lignecommandecli/readAllLComCli.php');
?>
