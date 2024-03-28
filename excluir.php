<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::: Excluir :::</title>
    <link rel="icon" type="image/x-icon" href="./img/icon.ico">
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="fundo">
        <div class="container">
        <img src="./img/logoverde.png" alt="logo Sabores Surpreendentes" class="logo">
            <?php require_once("./_menu.php"); ?>
        </div>

        <div class="tituloFundo">
            <h1>Tem certeza que deseja excluir?</h1>
        </div>

        <?php
            require_once("./editarbd_view.php");
        ?>


        <form action="excluirbd.php" method="post">
        <input type="hidden" name="idReceita" value="<?php echo $retorno['idReceita']; ?>">
            <div class="carddelete">
                <label class="titulodelete"
                    for="titulodelete"
                    >
                    <?=$retorno['titulo'];?>
                </label>
                
                <label for="confirm">Tem certeza que deseja excluir?</label>
                
                <input type="checkbox" id="confirm" name="confirm" required>
                <input type="submit" value="Excluir">
            </div>
            
        </form>
    </div> 
</body>
</html>