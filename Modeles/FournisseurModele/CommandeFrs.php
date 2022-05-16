<?php 

	class CommandeFrs{
		private $numComFrs;
		private $codeFrs;
		private $dateComFrs;

	public function getNumComFrs()
	{
		return $this->numComFrs;
	}
	public function setNumComFrs($numComFrs)
	{
		$this->numComFrs = $numComFrs;
      	return $this;
	}
	public function getCodeFrs()
	{
		return $this->codeFrs;
	}
	public function setCodeFrs($codeFrs)
	{
		$this->codeFrs = $codeFrs;
      	return $this;
	}
	public function getDateComFrs()
	{
		return $this->dateComFrs;
	}
	public function setDateComFrs($dateComFrs)
	{
		$this->dateComFrs = $dateComFrs;
      	return $this;
	}
}
?>