<?php
	namespace Controleurs;
	require_once'../../Modeles/FournisseurModele/LigneComFrs.php';
	require_once'../../Modeles/FournisseurModele/FournisseurManager.php';
	require_once'../../Modeles/ProduitModele/Produit.php';
	require_once'../../Modeles/ProduitModele/ProduitManager.php';

	use FournisseurManager;
	USE LigneComFrs;
	use ProduitManager;
	USE Produit;

	$produitManager = new ProduitManager();
	$produit = $produitManager->readProduit($_POST['codepro']);
	$stock = $produit->getStock();
	$res = $stock - $_POST['qte'];
	$restStock = $res + $_POST['qteappro'];
	$produit->setCodePro($_POST['codepro'])
            ->setStock($restStock);
    $produitManager->updateProduit($produit);

	$FournisseurManager = new FournisseurManager();
	$Fournisseur = $FournisseurManager->readLigneComFrs($_POST['numcomfrs']);
	
	$Fournisseur->setNumComFrs($_POST['numcomfrs'])
           ->setCodePro($_POST['codepro'])
           ->setQteAppro($_POST['qteappro']);
    $FournisseurManager->updateLigneComFrs($Fournisseur);
    header('location: ../../Views/Lignecommandfrs/readAllComFrs.php');
 ?>