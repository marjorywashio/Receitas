<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $foto = "";

        if(!empty($_FILES["foto"]["name"])){
            
            $pasta = "./imagem/";
            
            $nomeOriginal = str_replace(" ","_",$_FILES["foto"]["name"]);

            $foto = $nomeOriginal;
        }

        // pegando os dados vindos do formulário
        $idReceita = filter_input(INPUT_POST, "idReceita", FILTER_SANITIZE_NUMBER_INT);
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $ingredientes = filter_input(INPUT_POST, "ingredientes", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $modoPreparo = filter_input(INPUT_POST, "modoPreparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $qtdePessoas = filter_input(INPUT_POST, "qtdePessoas", FILTER_SANITIZE_NUMBER_INT);
        $tempoPreparo = filter_input(INPUT_POST, "tempoPreparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        try{
            require_once("./_conexao/conexao.php");

            if (!empty($foto)) {
                $comandoSQL = $conexao->prepare("
                    UPDATE `receita` SET
                        `idReceita` = :idReceita,
                        `titulo` = :titulo,
                        `foto` = :foto,
                        `ingredientes` = :ingredientes,
                        `modoPreparo` = :modoPreparo,
                        `qtdePessoas` = :qtdePessoas,
                        `tempoPreparo` = :tempoPreparo
                    WHERE `idReceita` = :idReceita
        
                ");

                $comandoSQL->execute(array(
                    ":idReceita" => $idReceita = intval($idReceita),
                    ":titulo" => $titulo,
                    ":foto" => $foto,
                    ":ingredientes" => $ingredientes,
                    ":modoPreparo" => $modoPreparo,
                    ":qtdePessoas" => $qtdePessoas = intval($qtdePessoas),
                    ":tempoPreparo" => $tempoPreparo
                ));
            } else {
                $comandoSQL = $conexao->prepare("
                    UPDATE `receita` SET
                        `idReceita` = :idReceita,
                        `titulo` = :titulo,
                        `ingredientes` = :ingredientes,
                        `modoPreparo` = :modoPreparo,
                        `qtdePessoas` = :qtdePessoas,
                        `tempoPreparo` = :tempoPreparo
                    WHERE `idReceita` = :idReceita
            
                ");
            
                $comandoSQL->execute(array(
                    ":idReceita" => $idReceita = intval($idReceita),
                    ":titulo" => $titulo,
                    ":ingredientes" => $ingredientes,
                    ":modoPreparo" => $modoPreparo,
                    ":qtdePessoas" => $qtdePessoas = intval($qtdePessoas),
                    ":tempoPreparo" => $tempoPreparo
                ));
            }
             
            if ($comandoSQL->rowCount() > 0){

                if(!empty($_FILES["foto"]["name"])){
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta.$foto);
                }
                
                header("Location: visualizacao.php");
                exit(); 
            }
            else{
                echo("Erro ao atualizar dados");
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