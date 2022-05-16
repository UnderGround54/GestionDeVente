<?php
/**
 * Created by PhpStorm.
 * User: Underground
 * 
 */
namespace Controleurs;
require_once '../../Modeles/ProduitModele/Produit.php';
require_once '../../Modeles/ProduitModele/ProduitManager.php';

use Produit;
use ProduitManager;

    $produit = new Produit();
    $produit->setCodePro($_POST['codepro'])
            ->setPu($_POST['pu'])
            ->setDesign($_POST['design'])
            ->setStock($_POST['stock']);
    $produitManager = new ProduitManager();
    $produitManager->createProduit($produit);
     header('location: ../../Views/ProduitView/readAllPro.php');
?>
