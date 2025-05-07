<?php 

class Prontuario 
{
    public $animal;
    public $tratamento;
    public $dataTratamento;
    public $descricao;

    public function __construct($animal = null, $tratamento = null, $dataTratamento = null, $descricao = null) 
    {
        $this->animal = $animal;
        $this->tratamento = $tratamento;
        $this->dataTratamento = $dataTratamento;
        $this->descricao = $descricao;

    } 
}