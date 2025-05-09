<?php 

class AnimalController
{
    public function listar()
    {     
        $servidor = 'mysql:host=localhost;dbname;prontuario_vet';
        $usuario = 'root';
        $senha = '12345';
        
        try {

            $pdo = new PDO($servidor,$usuario, $senha);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $cSQL = $pdo->prepare('select cd_animal, nm_animal, cd_especie from animal');
            $cSQL->execute();
            
        } catch (PDOException $e) 
        {
            echo 'Erro:' . $e->getMessage();
        }
        
    }
}


?>