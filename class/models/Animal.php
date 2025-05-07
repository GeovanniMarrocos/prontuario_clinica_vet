<?php 


class Animal extends Especie {

    public $codigo;
    public $nome;
    public $especie;

    public function __construct($codigo = null, $nome = null, Especie $especie = null) 
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->especie = $especie;

        if (empty($especie)) {
            $this->especie = $especie;        
        }
        else{
            $this->especie = new Especie();
        }
    
    } 
    
}