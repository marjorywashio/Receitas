<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // pegando os dados vindos do formulário
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $ingredientes = filter_input(INPUT_POST, "ingredientes", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $modoPreparo = filter_input(INPUT_POST, "modoPreparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $qtdePessoas = filter_input(INPUT_POST, "qtdePessoas", FILTER_SANITIZE_NUMBER_INT);
        $tempoPreparo = filter_input(INPUT_POST, "tempoPreparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

      
        try{
            require_once("./_conexao/conexao.php");

            $comandoSQL = $conexao->prepare("
                INSERT INTO receita(
                    `titulo`,
                    `ingredientes`,
                    `modoPreparo`,
                    `qtdePessoas`,
                    `tempoPreparo`)
                VALUES(
                    :titulo,
                    :ingredientes,
                    :modoPreparo,
                    :qtdePessoas,
                    :tempoPreparo)
            
            ");

            $comandoSQL->execute(array(
                ":titulo" => $titulo,
                ":ingredientes" => $ingredientes,
                ":modoPreparo" => $modoPreparo,
                ":qtdePessoas" => $qtdePessoas = intval($qtdePessoas),
                ":tempoPreparo" => $tempoPreparo,
            ));

            if ($comandoSQL->rowCount() > 0){
                // Atualizado com sucesso, redirecionar para a página de visualização
                header("Location: visualizacao.php");
                exit(); // Certifique-se de sair do script após o redirecionamento
            }
            else{
                echo("Erro ao inserir dados");
            }

        } catch (PDOException $erro){
            echo("Entre em contato com o suporte");
        }
    }
    else{
        echo ("Entre em contato com o suporte");
    }