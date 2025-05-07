<?php 

class Prontuario 
{
    public $codigo;
    public $codigo_tratamento;
    public $data_tratamento;
    public $descricao;

    public function __construct($codigo = null, $codigo_tratamento = null, $data_tratamento = null, $descricao = null) 
    {
        $this->codigo = $codigo;
        $this->codigo_tratamento = $codigo_tratamento;
        $this->data_tratamento = $data_tratamento;
        $this->descricao = $descricao;

    } 
}