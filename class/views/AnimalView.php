<?php
require_once("./class/controllers/AnimalController.php");


class AnimalView
{
    public function ExibirTodosAnimais()
    {
        $animalController = new AnimalController();
        $listaTodosAnimais = $animalController->listar();

        for ($i = 0; $i < count($listaTodosAnimais); $i++) {
            echo "<div class='caixaAnimal'>
                    <a href='atendimento.php'>
                    <img src='./images/{$listaTodosAnimais[$i]->nome}.png'>    
                    <div>
                        <h1>{$listaTodosAnimais[$i]->nome}</h1>
                        <p>{$listaTodosAnimais[$i]->especie->nome}</p>
                    </div>
                    </a>
                </div>";
        }
    }

    public function BuscarPeloNome($nome)
    {
        $animalController = new AnimalController();
        $listaNomesDosAnimais = $animalController->BuscarPeloNome($nome);

        if (count($listaNomesDosAnimais) == 0) 
        {
            echo "<div class='d-md-flex justify-content-md-center'>
                 <p class=' alert alert-danger justify-content-md-center border-danger mb-3 text-center'> Não existem animais com esse nome em nossos sistemas </p>
                 </div>";  
           
        } 
        else 
        
        {
            for ($i = 0; $i < count($listaNomesDosAnimais); $i++) 
            {

                echo "<div class='caixaAnimal'>
                    <a href='atendimento.php'>
                    <img src='./images/{$listaNomesDosAnimais[$i]->nome}.png'>    
                    <div>
                        <h1>{$listaNomesDosAnimais[$i]->nome}</h1>
                        <p>{$listaNomesDosAnimais[$i]->especie->nome}</p>
                    </div>
                    </a>
                </div>";
            }
        }
    }
}
