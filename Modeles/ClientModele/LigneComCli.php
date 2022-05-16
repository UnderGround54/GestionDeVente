<?php 

	class LigneComCli{
		private $numComCli;
		private $codePro;
		private $QteCom;

	public function getNumComCli()
	{
		return $this->numComCli;
	}
	public function setNumComCli($numComCli)
	{
		$this->numComCli = $numComCli;
      	return $this;
	}
	public function getCodePro()
	{
		return $this->codePro;
	}
	public function setCodePro($codePro)
	{
		$this->codePro = $codePro;
      	return $this;
	}
	public function getQteCom()
	{
		return $this->QteCom;
	}
	public function setQteCom($QteCom)
	{
		$this->QteCom = $QteCom;
      	return $this;
	}
}

 ?>