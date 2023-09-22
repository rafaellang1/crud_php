<?php
    $connection = new mysqli("localhost","root","");
    $connection->set_charset("utf8");

    if ($connection->connect_error) {
        die("Erro na conexão: ".$connection->connect_error);
    }
    echo "conexao bem sucedida";

    // Cria o banco de dados "cinema" se ele não existir
    $criarBanco = "CREATE DATABASE IF NOT EXISTS cinema";
    if ($connection->query($criarBanco) === TRUE) {
        echo "Banco de dados 'cinema' criado com sucesso!<br>";
    } else {
        echo "Erro ao criar o banco de dados 'cinema': " . $connection->error . "<br>";
    }

    // Seleciona o banco de dados "cinema"
    $connection->select_db("cinema");

    // Cria a tabela "atores" se ela não existir
    $criarTabela = "CREATE TABLE IF NOT EXISTS atores (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        nacionalidade VARCHAR(255),
        data_nascimento DATE
    )";

    if ($connection->query($criarTabela) === TRUE) {
        echo "Tabela 'atores' criada com sucesso!";
    } else {
        echo "Erro ao criar a tabela 'atores': " . $connection->error;
    }
?>