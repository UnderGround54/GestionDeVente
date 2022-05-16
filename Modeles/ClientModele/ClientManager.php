<?php

// namespace Client;
// use PDO;
// use Client;
class ClientManager{
	private $pdo;
	private $pdoStatement;
	public function __construct(){
		$this->pdo = new PDO('mysql:host=localhost;dbname=gestiondevente','root' ,'',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}

	//Clientmanager BEGIN


  public function createClient(Client &$client){
  $this->pdoStatement = $this->pdo->prepare('SELECT codeCli,nomCli,adresseCli FROM CLIENT WHERE codeCli=:codeCli');
  $this->pdoStatement->bindValue(':codeCli',$client->getCodeCli(),PDO::PARAM_STR);

  $searchOK=$this->pdoStatement->execute();
  if($searchOK)
  {
    $clien = $this->pdoStatement->fetchObject('Client');
    if($clien===false)
    {
      $this->pdoStatement = $this->pdo->prepare('INSERT INTO CLIENT(codeCli,nomCli,adresseCli)
                      VALUES(:codeCli,:nomCli,:adresseCli)');
      $this->pdoStatement->bindValue(':codeCli',$client->getCodeCli(),PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':nomCli',$client->getNomCli(),PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':adresseCli',$client->getAdresseCli(),PDO::PARAM_STR);

      $insertIsOk = $this->pdoStatement->execute();
      if(!$insertIsOk)
      {
        return false;
      }else {
        $codeCli = $this->pdo->lastInsertId();
        $this->readClient($codeCli);
        return true;
      }
    }
    else{
      return false;
    }
  }
}

    public function exist($codecli)
    {
      $this->pdoStatement= $this->pdo->prepare('SELECT codeCli,nomCli,adresseCli FROM CLIENT WHERE codeCli=:codeCli');
      $this->pdoStatement->bindValue(':codeCli',$codecli,PDO::PARAM_STR);
      $executeIsOk = $this->pdoStatement->execute();
      if ($executeIsOk) 
      {
        $client = $this->pdoStatement->fetchObject('Client');
        if($client === false){
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

//end
	// public function createClient(Client &$client){
 //  	$this->pdoStatement = $this->pdo->prepare('INSERT INTO CLIENT(codeCli,nomCli,adresseCli)
 //                VALUES(:codeCli,:nomCli,:adresseCli)');
 //    $this->pdoStatement->bindValue(':codeCli',$client->getCodeCli(),PDO::PARAM_STR);
 //    $this->pdoStatement->bindValue(':nomCli',$client->getNomCli(),PDO::PARAM_STR);
 //    $this->pdoStatement->bindValue(':adresseCli',$client->getAdresseCli(),PDO::PARAM_STR);

	// 	$insertIsOk = $this->pdoStatement->execute();
	//     if(!$insertIsOk)
	//     {
	//     	return false;
	//     }else {
	//         $codeCli = $this->pdo->lastInsertId();
	//         $this->readClient($codeCli);
	//         return true;
	//     }
 //    }
    public function readClient($codecli){
    	$this->pdoStatement= $this->pdo->prepare('SELECT codeCli,nomCli,adresseCli FROM CLIENT WHERE codeCli=:codeCli');
      $this->pdoStatement->bindValue(':codeCli',$codecli,PDO::PARAM_STR);

      $executeIsOk = $this->pdoStatement->execute();
      if ($executeIsOk) {
      	$client = $this->pdoStatement->fetchObject('Client');
      	if($client === false){
      		return null;
      	}else {
      		return $client;
      	}
    	}else {
        return false;//indiquer une erreure
      }
		}

    public function readAllClient()
    {
        $this->pdoStatement = $this->pdo->query('SELECT codeCli,nomCli,adresseCli FROM CLIENT');
        $resultats = [];
        while ($client = $this->pdoStatement->fetchObject('Client')){
            $resultats[] = $client;
        }
        return $resultats;
    }


//

    public function search($clients)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT codeCli,nomCli,
        adresseCli FROM CLIENT WHERE codeCli LIKE '%$clients%' OR nomCli LIKE '%$clients%' OR adresseCli LIKE '%$clients%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('CLIENT')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }


    public function searchNom($nomCli)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT codeCli,nomCli,
        adresseCli FROM CLIENT WHERE nomCli LIKE '%$nomCli%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('CLIENT')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

     public function searchNumero($codeCli)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT codeCli,nomCli,
        adresseCli FROM CLIENT WHERE codeCli LIKE '%$codeCli%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('CLIENT')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

     public function searchAdresse($adresseCli)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT codeCli,nomCli,
        adresseCli FROM CLIENT WHERE adresseCli LIKE '%$adresseCli%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('CLIENT')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

//

    public function updateClient(Client $client)
    {

    	$this->pdoStatement = $this->pdo->prepare('UPDATE CLIENT SET codeCli=:codeCli,nomCli=:nomCli,adresseCli =:adresseCli WHERE codeCli =:codeCli LIMIT 1');
      $this->pdoStatement->bindValue(':codeCli',$client->getCodeCli(),PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':nomCli',$client->getNomCli(),PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':adresseCli',$client->getAdresseCli(), PDO::PARAM_STR);
            //execution de la requete
      $insertIsOk = $this->pdoStatement->execute();
      if ($insertIsOk) {
        return true;
      }
      else{
        false;
      }
  	}

    public function deleteClient(Client $client)
    {
    	$this->pdoStatement = $this->pdo->prepare('DELETE FROM CLIENT WHERE codeCli =:codeCli');
      $this->pdoStatement->bindValue(':codeCli',$client->getCodeCli(), PDO::PARAM_STR);
            //execution de la requete
      return $this->pdoStatement->execute();

    }
		//Clientmanager END


  /**
   * CommandeCli
   *
   */
  //COMMANDECli BEGIN
  public function createCommandeCli(CommandeCli &$commandeCli)
  {

    $this->pdoStatement= $this->pdo->prepare('SELECT numComCli,codeCli,dateComCli FROM COMMANDECLI WHERE numComCli=:numComCli');
    $this->pdoStatement->bindValue(':numComCli',$commandeCli->getNumComCli(),PDO::PARAM_STR);
     $searchOK=$this->pdoStatement->execute();
    if($searchOK)
    {
      $clien = $this->pdoStatement->fetchObject('COMMANDECLI');
      if($clien===false)
      {
      $this->pdoStatement = $this->pdo->prepare('INSERT INTO COMMANDECLI(numComCli,codeCli,dateComCli)
                  VALUES(:numComCli,:codeCli,:dateComCli)');
      $this->pdoStatement->bindValue(':numComCli',$commandeCli->getNumComCli(),PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':codeCli',$commandeCli->getCodeCli(),PDO::PARAM_STR);
      $this->pdoStatement->bindValue(':dateComCli',$commandeCli->getDateComCli(),PDO::PARAM_STR);

      $insertIsOk = $this->pdoStatement->execute();
      if(!$insertIsOk)
      {
        return false;
      }else {
         $numComCli = $this->pdo->lastInsertId();
         $this->readCommandeCli($numComCli);
         return true;
      }
    }else{
          return false;
      }
  }
}
  public function existcomcli($numcomCli)
  {
    $this->pdoStatement= $this->pdo->prepare('SELECT numComCli,codeCli,dateComCli FROM COMMANDECLI WHERE numComCli=:numComCli');
    $this->pdoStatement->bindValue(':numComCli',$numcomCli,PDO::PARAM_STR);
    $executeIsOk = $this->pdoStatement->execute();
    if ($executeIsOk) {

      $commandeCli = $this->pdoStatement->fetchObject('COMMANDECLI');
      if($commandeCli === false){
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

  public function readCommandeCli($numcomCli)
  {
    $this->pdoStatement= $this->pdo->prepare('SELECT numComCli,codeCli,dateComCli FROM COMMANDECLI WHERE numComCli=:numComCli');
    $this->pdoStatement->bindValue(':numComCli',$numcomCli,PDO::PARAM_STR);
    $executeIsOk = $this->pdoStatement->execute();
    if ($executeIsOk) {
      $commandeCli = $this->pdoStatement->fetchObject('COMMANDECLI');
      if($commandeCli === false){
        return null;
      }else {
        return $commandeCli;
      }
    }
  }

  public function readAllCommandeCli()
  {
    $this->pdoStatement = $this->pdo->query('SELECT numComCli,codeCli,dateComCli FROM COMMANDECLI');
    $resultats = [];
    while ($commandeCli = $this->pdoStatement->fetchObject('COMMANDECLI')){
      $resultats[] = $commandeCli;
    }
      return $resultats;
  }


  //

    public function searchAll($comClis)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT numComCli,codeCli,
        dateComCli FROM COMMANDECLI WHERE numComCli LIKE '%$comClis%' OR codeCli LIKE '%$comClis%' OR dateComCli LIKE '%$comClis%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('COMMANDECLI')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }


    public function searchNumCli($numComCli)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT numComCli,codeCli,
        dateComCli FROM COMMANDECLI WHERE numComCli LIKE '%$numComCli%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('COMMANDECLI')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

     public function searchCodeCli($codeCli)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT numComCli,codeCli,
        dateComCli FROM COMMANDECLI WHERE codeCli LIKE '%$codeCli%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('COMMANDECLI')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

     public function searchDateCom($dateComCli)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT numComCli,codeCli,
        dateComCli FROM COMMANDECLI WHERE dateComCli LIKE '%$dateComCli%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('COMMANDECLI')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

//

  public function updateCommandeCli(CommandeCli $commandeCli)
  {
    $this->pdoStatement = $this->pdo->prepare('UPDATE COMMANDECLI SET numComCli =:numComCli,codeCli =:codeCli,dateComCli =:dateComCli WHERE numComCli =:numComCli');
    $this->pdoStatement->bindValue(':numComCli',$commandeCli->getNumComCli(),PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':codeCli',$commandeCli->getCodeCli() ,PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':dateComCli',$commandeCli->getDateComCli(), PDO::PARAM_STR);
    //execution de la requete
    $insertIsOk = $this->pdoStatement->execute();
      if ($insertIsOk) {
        return true;
      }
      else{
        false;
      }
  }

  public function deleteCommandeCli(CommandeCli $commandeCli)
  {
    $this->pdoStatement = $this->pdo->prepare('DELETE FROM COMMANDECLI WHERE numComCli =:numComCli');
    $this->pdoStatement->bindValue(':numComCli',$commandeCli->getNumComCli(), PDO::PARAM_STR);
    //execution de la requete
    return $this->pdoStatement->execute();
  }

  //COMMANDECLI END

  /**
   * LigneligneComCli
   *
   */

  //LIGNECOMCli BEGIN
  public function createLigneComCli(LigneComCli &$lignecomCli)
  {
    $this->pdoStatement= $this->pdo->prepare('SELECT numComCli,codePro,QteCom FROM LIGNECOMClI WHERE numComCli=:numComCli AND codePro=:codePro');
    $this->pdoStatement->bindValue(':numComCli',$lignecomCli->getNumComCli(),PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':codePro',$lignecomCli->getCodePro(),PDO::PARAM_STR);

    $executeIsOk = $this->pdoStatement->execute();

    if ($executeIsOk) {
      $clien = $this->pdoStatement->fetchObject('LIGNECOMClI');
      if($clien===false)
        {
        $this->pdoStatement = $this->pdo->prepare('INSERT INTO LIGNECOMClI(numComCli,codePro,QteCom)
                    VALUES(:numComCli,:codePro,:QteCom)');
        $this->pdoStatement->bindValue(':numComCli',$lignecomCli->getNumComCli(),PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':codePro',$lignecomCli->getCodePro(),PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':QteCom',$lignecomCli->getQteCom(),PDO::PARAM_INT);

        $insertIsOk = $this->pdoStatement->execute();
        if(!$insertIsOk)
        {
          return false;
        }else {
           $numComCli = $this->pdo->lastInsertId();
           $this->readLigneComCli($numComCli);
           return true;
        }
  }else{
      return false;
    }

  }
}


 public function existcomligne($numcomCli,$codePro)
  {
    $this->pdoStatement= $this->pdo->prepare('SELECT numComCli,codePro,QteCom FROM LIGNECOMClI WHERE numComCli=:numComCli AND codePro=:codePro');
    $this->pdoStatement->bindValue(':numComCli',$numcomCli,PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':codePro',$codePro,PDO::PARAM_STR);
    $executeIsOk = $this->pdoStatement->execute();
    if ($executeIsOk) {

      $lignecomCli = $this->pdoStatement->fetchObject('LIGNECOMClI');
      if($lignecomCli === false){
          return false;
        }else {
          return true;
        }
      }else{
        return false;//indiquer une erreure
        }
    }


  public function readLigneComCli($numcomCli)
  {
    $this->pdoStatement= $this->pdo->prepare('SELECT numComCli,codePro,QteCom FROM LIGNECOMClI WHERE numComCli=:numComCli');
    $this->pdoStatement->bindValue(':numComCli',$numcomCli,PDO::PARAM_STR);
    $executeIsOk = $this->pdoStatement->execute();
    if ($executeIsOk) {
      $lignecomCli = $this->pdoStatement->fetchObject('LIGNECOMClI');
      if($lignecomCli === false){
        return null;
      }else {
        return $lignecomCli;
      }
    }
  }


  public function readAllLigneComCli()
  {
    $this->pdoStatement = $this->pdo->query('SELECT numComCli,codePro,QteCom FROM LIGNECOMClI');
    $resultats = [];
    while ($lignecomCli = $this->pdoStatement->fetchObject('LIGNECOMClI')){
      $resultats[] = $lignecomCli;
    }
      return $resultats;
  }

  public function updateLigneComCli(LigneComCli $lignecomCli)
  {
    $this->pdoStatement = $this->pdo->prepare('UPDATE LIGNECOMClI SET numComCli =:numComCli,codePro =:codePro,QteCom =:QteCom WHERE numComCli =:numComCli AND codePro =:codePro');
    $this->pdoStatement->bindValue(':numComCli',$lignecomCli->getNumComCli(),PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':codePro',$lignecomCli->getCodePro(),PDO::PARAM_STR);
    $this->pdoStatement->bindValue(':QteCom',$lignecomCli->getQteCom(),PDO::PARAM_INT);
    //execution de la requete
    $insertIsOk = $this->pdoStatement->execute();
      if ($insertIsOk) {
        return true;
      }
      else{
        false;
      }
  }

  public function deleteLigneComCli(LigneComCli $lignecomCli)
  {
    $this->pdoStatement = $this->pdo->prepare('DELETE FROM LIGNECOMClI WHERE numComCli =:numComCli');
     $this->pdoStatement->bindValue(':numComCli',$lignecomCli->getNumComCli(),PDO::PARAM_STR);
    //execution de la requete
    return $this->pdoStatement->execute();
  }


  //

    public function searchAllLigne($lignecomClis)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT numComCli,codePro,QteCom FROM LIGNECOMClI WHERE numComCli LIKE '%$lignecomClis%' OR codePro LIKE '%$lignecomClis%' OR QteCom LIKE '%$lignecomClis%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('LIGNECOMClI')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }


    public function searchQteCom($QteCom)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT numComCli,codePro,QteCom FROM LIGNECOMClI WHERE QteCom LIKE '%$QteCom%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('LIGNECOMClI')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

     public function searchLigneNumCli($numComCli)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT numComCli,codePro,QteCom FROM LIGNECOMClI WHERE numComCli LIKE '%$numComCli%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('LIGNECOMClI')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

     public function searchLigneCodePro($codePro)//recupere tous les objet dans bd
    {
       $this->pdoStatement = $this->pdo->query("SELECT numComCli,codePro,QteCom FROM LIGNECOMClI WHERE codePro LIKE '%$codePro%'");

      //conctruction de tableaux d'objet de type resultats
       $resultats = [];

       while($clients = $this->pdoStatement->fetchObject('LIGNECOMClI')) 
       {
          $resultats[] = $clients;
       }
       return $resultats;
    }

//
  //LIGNECOMCli END

    public function readListeClient()
    {
        $this->pdoStatement = $this->pdo->query("SELECT COMMANDECLI.codeCli,nomCli, SUM((LIGNECOMCLI.QteCom*pu)) as ca
                                                FROM CLIENT, PRODUIT, LIGNECOMCLI, COMMANDECLI
                                                WHERE PRODUIT.codePro = LIGNECOMCLI.codePro
                                                AND CLIENT.codeCli = COMMANDECLI.codeCli
                                                AND COMMANDECLI.numComCli = LIGNECOMCLI.numComCli GROUP BY CLIENT.codeCli");
         $resultats =  $this->pdoStatement->fetchAll();

      return $resultats;
    }

    public function factureClient($resultats)
    {
        $this->pdoStatement = $this->pdo->prepare("SELECT COMMANDECLI.codeCli,design,nomCli,PRODUIT.pu,LIGNECOMCLI.QteCom
                                                FROM CLIENT, PRODUIT, LIGNECOMCLI, COMMANDECLI
                                                WHERE PRODUIT.codePro = LIGNECOMCLI.codePro
                                                AND CLIENT.codeCli = COMMANDECLI.codeCli
                                                AND COMMANDECLI.numComCli = LIGNECOMCLI.numComCli 
                                                AND COMMANDECLI.codeCli=:resultats");
        $this->pdoStatement->bindValue(':resultats',$resultats ,PDO::PARAM_INT);
        $this->pdoStatement->execute();
         $resultats =  $this->pdoStatement->fetchAll();

      return $resultats;
    }


}
?>
