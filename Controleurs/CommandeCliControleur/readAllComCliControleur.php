<?php
  namespace ClientModele;
  require_once'../../Modeles/ClientModele/CommandeCli.php';
  require_once'../../Modeles/ClientModele/ClientManager.php';
  USE CommandeCli;
  USE ClientManager;
  //recuperation des Clients
  $clientManager = new ClientManager();
  if (isset($_GET['resultats']) AND ($_GET['select']=='tous')) {
      $clients = $clientManager->searchAll($_GET['resultats']);

  }else if (isset($_GET['numcomcli']) AND ($_GET['select']=='numcomcli')) {
    $clients = $clientManager->searchNumCli($_GET['numcomcli']);
  }
  else if (isset($_GET['codecli']) AND ($_GET['select']=='codecli')) {
    $clients = $clientManager->searchCodeCli($_GET['codecli']);
  }
  else if (isset($_GET['datecomcli']) AND ($_GET['select']=='datecomcli')) {
    $clients = $clientManager->searchDateCom($_GET['datecomcli']);
  }
  else {
    $clients = $clientManager->readAllCommandeCli();
  }
  //date and time
  $dateNow = Date('d/m/y');
  $heure = Date('H');
  $min = Date('i');
  $heureNow = $heure + 3;
 ?>
