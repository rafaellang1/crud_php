<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3356190c4.js" crossorigin="anonymous"></script>
    <title>Projeto MVC</title>
</head>
<body>
    <h1 class="text-center p-3">Hello World!</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Cadastro de Atores</h3>
            <p class="text-center text-secondary">Insira aqui os dados dos atores que participaram do filme</p>

            <?php
                include "model/connection.php";
                include "controller/createController.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome do Ator</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nacionalidade</label>
                <input type="text" class="form-control" name="nacionalidade">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento">
            </div>

            <button type="submit" class="btn btn-primary" name="btnsalvar" value="ok">Salvar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-striped">
            <h3 class="text-center text-secondary">Listagem de atores cadastrados</h3>
            <p class="text-center text-secondary">Veja a lista de todos os atores cadastrados, edite ou delete se desejar</p>
                <thead class="bg-info">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nacionalidade</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "model/connection.php";
                        $sql = $connection->query(" select * from atores ");
                        while($data = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $data->id ?></td>
                                <td><?= $data->nome ?></td>
                                <td><?= $data->nacionalidade ?></td>
                                <td><?= $data->data_nascimento ?></td>
                                <td>
                                    <a href="updateProduct.php?id=<?= $data->id ?>" class="btn btn-small btn-primary"><i class="fa-solid fa-user-pen"></i></i></a>
                                    <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></i></a>
                                </td>
                            </tr>
                       <?php }
                    ?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>