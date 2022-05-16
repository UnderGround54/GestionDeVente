<?php 
	namespace Controleurs;
	require_once '../../Modeles/ProduitModele/Produit.php';
	require_once '../../Modeles/ProduitModele/ProduitManager.php';

	use ProduitManager;

	$produitmanager = new ProduitManager();
	$produit = $produitmanager->readProduit($_GET['codepro']);
	$produitmanager->deleteProduit($produit);
	header('location: ../../Views/ProduitView/readAllPro.php');
 ?>