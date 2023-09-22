<?php 
    if (!empty($_POST["btnsalvar"])) {
        if(!empty($_POST["nome"]) and !empty($_POST["nacionalidade"]) and !empty($_POST["data_nascimento"])) {
            $id=$_POST["id"];
            $nome=$_POST["nome"];
            $nacionalidade=$_POST["nacionalidade"];
            $data_nascimento=$_POST["data_nascimento"];
            
            $sql=$connection->query(" update atores set nome='$nome', nacionalidade='$nacionalidade', data_nascimento='$data_nascimento' where id=$id ");

            if ($sql==1) {
                header("location:index.php");
            }else{
                echo "<div  class='alert alert-danger'>Erro ao alterar produto</div>";
            }
        }else {
            echo "<div  class='alert alert-warning'>Existem campos sem preenchimento! Preencha todos os campos</div>";
        }
    }
?>