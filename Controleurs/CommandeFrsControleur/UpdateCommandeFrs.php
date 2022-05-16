<?php
	namespace Controleurs;
	require_once'../../Modeles/FournisseurModele/CommandeFrs.php';
	require_once'../../Modeles/FournisseurModele/FournisseurManager.php';

	use FournisseurManager;
	USE Fournisseur;
	$fournisseurManager = new FournisseurManager();
	$fournisseur = $fournisseurManager->readCommandeFrs($_POST['numcomfrs']);
	
	$fournisseur->setNumComFrs($_POST['numcomfrs'])
        ->setCodeFrs($_POST['codefrs'])
        ->setDateComFrs($_POST['datecomfrs']);
        $fournisseurManager->updateCommandeFrs($fournisseur);
        header('location: ../../Views/Lignecommandfrs/readAllComFrs.php');
 ?>