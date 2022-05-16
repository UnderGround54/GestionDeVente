<?php

	class Fournisseur{
		private $codeFrs;
		private $nomFrs;
		private $adresseFrs;

	public function getCodeFrs()
	{
		return $this->codeFrs;
	}
	public function setCodeFrs($codeFrs)
	{
		$this->codeFrs = $codeFrs;
      	return $this;
	}
	public function getNomFrs()
	{
		return $this->nomFrs;
	}
	public function setNomFrs($nomFrs)
	{
		$this->nomFrs = $nomFrs;
      	return $this;
	}
	public function getAdresseFrs()
	{
		return $this->adresseFrs;
	}
	public function setAdresseFrs($adresseFrs)
	{
		$this->adresseFrs = $adresseFrs;
      	return $this;
	}
}
 ?>
