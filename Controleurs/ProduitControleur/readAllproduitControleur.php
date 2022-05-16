<?php
  namespace Controleurs;
  require_once'../../Modeles/ProduitModele/ProduitManager.php';
  require_once'../../Modeles/ProduitModele/Produit.php';
  USE Produit;
  USE ProduitManager;
  //recuperation des Produits
  $produitManager = new ProduitManager();
  if (isset($_GET['resultats']) AND ($_GET['select']=='tous')) {
      $produits = $produitManager->search($_GET['resultats']);

  }else if (isset($_GET['codepro']) AND ($_GET['select']=='codepro')) {
    $produits = $produitManager->searchcodepro($_GET['codepro']);
  }
  else if (isset($_GET['design']) AND ($_GET['select']=='design')) {
    $produits = $produitManager->searchdesign($_GET['design']);
  }
  else if (isset($_GET['pu']) AND ($_GET['select']=='pu')) {
    $produits = $produitManager->searchpu($_GET['pu']);
  }
  else {
    $produits = $produitManager->readAllProduit();
  }
  //date and time
  $dateNow = Date('d/m/y');
  $heure = Date('H');
  $min = Date('i');
  $heureNow = $heure + 3;

 ?>
