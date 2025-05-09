<?php 

class AnimalView
{
    public function ExibirTodosAnimais()
    {
        $animalController = new AnimalController();
        $listaTodosAnimais = $animalController->listar();

        for ($i = 0; $i < count($listaTodosAnimais); $i++)
        {
            echo "<h2>{$listaTodosAnimais[$i]->nome}</h2>";
        }
    }
}

?>