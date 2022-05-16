<?php 
	namespace Controleurs;
	require_once '../../Modeles/ClientModele/LigneComCli.php';
	require_once '../../Modeles/ClientModele/ClientManager.php';
	require_once'../../Modeles/ProduitModele/Produit.php';
	require_once'../../Modeles/ProduitModele/ProduitManager.php';

	use ClientManager;
	use ProduitManager;
	USE Produit;
	$produitManager = new ProduitManager();
	$produit = $produitManager->readProduit($_GET['codepro']);

	$stock = $produit->getStock();
	$restStock = $stock + $_GET['qtecom'];

	$produit->setCodePro($_GET['codepro'])
        ->setStock($restStock);
    $produitManager->updateProduit($produit);

	$clientmanager = new ClientManager();
	$lignecom = $clientmanager->readLigneComCli($_GET['numcomcli']);
	$clientmanager->deleteLigneComCli($lignecom);
	header('location: ../../Views/Lignecommandecli/readAllLComCli.php');
 ?>