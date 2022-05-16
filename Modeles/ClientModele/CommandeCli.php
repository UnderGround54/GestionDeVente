<?php 

	class CommandeCli{
		private $numComCli;
		private $codeCli;
		private $dateComCli;

	public function getNumComCli()
	{
		return $this->numComCli;
	}
	public function setNumComCli($numComCli)
	{
		$this->numComCli = $numComCli;
      	return $this;
	}
	public function getCodeCli()
	{
		return $this->codeCli;
	}
	public function setCodeCli($codeCli)
	{
		$this->codeCli = $codeCli;
      	return $this;
	}
	public function getDateComCli()
	{
		return $this->dateComCli;
	}
	public function setDateComCli($dateComCli)
	{
		$this->dateComCli = $dateComCli;
      	return $this;
	}
}

 ?>