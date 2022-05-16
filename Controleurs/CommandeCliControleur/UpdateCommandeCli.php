<?php
	namespace Controleurs;
	require_once'../../Modeles/ClientModele/CommandeCli.php';
	require_once'../../Modeles/ClientModele/ClientManager.php';

	use ClientManager;
	USE CommandeCli;
	$clientManager = new ClientManager();
	$client = $clientManager->readCommandeCli($_POST['numcomcli']);
	
	$client->setNumComCli($_POST['numcomcli'])
        ->setCodeCli($_POST['codecli'])
        ->setDateComCli($_POST['datecomcli']);
        $clientManager->updateCommandeCli($client);
        header('location: ../../Views/Lignecommandecli/ReadAllLComCli.php');
 ?>