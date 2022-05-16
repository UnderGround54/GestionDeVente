<?php

	namespace Controleur;
  	require_once'../../Modeles/ClientModele/CommandeCli.php';
	require_once'../../Modeles/ClientModele/ClientManager.php';
	require_once'../../Modeles/ClientModele/Client.php';
	require_once'../../Modeles/ProduitModele/ProduitManager.php';
	require_once'../../Modeles/ProduitModele/Produit.php';
	USE Produit;
	USE ProduitManager;
	USE Client;
	USE CommandeCli;
	USE ClientManager;

	 $clientManager = new ClientManager();
	 $produitManager = new ProduitManager();
	 if (isset($_GET['numcomcli'])) {
	 	$client = $clientManager->readCommandeCli($_GET['numcomcli']);
	 }
	 $clientx = $clientManager->readAllClient();
	 $comclis = $clientManager->readAllCommandeCli();
	 $produits = $produitManager->readAllProduit();
?>
