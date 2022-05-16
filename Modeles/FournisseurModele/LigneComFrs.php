<?php 

	class LigneComFrs{
		private $numComFrs;
		private $codePro;
		private $QteAppro;

	public function getNumComFrs()
	{
		return $this->numComFrs;
	}
	public function setNumComFrs($numComFrs)
	{
		$this->numComFrs = $numComFrs;
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
	public function getQteAppro()
	{
		return $this->QteAppro;
	}
	public function setQteAppro($QteAppro)
	{
		$this->QteAppro = $QteAppro;
      	return $this;
	}
}

 ?>