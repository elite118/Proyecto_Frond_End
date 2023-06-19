<?php

    include 'db/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO DE INSERT</h1>
    <form action="back/almacenar_datos.php" method="POST">
            <input type="text" name="nombre" placeholder="Digite el nombre">
            <input type="text" name="correo" placeholder="Digite apellido">
            <input type="text" name="telefono" placeholder="Digite la número de cedula">
            <input type="text" name="mensaje" placeholder="Ingrese el mensaje">
            <input type="submit" name="almacenar" value="guardar">
    </form>
</body>
</html>
