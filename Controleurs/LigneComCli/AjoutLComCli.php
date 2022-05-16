<?php
/**
 * Created by PhpStorm.
 * User: Underground
 * 
 */
namespace Controleurs;
require_once '../../Modeles/ClientModele/LigneComCli.php';
require_once '../../Modeles/ClientModele/ClientManager.php';
//

require_once'../../Modeles/ProduitModele/Produit.php';
require_once'../../Modeles/ProduitModele/ProduitManager.php';

	use ProduitManager;
	USE Produit;
	use LigneComCli;
	use ClientManager;
	$produitManager = new ProduitManager();
	$ligneComCli = new LigneComCli();
	$produit = $produitManager->readProduit($_POST['codepro']);
//

	$stock = $produit->getStock();
	$restStock = $stock - $_POST['qtecom'];
	$produit->setCodePro($_POST['codepro'])
            ->setStock($restStock);
    $produitManager->updateProduit($produit);
//
    $ligneComCli->setNumComCli($_POST['numcomcli'])
		        ->setCodePro($_POST['codepro'])
		        ->setQteCom($_POST['qtecom']);
    $clientManager = new ClientManager();
    $clientManager->createLigneComCli($ligneComCli);
    header('location: ../../Views/Lignecommandecli/readAllLComCli.php');
?>
