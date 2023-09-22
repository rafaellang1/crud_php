<?php
    if (!empty($_POST["btnsalvar"])) {
        if (!empty($_POST["nome"]) and !empty($_POST["nacionalidade"]) and !empty($_POST["data_nascimento"])) {
            
            $nome=$_POST["nome"];
            $nacionalidade=$_POST["nacionalidade"];
            $data_nascimento=$_POST["data_nascimento"];

            $sql=$connection->query(" insert into atores(nome, nacionalidade, data_nascimento) values('$nome', '$nacionalidade', '$data_nascimento') ");

            if($sql==1){
                echo '<div class="alert alert-success">Cadastro efetuado com sucesso</div>';
            }else{
                echo '<div class="alert alert-danger">Erro ao cadastrar</div>';
            }

        }else{
            echo '<div class="alert alert-warning">Existem alguns campos vazios. Por favor preencha todos os campos!</div>';
        }

    }

?>