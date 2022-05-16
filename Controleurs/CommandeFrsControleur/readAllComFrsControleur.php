<?php
  namespace FournisseurModele;
  require_once'../../Modeles/FournisseurModele/CommandeFrs.php';
  require_once'../../Modeles/FournisseurModele/FournisseurManager.php';
  USE CommandeFrs;
  USE FournisseurManager;
  //recuperation des Fournisseurs
  $fournisseurManager = new FournisseurManager();
  if (isset($_GET['resultats']) AND ($_GET['select']=='tous')) {
      $fournisseurs = $fournisseurManager->searchAllComFrs($_GET['resultats']);

  }else if (isset($_GET['numcomfrs']) AND ($_GET['select']=='numcomfrs')) {
    $fournisseurs = $fournisseurManager->searchComCodeFrs($_GET['numcomfrs']);
  }
  else if (isset($_GET['codefrs']) AND ($_GET['select']=='codefrs')) {
    $fournisseurs = $fournisseurManager->searchComNomFrs($_GET['codefrs']);
  }
  else if (isset($_GET['datecomfrs']) AND ($_GET['select']=='datecomfrs')) {
    $fournisseurs = $fournisseurManager->searchComAdressFrs($_GET['datecomfrs']);
  }
  else {
    $fournisseursc = $fournisseurManager->readAllCommandeFrs();
  }
  //date and time
  $dateNow = Date('d/m/y');
  $heure = Date('H');
  $min = Date('i');
  $heureNow = $heure + 3;
 ?>
