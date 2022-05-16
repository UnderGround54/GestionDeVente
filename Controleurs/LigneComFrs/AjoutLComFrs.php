<?php
/**
 * Created by PhpStorm.
 * User: Underground
 *
 */
namespace LigneComFrs;
require_once '../../Modeles/FournisseurModele/LigneComFrs.php';
require_once '../../Modeles/FournisseurModele/FournisseurManager.php';

//
	require_once'../../Modeles/ProduitModele/Produit.php';
	require_once'../../Modeles/ProduitModele/ProduitManager.php';

	use ProduitManager;
	USE Produit;
	use LigneComFrs;
	use FournisseurManager;
	$produitManager = new ProduitManager();
	$ligneComFrs = new LigneComFrs();
	$produit = $produitManager->readProduit($_POST['codepro']);
	$stock = $produit->getStock();
	$restStock = $stock + $_POST['qteappro'];
	$produit->setCodePro($_POST['codepro'])
            ->setStock($restStock);
    $produitManager->updateProduit($produit);
//
    $ligneComFrs->setNumComFrs($_POST['numcomfrs'])
	            ->setCodePro($_POST['codepro'])
	            ->setQteAppro($_POST['qteappro']);
    $FournisseurManager = new FournisseurManager();
    $FournisseurManager->createLigneComFrs($ligneComFrs);
    header('location: ../../Views/Lignecommandfrs/readAllComFrs.php');
?>
