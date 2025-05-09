<?php 
require_once('./class/models/Animal.php');

class AnimalController
{
    public function listar()
    {     
        $servidor = 'mysql:host=localhost;dbname=prontuario_vet';
        $usuario = 'root';
        $senha = '12345';
        $lista = [];
        
        try {

            $pdo = new PDO($servidor, $usuario, $senha);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $cSQL = $pdo->prepare('select cd_animal, nm_animal, cd_especie from animal');
            $cSQL->execute();

           while ($dados = $cSQL->fetch(PDO::FETCH_ASSOC)) 
           {
                 $codigo = $dados['cd_animal'];
                 $nome = $dados['nm_animal'];
                 $codigoEspecie = $dados['cd_especie'];

                 $animal =  new Animal($codigo, $nome);
                 array_push($lista, $animal);
                 
           }
           $pdo = null; 
            
        } catch (PDOException $e) 
        {
            echo 'Erro:' . $e->getMessage();
        }
        
        return $lista;
    }
}


?>