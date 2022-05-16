<?php
	namespace Controleurs;
	require_once'../../Modeles/FournisseurModele/Fournisseur.php';
	require_once'../../Modeles/FournisseurModele/FournisseurManager.php';

	use FournisseurManager;
	USE Fournisseur;
	$fournisseurManager = new FournisseurManager();
	$fournisseur = $fournisseurManager->readFournisseur($_POST['codefrs']);
	
	$fournisseur->setCodeFrs($_POST['codefrs'])
        ->setNomFrs($_POST['nomfrs'])
        ->setAdresseFrs($_POST['adressefrs']);
        $fournisseurManager->updateFournisseur($fournisseur);
        header('location: ../../Views/FournisseurView/readAllFrs.php');
 ?>