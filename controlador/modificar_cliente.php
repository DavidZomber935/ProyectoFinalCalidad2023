<?php
if (!empty($_POST["btnModificar"])) {
    if (!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["edad"]) and !empty($_POST["veces"])) {
        $id=$_POST["id"];
        $cedula=$_POST["cedula"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $edad=$_POST["edad"];
        $veces=$_POST["veces"];
        $sql=$conexion->query(" update clientes set cedula_clientes='$cedula', nombres_clientes='$nombre', apellidos_clientes='$apellido', edad_clientes=$edad, veces_compra_clientes=$veces where idClientes= $id");
        if ($sql == 1) {
            header("location:indexclientes.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar al cliente</div>";
        }
        
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
    

}


?>