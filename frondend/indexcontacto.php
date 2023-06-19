<?php

    include 'db/conexion.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylecontacto.css">
    <script type="text/javascript" src="js/main.js"></script>
    <title>Document</title>
</head>
<body>  
    <a href="index.html">   
        <img class="home" src="img/home.png" alt="">
    </a>
    <div class="contact_form">
        <div class="formulario">      
            <h1>Contactenos</h1>
            <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
            <form action="back/almacenar_datos.php" method="POST">      
                <p>
                    <label for="nombre" class="colocar_nombre">Nombre
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>
                    <p>
                    <label for="email" class="colocar_email">Email
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="correo" required="obligatorio" placeholder="Escribe tu Email">
                </p>
                <p>
                    <label for="telefone" class="colocar_telefono">Teléfono
                    </label>
                    <input type="text" name="telefono" placeholder="Escribe tu teléfono">
                </p>    
                <p>
                    <label for="mensaje" class="colocar_mensaje">Mensaje
                        <span class="obligatorio">*</span>
                    </label>                      
                    <textarea name="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                </p>                    
                    <button type="submit" name="almacenar" id="viewAlerta"><p>Enviar</p></button>    
                <p class="aviso">
                  <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>          
            </form>
        </div>  
    </div>
</body>
</html>