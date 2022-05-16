<?php

  // namespace Client;
	class Client
  {
		private $codeCli;
		private $nomCli;
		private $adresseCli;

  	public function getCodeCli()
  	{
  		return $this->codeCli;
  	}
  	public function setCodeCli($codeCli)
  	{
  		$this->codeCli = $codeCli;
        	return $this;
  	}
  	public function getNomCli()
  	{
  		return $this->nomCli;
  	}
  	public function setNomCli($nomCli)
  	{
  		$this->nomCli = $nomCli;
        	return $this;
  	}
  	public function getAdresseCli()
  	{
  		return $this->adresseCli;
  	}
  	public function setAdresseCli($adresseCli)
  	{
  		$this->adresseCli = $adresseCli;
        	return $this;
  	}
  }

 ?>
