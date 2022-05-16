<?php 
	namespace Controleurs;
	require_once'../../Modeles/ClientModele/ClientManager.php';
  	require_once'../../Modeles/ClientModele/LigneComCli.php';

  	USE LigneComCli;
  	USE ClientManager;
  //recuperation des lignecomClis
    $ClientManager = new ClientManager();
  	$clients = $ClientManager->readListeClient();
  	if(isset($_GET['res']))
   {
   		$idNum = $_GET['res'];
   		
  	$codeclis = $ClientManager->factureClient($idNum);
   }
   else{
   		$codeclis = $ClientManager->factureClient("");
   }
 ?>