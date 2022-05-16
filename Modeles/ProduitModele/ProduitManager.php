<?php

// namespace Frs;
// use PDO;
// use Frs;
class ProduitManager{
	private $pdo;
	private $pdoStatement;
	public function __construct(){
		$this->pdo = new PDO('mysql:host=localhost;dbname=gestiondevente','root' ,'',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	public function createProduit(Produit &$produit){

    $this->pdoStatement= $this->pdo->prepare('SELECT codePro,design,pu,stock FROM PRODUIT WHERE codePro=:codePro');
    $this->pdoStatement->bindValue(':codePro',$produit->getCodePro(),PDO::PARAM_STR);
    $executeIsOk = $this->pdoStatement->execute();
    if ($executeIsOk) {
      $prod = $this->pdoStatement->fetchObject('PRODUIT');
      if ($prod===false) {
        $this->pdoStatement = $this->pdo->prepare('INSERT INTO PRODUIT(codePro,design,pu,stock)
                    VALUES(:codePro,:design,:pu,:stock)');
        $this->pdoStatement->bindValue(':codePro',$produit->getCodePro(),PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':design',$produit->getDesign(),PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':pu',$produit->getPu(),PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':stock',$produit->getStock(),PDO::PARAM_STR);

    		$insertIsOk = $this->pdoStatement->execute();
        if(!$insertIsOk)
    	  {
    	    return false;
    	  }else {
    	     $codePro = $this->pdo->lastInsertId();
    	     $this->readProduit($codePro);
    	        return true;
    	  }
  }else{
    return false;
    }
  }
}

public function existpro($codepro){
    $this->pdoStatement= $this->pdo->prepare('SELECT codePro,design,pu,stock FROM PRODUIT WHERE codePro=:codePro');
    $this->pdoStatement->bindValue(':codePro',$codepro,PDO::PARAM_STR);
    $executeIsOk = $this->pdoStatement->execute();
    if ($executeIsOk) {
      $produit = $this->pdoStatement->fetchObject('PRODUIT');
      if($produit === false){
        return false;
        }else {
          return true;
        }
    }else {
        return false;//indiquer une erreur
    }
}
  public function readProduit($codepro){
    $this->pdoStatement= $this->pdo->prepare('SELECT codePro,design,pu,stock FROM PRODUIT WHERE codePro=:codePro');
    $this->pdoStatement->bindValue(':codePro',$codepro,PDO::PARAM_STR);
    $executeIsOk = $this->pdoStatement->execute();
    if ($executeIsOk) {
      $produit = $this->pdoStatement->fetchObject('PRODUIT');
      if($produit === false){
        return null;
        }else {
          return $produit;
        }
    }
  }

  public function readAllProduit()
  {
    $this->pdoStatement = $this->pdo->query('SELECT codePro,design,pu,stock FROM PRODUIT');
    $resultats = [];
    while ($produit = $this->pdoStatement->fetchObject('PRODUIT')){
      $resultats[] = $produit;
    }
      return $resultats;
    }

    public function updateProduit(Produit $produit)
    {
      $this->pdoStatement = $this->pdo->prepare('UPDATE PRODUIT SET codePro =:codePro, design =:design, pu=:pu, stock =:stock  WHERE codePro =:codePro');
      $this->pdoStatement->bindValue(':codePro',$produit->getCodePro(),PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':design',$produit->getDesign() ,PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':pu',$produit->getPu(), PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':stock',$produit->getStock(),PDO::PARAM_STR);
      //execution de la requete
      return $this->pdoStatement->execute();
    }

    public function deleteProduit(Produit $produit)
    {
      $this->pdoStatement = $this->pdo->prepare('DELETE FROM PRODUIT WHERE codePro =:codePro');
      $this->pdoStatement->bindValue(':codePro',$produit->getCodePro(), PDO::PARAM_STR);
      //execution de la requete
      return $this->pdoStatement->execute();
    }


    //
     public function search($produits)
    {
    $this->pdoStatement = $this->pdo->query("SELECT codePro,design,pu,stock FROM PRODUIT WHERE codePro LIKE '%$produits%' OR design LIKE '%$produits%' OR pu LIKE '%$produits%' OR stock LIKE '%$produits%'");
    $resultats = [];
    while ($produit = $this->pdoStatement->fetchObject('PRODUIT')){
      $resultats[] = $produit;
    }
      return $resultats;
    }
     public function searchcodepro($codepro)
    {
    $this->pdoStatement = $this->pdo->query("SELECT codePro,design,pu,stock FROM PRODUIT WHERE codePro LIKE '%$codepro%'");
    $resultats = [];
    while ($produit = $this->pdoStatement->fetchObject('PRODUIT')){
      $resultats[] = $produit;
    }
      return $resultats;
    }
     public function searchdesign($design)
    {
    $this->pdoStatement = $this->pdo->query("SELECT codePro,design,pu,stock FROM PRODUIT WHERE design LIKE '%$design%'");
    $resultats = [];
    while ($produit = $this->pdoStatement->fetchObject('PRODUIT')){
      $resultats[] = $produit;
    }
      return $resultats;
    }
     public function searchpu($pu)
    {
    $this->pdoStatement = $this->pdo->query("SELECT codePro,design,pu,stock FROM PRODUIT WHERE pu LIKE '%$pu%'");
    $resultats = [];
    while ($produit = $this->pdoStatement->fetchObject('PRODUIT')){
      $resultats[] = $produit;
    }
      return $resultats;
    }
     public function searchStock($stock)
    {
    $this->pdoStatement = $this->pdo->query("SELECT codePro,design,pu,stock FROM PRODUIT WHERE stock LIKE '%$stock%'");
    $resultats = [];
    while ($produit = $this->pdoStatement->fetchObject('PRODUIT')){
      $resultats[] = $produit;
    }
      return $resultats;
    }
    //
}
 ?>
