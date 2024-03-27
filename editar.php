<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::: Editar :::</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="fundo">
        <div class="container">
        <img src="./img/logoverde.png" alt="logo Sabores Surpreendentes" class="logo">
            <?php require_once("./_menu.php"); ?>
        </div>

        <div class="tituloFundo">
            <h1>Faça as mudanças na receita...</h1>
        </div>

        <?php
            require_once("./editarbd_view.php");
        ?>

        <div class="formulario">

            <!-- post: (protocolo via http) esconde a URL > MAIS SEGURO -->
            <!-- get: não "esconde" na URL -->
            <form action="editarbd.php" method="post">
                <input type="hidden" name="idReceita" value="<?php echo $retorno['idReceita']; ?>">
                <div class="row">
                    <div class="col">
                        <label for="titulo"><strong>Título da receita</strong></label>    <!-- for = id -->
                        <input 
                            type="text" 
                            name="titulo" 
                            id="titulo" 
                            placeholder="Título da receita"
                            value = "<?=$retorno['titulo'];?>">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <label for="ingredientes"><strong>Ingredientes</strong></label>
                        <textarea name="ingredientes" id="ingredientes" rows="4" cols="1"><?php echo $retorno['ingredientes']; ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="modoPreparo"><strong>Modo de preparo</strong></label>
                        <textarea name="modoPreparo" id="modoPreparo" rows="4" cols="1"><?php echo $retorno['modoPreparo']; ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="qtdePessoas"><strong>Serve quantas pessoas</strong></label>
                        <input 
                            type="text" 
                            name="qtdePessoas" 
                            id="qtdePessoas" 
                            placeholder="Serve quantas pessoas"
                            value = "<?=$retorno['qtdePessoas'];?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="tempoPreparo"><strong>Tempo de preparo</strong></label>
                        <input 
                            type="text" 
                            name="tempoPreparo" 
                            id="tempoPreparo" 
                            placeholder="Tempo de preparo"
                            value = "<?=$retorno['tempoPreparo'];?>">
                    </div>
                </div>

                <div class="btnDireita">

                    <button type="submit">
                        <img src="./img/salvar.png" alt="Editar">
                        <span class="tooltip">Salvar</span>
                    </button>
                                    
                    <button 
                        type="reset" 
                        onclick="window.location.href='visualizacao.php'">
                        <img src="./img/cancelar.png" alt="Editar">
                        <span class="tooltip">Cancelar</span>
                    </button>
                </div>


            </form>
        </div>
    </div>

    
</body>
</html>