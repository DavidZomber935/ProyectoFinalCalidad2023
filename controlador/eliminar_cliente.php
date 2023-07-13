<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("delete from clientes where idClientes=$id");
    if ($sql == 1) {
        echo '<div class="alert alert-success" > cliente eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger"> error al eliminar</div>';
    }
    
}

?>