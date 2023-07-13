<?php
if(!empty($_POST["btnAñadir"])){
    if (!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["edad"]) and !empty($_POST["veces"])) {
        $cedula=$_POST["cedula"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $edad=$_POST["edad"];
        $veces=$_POST["veces"];

        $sql=$conexion->query("insert into clientes(cedula_clientes,nombres_clientes,apellidos_clientes,edad_clientes,veces_compra_clientes)values('$cedula','$nombre','$apellido',$edad,$veces)");

        if ($sql==1) {
            echo '<div class="alert alert-success">cliente añadido</div>';
        } else {
            echo '<div class="alert alert-danger">Error al añadir al cliente</div>';
        }
        
    } else {
        echo "Falta rellenar campos porfavor añadalos";
    }
    
}
?>