<?php 
require_once('./class/controllers/AnimalController.php');
require_once('./vendor/autoload.php');
require_once('./helpers/url.php');
require_once('config.php');
require_once('./class/views/AnimalView.php');
?>

<?php include('./templates/header.php')?>
<section class=" container" id="area-busca">
        <input type="text" placeholder="Informe nome do animal">
        <button>Buscar</button>
</section>

    <section id="resultados">
   <?php 
            $objAnimal = new AnimalView();
            $objAnimal->ExibirTodosAnimais();
   ?>

     <!-- <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/brutus.png">    
                <div>
                    <h1>Brutus</h1>
                    <p>Buldog</p>
                </div>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/flocos.png">    
                <div>
                    <h1>Flocos</h1>
                    <p>Dálmata</p>
                </div>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/Luna.png">    
                <div>
                    <h1>Luna</h1>
                    <p>Tabby Listrado</p>
                </div>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/Meg.png">    
                <div>
                    <h1>Meg</h1>
                    <p>Beagle</p>
                </div>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/rico.png">    
                <div>
                    <h1>Rico</h1>
                    <p>Californiano</p>
                </div>
            </a>
        </div>

        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/tico.png">    
                <div>
                    <h1>Tico</h1>
                    <p>Fox Paulistinha</p>
                </div>
            </a>
        </div> -->
    </section> 
   <?php include('./templates/footer.php')?>