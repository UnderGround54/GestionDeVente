<?php 
	namespace Controleurs;
	require_once '../../Modeles/ClientModele/Client.php';
	require_once '../../Modeles/ClientModele/ClientManager.php';

	use ClientManager;

	$clientmanager = new ClientManager();
	$client = $clientmanager->readClient($_GET['codecli']);
	$clientmanager->deleteClient($client);
	header('location: ../../Views/ClientView/readAllClient.php');
 ?>