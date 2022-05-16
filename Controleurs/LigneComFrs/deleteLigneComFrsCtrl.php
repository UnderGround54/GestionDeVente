<?php 
	namespace Controleurs;
	require_once '../../Modeles/FournisseurModele/LigneComFrs.php';
	require_once '../../Modeles/FournisseurModele/FournisseurManager.php';
	require_once'../../Modeles/ProduitModele/Produit.php';
	require_once'../../Modeles/ProduitModele/ProduitManager.php';

	use FournisseurManager;
	use ProduitManager;
	USE Produit;
	$produitManager = new ProduitManager();
	$produit = $produitManager->readProduit($_GET['codepro']);

	$stock = $produit->getStock();
	$restStock = $stock - $_GET['qteappro'];

	$produit->setCodePro($_GET['codepro'])
            ->setStock($restStock);
    $produitManager->updateProduit($produit);

	$Fournisseurmanager = new FournisseurManager();
	$lignecom = $Fournisseurmanager->readLigneComFrs($_GET['numcomFrs']);
	$Fournisseurmanager->deleteLigneComFrs($lignecom);
	header('location: ../../Views/Lignecommandfrs/readAllComFrs.php');
 ?>