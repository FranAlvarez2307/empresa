<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTRO</title>
        <link rel="stylesheet" href="CSS/Registrarse.css">
    </head>
    <body>
        <div class="barra">
            <div align="center">
        </div>
        <div class="contenedor">
            <div id="Reg">
                <h2>Registrarse</h2>
            </div>
            <form action="VALIDAR.php" method="post" class="formulario">
                <p> <input type="text" name="nombre" placeholder="&#128100; Nombre(s)" autofocus required></p>
                <p><input type="text" name="apellidos" placeholder="&#128100; Apellidos" required></p>
                <p><input type="email" name="correo" placeholder="&#64; Correo electrónico" required></p>
                <p><input type="tel" name="telefono" placeholder="&#128241; Teléfono" required></p>
                <input type="date" name="fecha" required>
                <input type="time" name="hora" required>
                <p><input type="text" name="usuario" placeholder="&#128100; Nombre de usuario" required></p>
                <p><input type="password" name="password1" placeholder="&#128272; Contraseña" required></p>
                <p><input type="password" name="password2" placeholder="&#128272; Confirmar contraseña" required></p>
                <button>Registrarse</button>
            </form>
        </div>
    </body>
</html>