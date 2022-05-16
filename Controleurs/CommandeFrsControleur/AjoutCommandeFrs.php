<?php
/**
 * Created by PhpStorm.
 * User: Underground
 */
namespace Controleurs;
require_once '../../Modeles/FournisseurModele/CommandeFrs.php';
require_once '../../Modeles/FournisseurModele/FournisseurManager.php';

use CommandeFrs;
use FournisseurManager;

    $commandefrs = new CommandeFrs();

    $commandefrs->setNumComFrs($_POST['numcomfrs'])
	            ->setCodeFrs($_POST['codefrs'])
	            ->setDateComFrs($_POST['datecomfrs']);
    $fournisseurManager = new FournisseurManager();
    $fournisseurManager->createCommandeFrs($commandefrs);
    header('location: ../../Views/Lignecommandfrs/readAllComFrs.php');
?>
