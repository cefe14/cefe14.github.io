<?php

$conexion=mysqli_connect("localhost", "root", "", "login");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['apellido']) >= 1 &&
    strlen($_POST['codnac']) >= 1 &&
    strlen($_POST['correo']) >= 1 &&
    strlen($_POST['texto']) >= 1 &&
    strlen($_POST['nota']) >= 1) {

        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $codnac = trim($_POST['codnac']);
        $correo = trim($_POST['correo']);
        $texto = trim($_POST['texto']);
        $nota = trim($_POST['nota']);
        $consulta = "INSERT INTO `registro`(
        `nombre`, `apellido`, `cod.nac`, `correo`, `mensaje`, 
        `puntaje`) VALUES ('$nombre','$apellido','$codnac',
        '$correo','$texto','$nota')";
        $resultado = mysqli_query($conexion,$consulta);
       
        if ($resultado){
            ?>
            <h3 class = "ok">¡te has suscripto correctamente!</h3>
            <?php
        } else {
            ?> 
            <h3 class="bad">¡Ah ocurrido un error! </h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">¡por favor complete los campos!</h3> 
        <?php
}
}
?>