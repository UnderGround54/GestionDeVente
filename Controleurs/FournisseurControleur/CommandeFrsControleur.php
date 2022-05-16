<?php

  namespace Controleur;
  require_once'../../Modeles/FournisseurModele/CommandeFrs.php';
  require_once'../../Modeles/FournisseurModele/FournisseurManager.php';
  require_once'../../Modeles/FournisseurModele/Fournisseur.php';
  require_once'../../Modeles/ProduitModele/ProduitManager.php';
  require_once'../../Modeles/ProduitModele/Produit.php';
  USE Produit;
  USE ProduitManager;
  USE Fournisseur;
  USE CommandeFrs;
  USE FournisseurManager;
  $fournisseurManager = new FournisseurManager();
  $produitManager = new ProduitManager();
  if (isset($_GET['numcomfrs'])) {
  	 $fournisseur = $fournisseurManager->readCommandeFrs($_GET['numcomfrs']);
  }
  $fournisseurs = $fournisseurManager->readAllFournisseur();
  $comFrss = $fournisseurManager->readAllCommandeFrs();
  $produits = $produitManager->readAllProduit();
?>
