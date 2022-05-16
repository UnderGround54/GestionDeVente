<?php

/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 29/09/2018
 * Time: 17:56
 */
class Produit
{
    private $codePro;
    private $design;
    private $pu;
    private $stock;

    /**
     * @return mixed
     */
    public function getCodePro()
    {
        return $this->codePro;
    }

    /**
     * @param mixed $codePro
     */
    public function setCodePro($codePro)
    {
        $this->codePro = $codePro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * @param mixed $design
     */
    public function setDesign($design)
    {
        $this->design = $design;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPu()
    {
        return $this->pu;
    }

    /**
     * @param mixed $pu
     */
    public function setPu($pu)
    {
        $this->pu = $pu;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }

}
?>