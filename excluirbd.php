<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // pegando os dados vindos do formulário
        $idReceita = filter_input(INPUT_POST, "idReceita", FILTER_SANITIZE_NUMBER_INT);
        
        try{
            require_once("./_conexao/conexao.php");

            $comandoSQL = $conexao->prepare("

                DELETE FROM `receita` WHERE `idReceita` = :idReceita
            
            ");

            $comandoSQL->execute(array(
                ":idReceita" => $idReceita = intval($idReceita)
            ));
             
            if ($comandoSQL->rowCount() >= 0){
                // echo("Deletado com sucesso");
                // echo($idReceita);
                header("Location: visualizacao.php");
                exit(); 
            }
            else{
                echo("Erro ao deletar dados");
                // echo("<pre>");
                // //$comandoSQL -> debugDumpsParams();
                // echo ("</pre>");
            }

        } catch (PDOException $erro){
            echo("Entre em contato com o suporte");
        }
    }
    else{
        echo ("Entre em contato com o suporte");
    }