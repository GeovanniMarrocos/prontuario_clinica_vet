<?php

session_start();

require_once('./class/controllers/AnimalController.php');
require_once('./vendor/autoload.php');
require_once('config.php');
require_once('./class/views/AnimalView.php');

$buscar = false;
$valor = "";

if (isset($_GET['valorBusca'])) 
{
    $buscar = true;
    if($_GET['valorBusca'] != "")
    {
        $valor = $_GET['valorBusca'];
    }

}


?>

<?php include('./templates/header.php')?>

<form class=" container" id="area-busca" action="index.php" method="get">
        <input type="text" name="valorBusca" placeholder="Informe nome do animal">
        <button type="submit">Buscar</button>     
</form>

    <section id="resultados">
  
  <?php   
            if($buscar == true)
            {
                $objAnimal = new AnimalView();
                $objAnimal->ExibirTodosAnimais();
            }
            
   ?>
    </section> 
   <?php include('./templates/footer.php')?>