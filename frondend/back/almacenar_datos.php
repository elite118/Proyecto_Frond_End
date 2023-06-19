<?php

include '../db/conexion.php';

        if (isset($_POST['almacenar'])) {
            $name = $_POST['nombre'];
            $email = $_POST['correo'];
            $phone = $_POST['telefono'];
            $msg = $_POST['mensaje'];

            mysqli_query($conexion,"INSERT INTO contacto
            (nombre, email, telefono, mensaje) VALUES
            ('$name', '$email', '$phone', '$msg')");
        }
        header ('location: ../indexcontacto.php')
?>