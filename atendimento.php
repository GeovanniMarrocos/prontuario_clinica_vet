<?php 
require_once("./vendor/autoload.php");
require_once("./helpers/url.php");
require_once("config.php");
?>


<?php include_once("./templates/header.php");?>
    <section id="area-titulo">
        <h1>Atendimento</h1>
        <a href="index.html" class="botao">Voltar</a>
    </section>

    <section id="area-tratamento">
        <h1>Registro de atendimento</h1>
        <form>
            <div class="item-form">
                <label>Nome do animal:</label>
                <input type="text" disabled>
            </div>

            <div class="item-form">
                <label>Data:</label>
                <input type="date" value="2024-08-04">
            </div>

            <div class="item-form">
                <label>Tratamento:</label>
                <select>
                    <option selected disabled>Selecione o Tratamento</option>
                </select>
            </div>

            <div class="item-form-bloco">
                <label>Descrição do Tratamento:</label>
                <textarea rows="2" disabled>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere ducimus saepe eum ea id, ex, deleniti non repellendus impedit provident laborum perferendis excepturi voluptate voluptatum magnam dolor rerum, laudantium velit?</textarea>
            </div>

            <div class="item-form-bloco">
                <label>Descrição do Atendimento:</label>
                <textarea rows="6"></textarea>
            </div>

            <button class="botao">Salvar</button>
        </form>
    </section>

    <section id="area-historico">
        <h1>Histórico</h1>
        <table>
            <thead>
                <th>Data</th>
                <th>Tratamento</th>
                <th>Descrição do Tratamento</th>
            </thead>
            <tbody>
                <tr>
                    <td class="data">30/08/2024 às 11:35</td>
                    <td>Vermifugação</td>
                    <td>Houve reação alérgica e foi adminitrado Apoquel 6g</td>
                </tr>
                <tr>
                    <td class="data">30/08/2024 às 11:30</td>
                    <td>Vacina Antirrábica</td>
                    <td>Renovar em 1 ano</td>
                </tr>
            </tbody>
        </table>
    </section>
<?php include_once("./templates/footer.php");?>