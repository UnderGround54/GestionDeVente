<?php 
	namespace Controleurs;
	require_once'../../Modeles/FournisseurModele/FournisseurManager.php';
  	require_once'../../Modeles/FournisseurModele/LigneComFrs.php';

  	USE LigneComFrs;
  	USE FournisseurManager;
  //recuperation des lignecomFrss
    $FournisseurManager = new FournisseurManager();
  	$fournisseurs = $FournisseurManager->readListeFrs();
  	
 ?>