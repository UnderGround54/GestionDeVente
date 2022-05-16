<?php
  namespace Controleurs;
  require_once'../../Modeles/ClientModele/ClientManager.php';
  require_once'../../Modeles/ClientModele/LigneComCli.php';
  USE LigneComCli;
  USE ClientManager;
  //recuperation des lignecomclis
  $clientManager = new ClientManager();
  if (isset($_GET['resultats']) AND ($_GET['select']=='tous')) {
      $lignecomclis = $clientManager->searchAllLigne($_GET['resultats']);

  }else if (isset($_GET['numcomcli']) AND ($_GET['select']=='numcomcli')) {
    $lignecomclis = $clientManager->searchLigneNumCli($_GET['numcomcli']);
  }
  else if (isset($_GET['codepro']) AND ($_GET['select']=='codepro')) {
    $lignecomclis = $clientManager->searchLigneCodePro($_GET['codepro']);
  }
  else if (isset($_GET['qtecom']) AND ($_GET['select']=='qtecom')) {
    $lignecomclis = $clientManager->searchQteCom($_GET['qtecom']);
  }
  else {
    $lignecomclis = $clientManager->readAllLigneComCli();
  }
  //date and time
  $dateNow = Date('d/m/y');
  $heure = Date('H');
  $min = Date('i');
  $heureNow = $heure + 3;

 ?>
