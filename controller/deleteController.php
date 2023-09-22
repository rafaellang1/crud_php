<?php

    if(!empty($_GET["id"])) {
        $id=$_GET["id"];
        $sql=$connection->query(" delete from atores where id=$id ");
        
        if($sql==1) {
            echo '<div class="alert alert-success text-center"> Registro eliminado com sucesso</div>';
        }else {
            '<div class="alert alert-danger"> Erro ao tentar eliminar o registro</div>';
        }
    }

?>