<?php
  namespace Controleurs;
  require_once'../../Modeles/FournisseurModele/FournisseurManager.php';
  require_once'../../Modeles/FournisseurModele/LigneComFrs.php';
  USE LigneComFrs;
  USE FournisseurManager;
  //recuperation des lignecomFrss
  $FournisseurManager = new FournisseurManager();
  if (isset($_GET['resultats']) AND ($_GET['select']=='tous')) {
      $lignecomFrss = $FournisseurManager->searchAllLComFrs($_GET['resultats']);

  }else if (isset($_GET['numcomFrs']) AND ($_GET['select']=='numcomFrs')) {
    $lignecomFrss = $FournisseurManager->searchLnumComFrs($_GET['numcomFrs']);
  }
  else if (isset($_GET['codepro']) AND ($_GET['select']=='codepro')) {
    $lignecomFrss = $FournisseurManager->searchLCodePro($_GET['codepro']);
  }
  else if (isset($_GET['qteappro']) AND ($_GET['select']=='qteappro')) {
    $lignecomFrss = $FournisseurManager->searchQteAppro($_GET['qteappro']);
  }
  else {
    $lignecomFrss = $FournisseurManager->readAllLigneComFrs();
  }
  //date and time
  $dateNow = Date('d/m/y');
  $heure = Date('H');
  $min = Date('i');
  $heureNow = $heure + 3;

 ?>
