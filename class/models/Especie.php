<?php 

class Especie 
{
    public $codigoEspecie;
    public $nomeEspecie;
    

    public function __construct($codigoEspecie = null , $nomeEspecie = null)
    {
        $this->codigoEspecie = $codigoEspecie;
        $this->nomeEspecie = $nomeEspecie;
    }


}