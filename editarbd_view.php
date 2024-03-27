<?php
    try {
        require_once("./_conexao/conexao.php");

        $idReceita = filter_input(INPUT_GET, "idReceita", FILTER_SANITIZE_NUMBER_INT);

        $comandoSQL = $conexao->prepare("
        
            SELECT * FROM receita WHERE idReceita = :idReceita
        
        ");

        $comandoSQL->execute(array(
            ":idReceita" => $idReceita
        ));

        $retorno = $comandoSQL->fetch();

    } catch (PDOException $erro) {
        echo("Entre em contato com o suporte");
    }