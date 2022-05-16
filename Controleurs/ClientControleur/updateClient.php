<?php
	namespace Controleurs;
	require_once'../../Modeles/ClientModele/Client.php';
	require_once'../../Modeles/ClientModele/ClientManager.php';

	use ClientManager;
	USE Client;
	$clientManager = new ClientManager();
	$client = $clientManager->readClient($_POST['codecli']);
	$client->setCodeCli($_POST['codecli'])
        ->setNomCli($_POST['nomcli'])
        ->setAdresseCli($_POST['adressecli']);
        $clientManager->updateClient($client);
        header('location: ../../Views/ClientView/readAllClient.php');
 ?>