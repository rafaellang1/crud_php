<?php
    $connection = new mysqli("localhost","root","");
    $connection->set_charset("utf8");

    if ($connection->connect_error) {
        die("Erro na conexão: ".$connection->connect_error);
    }
    // echo "conexao bem sucedida";
    
    // Cria o banco de dados "cinema" se ele não existir
    $criarBanco = "CREATE DATABASE IF NOT EXISTS cinema";


    if ($connection->query($criarBanco) === TRUE) {
        echo '<div class="alert alert-light p-0 sz-2">DB "cinema" criado com sucesso<br></div>';
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
        echo '<div class="alert alert-light p-0">Tabela "atores" criada com sucesso</div>';
    } else {
        echo "Erro ao criar a tabela 'atores': " . $connection->error;
    }
?>