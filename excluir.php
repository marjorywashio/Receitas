<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::: Excluir :::</title>
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

            <?php
                require_once("./editarbd_view.php");
            ?>

            <form action="excluirbd.php" method="post">
            <input type="hidden" name="idReceita" value="<?php echo $retorno['idReceita']; ?>">
                <div class="carddelete">
                    <label class="confirm" for="confirm">Tem certeza que deseja excluir?</label>
                    
                    <label class="titulodelete" for="titulodelete">
                        <?=$retorno['titulo'];?>
                    </label>
                    
                    
                    
                    <input type="checkbox" id="confirm" name="confirm" required>
                    <input type="submit" value="Excluir">
                </div>
                
            </form>

        </div>
    </div> 
</body>
</html>