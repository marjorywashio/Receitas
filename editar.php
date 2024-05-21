<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::: Editar :::</title>
    <link rel="icon" type="image/x-icon" href="./img/icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Ephesis&family=Euphoria+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="container">
        
        <div class="menu">
        <img src="./img/logoverde.png" alt="logo Sabores Surpreendentes" class="logo">
            <?php require_once("./_menu.php"); ?>
        </div>

        <div class="content">
            <p class="frase">Edite a receita... </p>

            <?php
                require_once("./editarbd_view.php");
            ?>

            <div class="formulario">

                <form action="editarbd.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idReceita" value="<?php echo $retorno['idReceita']; ?>">

                    <div class="form">
                        <label for="titulo"><strong>Título da receita</strong></label>    <!-- for = id -->
                        <input 
                            type="text" 
                            name="titulo" 
                            id="titulo" 
                            placeholder="Título da receita"
                            value = "<?=$retorno['titulo'];?>">
                    </div>
                    
                    <div class="form">
                        <label for="ingredientes"><strong>Ingredientes</strong></label>
                        <textarea name="ingredientes" id="ingredientes" rows="4" cols="1"><?php echo $retorno['ingredientes']; ?></textarea>
                    </div>

                    <div class="form">
                        <label for="modoPreparo"><strong>Modo de preparo</strong></label>
                        <textarea name="modoPreparo" id="modoPreparo" rows="4" cols="1"><?php echo $retorno['modoPreparo']; ?></textarea>
                    </div>

                    <div class="form">
                        <label for="qtdePessoas"><strong>Serve quantas pessoas</strong></label>
                        <input 
                            type="text" 
                            name="qtdePessoas" 
                            id="qtdePessoas" 
                            placeholder="Serve quantas pessoas"
                            value = "<?=$retorno['qtdePessoas'];?>">
                    </div>

                    <div class="form">
                        <label for="tempoPreparo"><strong>Tempo de preparo</strong></label>
                        <input 
                            type="text" 
                            name="tempoPreparo" 
                            id="tempoPreparo" 
                            placeholder="Tempo de preparo"
                            value = "<?=$retorno['tempoPreparo'];?>">
                    </div>

                    <div class="form">
                        <label for="foto" style="cursor:pointer">
                            <img 
                                src="./imagem/<?=$retorno['foto'];?>" 
                                alt="Foto da receita" 
                                width="100">
                        </label>

                        <input type="file" name="foto" id="foto">
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
    </div>
</body>
</html>