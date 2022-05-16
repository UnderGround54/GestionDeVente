<?php
	namespace Controleurs;
	require_once'../../Modeles/ClientModele/LigneComCli.php';
	require_once'../../Modeles/ClientModele/ClientManager.php';
	require_once'../../Modeles/ProduitModele/Produit.php';
	require_once'../../Modeles/ProduitModele/ProduitManager.php';


	use ClientManager;
	USE LigneComCli;
	use ProduitManager;
	USE Produit;

	$produitManager = new ProduitManager();
	$produit = $produitManager->readProduit($_POST['codepro']);
	$stock = $produit->getStock();
	$res = $stock + $_POST['qte'];
	$restStock = $res - $_POST['qtecom'];
	$produit->setCodePro($_POST['codepro'])
            ->setStock($restStock);
    $produitManager->updateProduit($produit);



	$clientManager = new ClientManager();
	$client = $clientManager->readLigneComCli($_POST['numcomcli']);
	
	$client->setNumComCli($_POST['numcomcli'])
           ->setCodePro($_POST['codepro'])
           ->setQteCom($_POST['qtecom']);
    $clientManager->updateLigneComCli($client);
    header('location: ../../Views/Lignecommandecli/readAllLComCli.php');
 ?>