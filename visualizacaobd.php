<?php
    require_once("./_conexao/conexao.php"); // once: carrega somente 1x

    try {
        // variável que contem a instrução SQL a ser executada
        $comandoSQL = "SELECT * FROM receita ORDER BY idReceita DESC";

        // comando para executar a instrução SQL no banco
        $dadosSelecionados = $conexao->query($comandoSQL);

        // transforma os dados vindos do banco em uma matriz
        $dados = $dadosSelecionados->fetchAll();

        // total de registros afetados
        $totalRegistros = $dadosSelecionados->rowCount();

    } catch (PDOException $erro) {
        //echo $erro->getMessage();
        echo("Entre em contato com o suporte");
    }