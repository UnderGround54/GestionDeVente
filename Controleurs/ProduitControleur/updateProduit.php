<?php
	namespace Controleurs;
	require_once'../../Modeles/ProduitModele/Produit.php';
	require_once'../../Modeles/ProduitModele/ProduitManager.php';

	use ProduitManager;
	USE Produit;
	$produitManager = new ProduitManager();
	$produit = $produitManager->readProduit($_POST['codepro']);
	$produit->setCodePro($_POST['codepro'])
        ->setPu($_POST['pu'])
        ->setDesign($_POST['design'])
        ->setStock($_POST['stock']);
        $produitManager->updateProduit($produit);
        header('location: ../../Views/ProduitView/readAllPro.php');
 ?>