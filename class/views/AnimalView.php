<?php 

class AnimalView
{
    public function ExibirTodosAnimais()
    {
        $animalController = new AnimalController();
        $listaTodosAnimais = $animalController->listar();

        for ($i = 0; $i < count($listaTodosAnimais); $i++)
        {
           echo '<div class="caixaAnimal">
                    <a href="atendimento.php">
                    <img src="images/flocos.png">    
                <div>
                    <h1>Flocos</h1>
                    <p>Dálmata</p>
                </div>
                    </a>
                </div';
        }
    }
}

?>