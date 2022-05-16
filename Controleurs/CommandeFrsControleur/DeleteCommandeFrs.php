<?php
	namespace Controleurs;
	require_once '../../Modeles/FournisseurModele/CommandeFrs.php';
	require_once '../../Modeles/FournisseurModele/FournisseurManager.php';

	use FournisseurManager;
	use CommandeFrs;
	$fournisseurmanager = new FournisseurManager();
	$fournisseur = $fournisseurmanager->readCommandeFrs($_GET['numcomfrs']);
	$fournisseurmanager->deleteCommandeFrs($fournisseur);
	header('location: ../../Views/Lignecommandfrs/readAllComFrs.php');
 ?>
