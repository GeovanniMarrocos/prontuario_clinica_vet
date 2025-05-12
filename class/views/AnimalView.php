<?php
require_once("./class/controllers/AnimalController.php");


class AnimalView
{
    public function ExibirTodosAnimais()
    {
        $animalController = new AnimalController();
        $listaTodosAnimais = $animalController->listar();

        for($i = 0; $i < count($listaTodosAnimais); $i++)
        {
           
            echo "<div class='caixaAnimal'>
                    <a href='atendimento.php'>
                    <img src='./images/{$listaTodosAnimais[$i]->nome}.png'>    
                    <div>
                        <h1>{$listaTodosAnimais[$i]->nome}</h1>
                        <p>{$listaTodosAnimais[$i]->especie}</p>
                    </div>
                    </a>
                </div>";
                
        }
    }
}

?>