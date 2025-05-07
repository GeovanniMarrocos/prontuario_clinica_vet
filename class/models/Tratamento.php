<?php 

class Tratamento
{
    public $codigo;
    public $nome;
    public $descricao;
    

    public function __construct( $codigo = null, $nome = null)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
    }

}