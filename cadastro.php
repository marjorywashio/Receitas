<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Sabores Surpreendentes ::</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="fundo">

        <div class="container">
            <img src="./img/logoverde.png" alt="logo Sabores Surpreendentes" class="logo">
            <?php require_once("./_menu.php"); ?>
        </div>

        <div class="tituloFundo">
            <h1>Cadastre uma receita...</h1>
        </div>

        <div class="formulario">
            <!-- post: (protocolo via http) esconde a URL > MAIS SEGURO -->
            <!-- get: não "esconde" na URL -->
            <form action="cadastrobd.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="titulo"><strong>Título da receita</strong></label>    <!-- for = id -->
                        <input 
                            type="text" 
                            name="titulo" 
                            id="titulo" 
                            placeholder="Dê um nome a sua receita...">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <label for="ingredientes"><strong>Ingredientes</strong></label>
                        <textarea name="ingredientes" id="ingredientes" rows="4" cols="1"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="modoPreparo"><strong>Modo de preparo</strong></label>
                        <textarea name="modoPreparo" id="modoPreparo" rows="4" cols="1"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="qtdePessoas"><strong>Serve quantas pessoas</strong></label>
                        <input 
                            type="text" 
                            name="qtdePessoas" 
                            id="qtdePessoas" 
                            placeholder="Coloque em número...">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="tempoPreparo"><strong>Tempo de preparo</strong></label>
                        <input 
                            type="text" 
                            name="tempoPreparo" 
                            id="tempoPreparo" 
                            placeholder="Escreva quanto tempo para preparar a receita...">
                    </div>
                </div>

                <div class="btnDireita">
                    
                        <button type="submit" class="btnEditar  btnCadastro">
                            <span class="tooltip">Salvar</span>
                            <img src="./img/salvar.png" alt="Editar">
                        </button>
                                    
                        <button 
                            type="button" 
                            class="btnExcluir  btnCadastro"
                            onclick="window.location.href='visualizacao.php'">
                            <span class="tooltip">Cancelar</span>
                            <img src="./img/cancelar.png" alt="Editar">
                        </button>
                </div>

            </form>
        </div>
    </div>

    
</body>
</html>