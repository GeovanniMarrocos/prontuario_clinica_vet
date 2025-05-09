<?php 
require_once('./class/controllers/AnimalController.php');
class AnimalView extends AnimalController
{
    public function ExibirTodosAnimais()
    {
        $animalController = new AnimalController();
        $listaTodosAnimais = $animalController->listar();

        foreach ($listaTodosAnimais as $listarAnimais)
        {
            echo '<div class="caixaAnimal">
                    <a href="atendimento.php">
                     <img src="images/flocos.png">    
                 <div>
                    <h1>'.$listarAnimais['nome'].'</h1>
                    <p>Dálmata</p>
                </div>
                    </a>
                </div>' ;
        } 
    }
}

?>