<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="icon" type="image/x-icon" href="./img/icon.ico">
        <title> ::: Sabores Surpreendentes :::</title>
    </head>
    <body>
        <div class="fundo">

            <div class="container">
                <img src="./img/logoverde.png" alt="logo Sabores Surpreendentes" class="logo">
                <?php require_once("./_menu.php"); ?>
            </div>
    
            <div class="tituloFundo">
                <h1>Receitas</h1>
            </div>


            <div class="corpo">
                
                <?php // PHP
                    require_once("./visualizacaobd.php");
                    if($totalRegistros > 0){
                        foreach($dados as $linha){
                ?>

                <div class="card">
                    <h2 class="titulo"><?=$linha["titulo"];?></h2>
                    <p><strong>Ingredientes:</strong><br> <?= nl2br($linha["ingredientes"]); ?></p>
                    <p><strong>Modo de Preparo:</strong><br> <?= nl2br($linha["modoPreparo"]); ?></p>
                    <p class="textocard">
                            <img class="icon" src="./img/pessoas.png" alt="Quantidade de pessoas">
                            <span class="tooltip1">Quantidade de pessoas</span> 
                            <?=$linha["qtdePessoas"];?>
                    </p>
                    <p class="textocard">
                        <img class="icon" src="./img/tempo.png" alt="Tempo de preparo">
                        <span class="tooltip1">Tempo de preparo</span>
                        <span class="tempopreparo"><?=$linha["tempoPreparo"];?></span>
                    </p>

                    <div class="btnDireita">

                        <form action="./editar.php?idReceita=<?=$linha['idReceita'];?>" method="post">
                            <button type="submit">
                                <img src="./img/editar.png" alt="Editar">
                                <span class="tooltip">Editar</span>
                                
                            </button>
                        </form>

                        <form action="./excluir.php?idReceita=<?=$linha['idReceita'];?>" method="post">
                            <button type="submit">
                                <img src="./img/excluir.png" alt="Editar">
                                <span class="tooltip">Excluir</span>
                                
                            </button>
                        </form>

                    </div>
                    
                </div>

                <?php
                        }
                    } else {
                        echo "<p>Nenhuma receita encontrada.</p>";
                    }
                ?>

            </div>
        </div>
    </body>
</html>