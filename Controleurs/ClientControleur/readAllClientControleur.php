<?php
  namespace Controleurs;
  require_once'../../Modeles/ClientModele/ClientManager.php';
  require_once'../../Modeles/ClientModele/Client.php';
  USE Client;
  USE ClientManager;
  //recuperation des clients
  $clientManager = new ClientManager();
  if (isset($_GET['resultats']) AND ($_GET['select']=='tous')) {
      $clients = $clientManager->search($_GET['resultats']);

  }else if (isset($_GET['numero']) AND ($_GET['select']=='numero')) {
    $clients = $clientManager->searchNumero($_GET['numero']);
  }
  else if (isset($_GET['nom']) AND ($_GET['select']=='nom')) {
    $clients = $clientManager->searchNom($_GET['nom']);
  }
  else if (isset($_GET['adresse']) AND ($_GET['select']=='adresse')) {
    $clients = $clientManager->searchAdresse($_GET['adresse']);
  }
  else {
    $clients = $clientManager->readAllClient();
  }
  //date and time
  $dateNow = Date('d/m/y');
  $heure = Date('H');
  $min = Date('i');
  $heureNow = $heure + 3;

 ?>
