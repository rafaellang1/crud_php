<?php
    include "model/connection.php";
    $id=$_GET["id"];
    
    $sql=$connection->query(" select * from atores where id=$id ");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Atualização de cadastro</title>
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Atualização de Cadastro</h3>
        <p class="text-center text-secondary">Insira aqui os dados dos atores que participaram do filme</p>

        <?php
            
            while($data=$sql->fetch_object()){?>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome do Ator</label>
                <input type="text" class="form-control" name="nome" value="<?= $data->nome ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nacionalidade</label>
                    <input type="text" class="form-control" name="nacionalidade" value="<?= $data->nacionalidade ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento" value="<?= $data->data_nascimento ?>">
                </div>
            <?php }
        ?>
        

        <button type="submit" class="btn btn-primary" name="btnsalvar" value="ok">Salvar alterações</button>
    </form>

</body>
</html>