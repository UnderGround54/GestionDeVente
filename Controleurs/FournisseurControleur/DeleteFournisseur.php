<?php 
	namespace Controleurs;
	require_once '../../Modeles/FournisseurModele/Fournisseur.php';
	require_once '../../Modeles/FournisseurModele/FournisseurManager.php';

	use FournisseurManager;

	$fournisseurmanager = new FournisseurManager();
	$fournisseur = $fournisseurmanager->readFournisseur($_GET['codefrs']);
	$fournisseurmanager->deleteFournisseur($fournisseur);
	header('location: ../../Views/FournisseurView/readAllFrs.php');
 ?>
