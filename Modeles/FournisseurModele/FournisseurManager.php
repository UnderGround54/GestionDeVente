<?php

/**
 * Created by PhpStorm.
 * User: Underground
 */
class FournisseurManager{

  private $pdo;
  private $pdoStatement;
  public function __construct(){
    $this->pdo = new PDO('mysql:host=localhost;dbname=gestiondevente','root' ,'',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }

  public function createFournisseur(Fournisseur &$fournisseur)
  {
    
    $this->pdoStatement= $this->pdo->prepare('SELECT codeFrs,nomFrs,adresseFrs FROM FOURNISSEUR WHERE
      codeFrs=:codefrs');
    $this->pdoStatement->bindValue(':codefrs',$fournisseur->getCodeFrs(),PDO::PARAM_STR);
      $executeIsOk = $this->pdoStatement->execute();
    if($executeIsOk)
    {
        $frs = $this->pdoStatement->fetchObject('FOURNISSEUR');
        if($frs===false)
        {
          $this->pdoStatement = $this->pdo->prepare('INSERT INTO FOURNISSEUR(codeFrs,nomFrs,adresseFrs)
                  VALUES(:codeFrs,:nomFrs,:adresseFrs)');
          $this->pdoStatement->bindValue(':codeFrs',$fournisseur->getCodeFrs(),PDO::PARAM_STR);
          $this->pdoStatement->bindValue(':nomFrs',$fournisseur->getNomFrs(),PDO::PARAM_STR);
          $this->pdoStatement->bindValue(':adresseFrs',$fournisseur->getAdresseFrs(),PDO::PARAM_STR);

          $insertIsOk = $this->pdoStatement->execute();
          if(!$insertIsOk)
          {
            return false;
          }else {
             $codeFrs = $this->pdo->lastInsertId();
             $this->readFournisseur($codeFrs);
             return true;
          }
      }else{
          return false;
        }
    }
}


public function exist($codefrs)
{
    $this->pdoStatement= $this->pdo->prepare('SELECT codeFrs,nomFrs,adresseFrs FROM FOURNISSEUR WHERE
      codeFrs=:codefrs');
    $this->pdoStatement->bindValue(':codefrs',$codefrs,PDO::PARAM_STR);

      $executeIsOk = $this->pdoStatement->execute();

      if ($executeIsOk) 
      {
        $frs = $this->pdoStatement->fetchObject('FOURNISSEUR');
        if($frs === false){
          return false;
        }else {
          return true;
        }
      }
      else 
      {
        return false;//indiquer une erreure
  }
}

  public function readFournisseur($codeFrs)
  {
    $this->pdoStatement= $this->pdo->prepare('SELECT codeFrs,nomFrs,adresseFrs FROM FOURNISSEUR WHERE
      codeFrs=:codeFrs');
    $this->pdoStatement->bindValue(':codeFrs',$codeFrs,PDO::PARAM_STR);
    $executeIsOk = $this->pdoStatement->execute();
    if ($executeIsOk) {
      $fournisseur = $this->pdoStatement->fetchObject('FOURNISSEUR');
      if($fournisseur === false){
        return null;
      }else {
        return $fournisseur;
      }
    }
  }

  public function readAllFournisseur()
  {
    $this->pdoStatement = $this->pdo->query('SELECT codeFrs,nomFrs,adresseFrs FROM FOURNISSEUR');
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('FOURNISSEUR')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }
  public function updateFournisseur(Fournisseur $fournisseur)
  {
    $this->pdoStatement = $this->pdo->prepare('UPDATE FOURNISSEUR SET codeFrs =:codeFrs,nomFrs =:nomFrs,adresseFrs =:adresseFrs WHERE codeFrs =:codeFrs');
    $this->pdoStatement->bindValue(':codeFrs',$fournisseur->getCodeFrs(),PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':nomFrs',$fournisseur->getNomFrs() ,PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':adresseFrs',$fournisseur->getAdresseFrs(), PDO::PARAM_STR);
    //execution de la requete
    $insertIsOk = $this->pdoStatement->execute();
      if ($insertIsOk) {
        return true;
      }
      else{
        false;
      }
  }
  public function deleteFournisseur(Fournisseur $fournisseur)
  {
    $this->pdoStatement = $this->pdo->prepare('DELETE FROM FOURNISSEUR WHERE codeFrs =:codeFrs');
    $this->pdoStatement->bindValue(':codeFrs',$fournisseur->getCodeFrs(), PDO::PARAM_STR);
    //execution de la requete
    return $this->pdoStatement->execute();
  }
  //
  
  public function searchAllFournisseur($fournisseurs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT codeFrs,nomFrs,adresseFrs FROM FOURNISSEUR WHERE codeFrs LIKE '%$fournisseurs%'  OR nomFrs LIKE '%$fournisseurs%' OR adresseFrs LIKE '%$fournisseurs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('FOURNISSEUR')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }

   public function searchCodeFrs($codefrs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT codeFrs,nomFrs,adresseFrs FROM FOURNISSEUR WHERE codeFrs LIKE '%$codefrs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('FOURNISSEUR')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }
   public function searchNomFrs($nomFrs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT codeFrs,nomFrs,adresseFrs FROM FOURNISSEUR WHERE nomFrs LIKE '%$nomFrs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('FOURNISSEUR')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }
   public function searchAdressFrs($adresseFrs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT codeFrs,nomFrs,adresseFrs FROM FOURNISSEUR WHERE adresseFrs LIKE '%$adresseFrs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('FOURNISSEUR')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }



  //


  /**
   * CommandeFrs BEGIN
   */

   public function createCommandeFrs(CommandeFrs &$commandefrs)
   {

     $this->pdoStatement= $this->pdo->prepare('SELECT numComFrs,codeFrs,dateComFrs FROM COMMANDEFRS WHERE numComFrs=:numComFrs'); 
     $this->pdoStatement->bindValue(':numComFrs',$commandefrs->getNumComFrs(),PDO::PARAM_STR);
     $searchOK=$this->pdoStatement->execute();
    if($searchOK)
    {
      $frs = $this->pdoStatement->fetchObject('COMMANDEFRS');
      if($frs===false)
      {
         $this->pdoStatement = $this->pdo->prepare('INSERT INTO COMMANDEFRS(numComFrs,codeFrs,dateComFrs)
                 VALUES(:numComFrs,:codeFrs,:dateComFrs)');
         $this->pdoStatement->bindValue(':numComFrs',$commandefrs->getNumComFrs(),PDO::PARAM_STR);
         $this->pdoStatement->bindValue(':codeFrs',$commandefrs->getcodeFrs(),PDO::PARAM_STR);
         $this->pdoStatement->bindValue(':dateComFrs',$commandefrs->getdateComFrs(),PDO::PARAM_STR);

         $insertIsOk = $this->pdoStatement->execute();
         if(!$insertIsOk)
         {
           return false;
         }else {
            $numComFrs = $this->pdo->lastInsertId();
            $this->readCommandeFrs($numComFrs);
            return true;
         }
     }
     else{
        return false;
      }
  }
}

public function existcom($numcomfrs)
{
    $this->pdoStatement= $this->pdo->prepare('SELECT numComFrs,codeFrs,dateComFrs FROM COMMANDEFRS WHERE numComFrs=:numComFrs');
     $this->pdoStatement->bindValue(':numComFrs',$numcomfrs,PDO::PARAM_STR);
     $executeIsOk = $this->pdoStatement->execute();
     if ($executeIsOk) {
       $commandefrs = $this->pdoStatement->fetchObject('COMMANDEFRS');
       if($commandefrs === false){
         return false;
       }else {
         return true;
       }
      }
      else 
      {
      return false;//indiquer une erreure
  }
}



   public function readCommandeFrs($numcomfrs)
   {
     $this->pdoStatement= $this->pdo->prepare('SELECT numComFrs,codeFrs,dateComFrs FROM COMMANDEFRS WHERE numComFrs=:numComFrs');
     $this->pdoStatement->bindValue(':numComFrs',$numcomfrs,PDO::PARAM_STR);
     $executeIsOk = $this->pdoStatement->execute();
     if ($executeIsOk) {
       $commandefrs = $this->pdoStatement->fetchObject('COMMANDEFRS');
       if($commandefrs === false){
         return null;
       }else {
         return $commandefrs;
       }
     }
   }

   public function readAllCommandeFrs()
   {
     $this->pdoStatement = $this->pdo->query('SELECT numComFrs,codeFrs,dateComFrs FROM COMMANDEFRS');
     $resultats = [];
     while ($commandefrs = $this->pdoStatement->fetchObject('COMMANDEFRS')){
       $resultats[] = $commandefrs;
     }
       return $resultats;
   }

   public function updateCommandeFrs(CommandeFrs $commandefrs)
   {
     $this->pdoStatement = $this->pdo->prepare('UPDATE COMMANDEFRS SET numComFrs =:numComFrs,codeFrs =:codeFrs,dateComFrs =:dateComFrs WHERE numComFrs =:numComFrs');
     $this->pdoStatement->bindValue(':numComFrs',$commandefrs->getNumComFrs(),PDO::PARAM_STR);
     $this->pdoStatement->bindValue(':codeFrs',$commandefrs->getCodeFrs() ,PDO::PARAM_STR);
     $this->pdoStatement->bindValue(':dateComFrs',$commandefrs->getDateComFrs(), PDO::PARAM_STR);
     //execution de la requete
     $insertIsOk = $this->pdoStatement->execute();
      if ($insertIsOk) {
        return true;
      }
      else{
        false;
      }
   }

   public function deleteCommandeFrs(CommandeFrs $commandefrs)
   {
     $this->pdoStatement = $this->pdo->prepare('DELETE FROM COMMANDEFRS WHERE numComFrs =:numComFrs');
     $this->pdoStatement->bindValue(':numComFrs',$commandefrs->getNumComFrs(), PDO::PARAM_STR);
     //execution de la requete
     return $this->pdoStatement->execute();
   }


   //
  
  public function searchAllComFrs($fournisseurs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT numComFrs,codeFrs,dateComFrs FROM COMMANDEFRS WHERE numComFrs LIKE '%$fournisseurs%'  OR numComFrs LIKE '%$fournisseurs%' OR dateComFrs LIKE '%$fournisseurs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('COMMANDEFRS')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }

   public function searchComCodeFrs($numComFrs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT numComFrs,codeFrs,dateComFrs FROM COMMANDEFRS WHERE numComFrs LIKE '%$numComFrs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('COMMANDEFRS')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }
   public function searchComNomFrs($codeFrs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT numComFrs,codeFrs,dateComFrs FROM COMMANDEFRS WHERE codeFrs LIKE '%$codeFrs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('COMMANDEFRS')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }
   public function searchComAdressFrs($dateComFrs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT numComFrs,codeFrs,dateComFrs FROM COMMANDEFRS WHERE dateComFrs LIKE '%$dateComFrs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('COMMANDEFRS')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }

  //

   /**
    * CommandeFrs END
    */

    /**
     * LIGNECommandeFrs BEGIN
     */

     public function createLigneComFrs(LigneComFrs &$lignecomfrs)
     {

         $this->pdoStatement= $this->pdo->prepare('SELECT numComFrs,codePro,QteAppro FROM LIGNECOMFRS WHERE numComFrs=:numComFrs AND codePro=:codePro');
         $this->pdoStatement->bindValue(':numComFrs',$lignecomfrs->getNumComFrs(),PDO::PARAM_STR);
         $this->pdoStatement->bindValue(':codePro',$lignecomfrs->getCodePro(),PDO::PARAM_STR);
         $searchOK=$this->pdoStatement->execute();
        if($searchOK)
        {
            $frs = $this->pdoStatement->fetchObject('LIGNECOMFRS');
            if($frs===false)
            {
              $this->pdoStatement = $this->pdo->prepare('INSERT INTO LIGNECOMFRS(numComFrs,codePro,QteAppro) VALUES(:numComFrs,:codePro,:QteAppro)');
               $this->pdoStatement->bindValue(':numComFrs',$lignecomfrs->getNumComFrs(),PDO::PARAM_STR);
               $this->pdoStatement->bindValue(':codePro',$lignecomfrs->getCodePro(),PDO::PARAM_STR);
               $this->pdoStatement->bindValue(':QteAppro',$lignecomfrs->getQteAppro(),PDO::PARAM_INT);
               $insertIsOk = $this->pdoStatement->execute();
               if(!$insertIsOk)
               {
                 return false;
               }else {
                  $codefrs = $this->pdo->lastInsertId();
                  $this->readLigneComFrs($codefrs);
                  return true;
               }
          }
       else{
          return false;
        }
  }
}

public function existligne($numcomfrs,$codepro)
{
    $this->pdoStatement= $this->pdo->prepare('SELECT numComFrs,codePro,QteAppro FROM LIGNECOMFRS WHERE numComFrs=:numComFrs AND codePro=:codePro');
    $this->pdoStatement->bindValue(':numComFrs',$numcomfrs,PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':codePro',$codepro,PDO::PARAM_STR);

      $executeIsOk = $this->pdoStatement->execute();

       if ($executeIsOk) 
       {
         $lignecomfrs = $this->pdoStatement->fetchObject('LIGNECOMFRS');
         if($lignecomfrs === false){
         return false;
        }else {
         return true;
        }
      }else {
        return false;//indiquer une erreure
    }
}

     public function readLigneComFrs($numcomfrs)
     {
       $this->pdoStatement= $this->pdo->prepare('SELECT numComFrs,codePro,QteAppro FROM LIGNECOMFRS WHERE numComFrs=:numComFrs');
       $this->pdoStatement->bindValue(':numComFrs',$numcomfrs,PDO::PARAM_STR);
       $executeIsOk = $this->pdoStatement->execute();
       if ($executeIsOk) {
         $lignecomfrs = $this->pdoStatement->fetchObject('LIGNECOMFRS');
         if($lignecomfrs === false){
           return null;
         }else {
           return $lignecomfrs;
         }
       }
     }

     public function readAllLigneComFrs()
     {
       $this->pdoStatement = $this->pdo->query('SELECT numComFrs,codePro,QteAppro FROM LIGNECOMFRS');
       $resultats = [];
       while ($lignecomfrs = $this->pdoStatement->fetchObject('LIGNECOMFRS')){
         $resultats[] = $lignecomfrs;
       }
         return $resultats;
     }

     public function updateLigneComFrs(LigneComFrs $lignecomfrs)
     {
       $this->pdoStatement = $this->pdo->prepare('UPDATE LIGNECOMFRS SET numComFrs =:numComFrs,codePro =:codePro,QteAppro =:QteAppro WHERE numComFrs =:numComFrs');
       $this->pdoStatement->bindValue(':numComFrs',$lignecomfrs->getNumComFrs(),PDO::PARAM_STR);
       $this->pdoStatement->bindValue(':codePro',$lignecomfrs->getCodePro(),PDO::PARAM_STR);
       $this->pdoStatement->bindValue(':QteAppro',$lignecomfrs->getQteAppro(),PDO::PARAM_INT);
       //execution de la requete
       $insertIsOk = $this->pdoStatement->execute();
      if ($insertIsOk) {
        return true;
      }
      else{
        false;
      }
    }

     public function deleteLigneComFrs(LigneComFrs $lignecomfrs)
     {
       $this->pdoStatement = $this->pdo->prepare('DELETE FROM LIGNECOMFRS WHERE numComFrs =:numComFrs');
        $this->pdoStatement->bindValue(':numComFrs',$lignecomfrs->getNumComFrs(),PDO::PARAM_STR);
       //execution de la requete
       return $this->pdoStatement->execute();
     }

//
     public function searchAllLComFrs($fournisseurs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT numComFrs,codePro,QteAppro FROM LIGNECOMFRS WHERE numComFrs LIKE '%$fournisseurs%'  OR codePro LIKE '%$fournisseurs%' OR QteAppro LIKE '%$fournisseurs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('LIGNECOMFRS')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }

   public function searchLnumComFrs($numComFrs)
  {
    $this->pdoStatement = $this->pdo->query("SELECT numComFrs,codePro,QteAppro FROM LIGNECOMFRS WHERE numComFrs LIKE '%$numComFrs%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('LIGNECOMFRS')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }
   public function searchLCodePro($codePro)
  {
    $this->pdoStatement = $this->pdo->query("SELECT numComFrs,codePro,QteAppro FROM LIGNECOMFRS WHERE codePro LIKE '%$codePro%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('LIGNECOMFRS')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }
   public function searchQteAppro($QteAppro)
  {
    $this->pdoStatement = $this->pdo->query("SELECT numComFrs,codePro,QteAppro FROM LIGNECOMFRS WHERE QteAppro LIKE '%$QteAppro%'");
    $resultats = [];
    while ($fournisseur = $this->pdoStatement->fetchObject('LIGNECOMFRS')){
      $resultats[] = $fournisseur;
    }
      return $resultats;
  }
  //
     /**
      * LIGNECommandeFrs END
      */
     public function readAllAppro($resultats)
    {
      $this->pdoStatement = $this->pdo->prepare("
        SELECT LIGNECOMFRS.codePro, design, QteAppro, LIGNECOMFRS.numComFrs, PRODUIT.design, COMMANDEFRS.numComFrs, FOURNISSEUR.nomFrs,COMMANDEFRS.codeFrs
        FROM PRODUIT, LIGNECOMFRS, COMMANDEFRS, FOURNISSEUR
        WHERE PRODUIT.codePro = LIGNECOMFRS.codePro
        AND COMMANDEFRS.numComFrs = LIGNECOMFRS.numComFrs
        AND FOURNISSEUR.codeFrs = COMMANDEFRS.codeFrs AND COMMANDEFRS.codeFrs=:resultats");
        $this->pdoStatement->bindValue(':resultats' , $resultats ,PDO::PARAM_INT);
        $this->pdoStatement->execute();

      $resultats =  $this->pdoStatement->fetchAll();

      return $resultats;
    }


     public function readListeFrs()
    {
      $this->pdoStatement = $this->pdo->query("
        SELECT pu,nomFrs,COMMANDEFRS.codeFrs,LIGNECOMFRS.QteAppro,SUM((LIGNECOMFRS.QteAppro*pu)) as ca
        FROM PRODUIT, LIGNECOMFRS, COMMANDEFRS, FOURNISSEUR
       WHERE PRODUIT.codePro = LIGNECOMFRS.codePro
      AND FOURNISSEUR.codeFrs = COMMANDEFRS.codeFrs
      AND LIGNECOMFRS.numComFrs = COMMANDEFRS.numComFrs GROUP BY FOURNISSEUR.codeFrs");

      $resultats =  $this->pdoStatement->fetchAll();

      return $resultats;
    }
}
?>