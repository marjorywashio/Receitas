<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="icon" type="image/x-icon" href="./img/icon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Ephesis&family=Euphoria+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rancho&display=swap" rel="stylesheet">
        <title> ::: Sabores Surpreendentes :::</title>
    </head>
    <body>
        <div class="container">

            <div class="menu">
                <img src="./img/logoverde.png" alt="logo Sabores Surpreendentes" class="logo">
                <?php require_once("./_menu.php"); ?>
            </div>

            <div class="content">

                <p class="frase">Para conquistar o meu coração, o melhor atalho é começar pelo estômago. </p>

                <?php // PHP
                    require_once("./visualizacaobd.php");
                    if($totalRegistros > 0){
                        foreach($dados as $linha){
                ?>

                <div id="<?=$linha['idReceita'];?>" class="card">
                    <h2 class="titulo"><?=$linha["titulo"];?></h2>

                    <div class="foto">
                        <img 
                            src="./imagem/<?=$linha['foto'];?>" 
                            alt="Foto da receita" 
                            width="400">
                    </div>

                    <div class="prep">
                        <div class="prep-box">
                            <p class="prep-titulo"><strong>Rendimento</strong></p>
                            <p class="textocard">
                                <img class="icon" src="./img/pessoas.png" alt="Quantidade de pessoas">
                                <span class="tooltip1">Quantidade de pessoas</span> 
                                <?=$linha["qtdePessoas"];?>
                            </p>
                        </div>

                        <div class="prep-box">
                            <p class="prep-titulo"><strong>Tempo</strong></p>
                            <p class="textocard">
                                <img class="icon" src="./img/tempo.png" alt="Tempo de preparo">
                                <span class="tooltip1">Tempo de preparo</span>
                                <span class="tempopreparo"><?=$linha["tempoPreparo"];?></span>
                            </p>
                        </div>
                    </div>

                    <div class="info-receita">
                        <p class="titulo1"><strong>Ingredientes</strong></p>
                        <p class="text"> <?= nl2br($linha["ingredientes"]); ?></p>

                        <p class="titulo1"><strong>Modo de Preparo</strong></p>
                        <p class="text"> <?= nl2br($linha["modoPreparo"]); ?></p>
                    </div>

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

            <div class="sidebar">

                <h2 class="sidebar-titulo">Receitas disponíveis</h2>
                <?php // PHP
                    require_once("./visualizacaobd.php");
                    if($totalRegistros > 0){
                        foreach($dados as $linha){
                ?>

                <ul class="lista-receitas"> 
                    <li>
                    <a href="#<?=$linha['idReceita'];?>"><?=$linha["titulo"];?></a>
                    </li>
                </ul>

                <?php
                        }
                    } else {
                        echo "<p>Nenhuma receita encontrada.</p>";
                    }
                ?>

            </div>

            <button onclick="topFunction()" id="myBtn" title="Voltar ao topo" >↑</button>
        </div>
        <script>
            // Quando o usuário rolar a página, execute a função
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                // Se o usuário rolar 20 pixels ou mais, exibe o botão
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    // Caso contrário, esconde o botão
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // Quando o usuário clicar no botão, role a página de volta ao topo
            function topFunction() {
                document.body.scrollTop = 0; // Para navegadores Safari
                document.documentElement.scrollTop = 0; // Para outros navegadores
            }
        </script>

    </body>
</html>