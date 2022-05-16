<?php
  namespace Controleur;
  require_once'../../Modeles/FournisseurModele/FournisseurManager.php';
  require_once'../../Modeles/FournisseurModele/Fournisseur.php';
  USE Fournisseur;
  USE FournisseurManager;
  //recuperation des Fournisseurs
  $fournisseurManager = new FournisseurManager();
  if (isset($_GET['resultats']) AND ($_GET['select']=='tous')) {
      $fournisseurs = $fournisseurManager->searchAllFournisseur($_GET['resultats']);

  }else if (isset($_GET['numero']) AND ($_GET['select']=='numero')) {
    $fournisseurs = $fournisseurManager->searchCodeFrs($_GET['numero']);
  }
  else if (isset($_GET['nom']) AND ($_GET['select']=='nom')) {
    $fournisseurs = $fournisseurManager->searchNomFrs($_GET['nom']);
  }
  else if (isset($_GET['adresse']) AND ($_GET['select']=='adresse')) {
    $fournisseurs = $fournisseurManager->searchAdressFrs($_GET['adresse']);
  }
  else {
    $fournisseurs = $fournisseurManager->readAllFournisseur();
  }
  //date and time
  $dateNow = Date('d/m/y');
  $heure = Date('H');
  $min = Date('i');
  $heureNow = $heure + 3;
 ?>
