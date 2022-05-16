<?php
	namespace Controleurs;
	require_once '../../Modeles/ClientModele/CommandeCli.php';
	require_once '../../Modeles/ClientModele/ClientManager.php';

	use ClientManager;
	use CommandeCli;
	$clientmanager = new ClientManager();
	$client = $clientmanager->readCommandeCli($_GET['numcomcli']);
	$clientmanager->deleteCommandeCli($client);
	header('location: ../../Views/Lignecommandecli/ReadAllLComCli.php');
 ?>
