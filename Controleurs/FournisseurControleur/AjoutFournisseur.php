<?php
/**
 * Created by PhpStorm.
 * User: Underground
 */
namespace FournisseurModele;
require_once '../../Modeles/FournisseurModele/Fournisseur.php';
require_once '../../Modeles/FournisseurModele/FournisseurManager.php';

use Fournisseur;
use FournisseurManager;

    $fournisseur = new Fournisseur();

    $fournisseur->setCodeFrs($_POST['codefrs'])
            ->setNomFrs($_POST['nomfrs'])
            ->setAdresseFrs($_POST['adressefrs']);
    $fournisseurManager = new FournisseurManager();
    $fournisseurManager->createFournisseur($fournisseur);
    header('location: ../../Views/FournisseurView/readAllFrs.php');
?>
