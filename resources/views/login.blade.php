<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INICIAR</title>
        <link rel="stylesheet" href="CSS/REGISTROcss.css">
    </head>
    <body>
        <div class="barra">
            <div align="center">
                <!-- <img src="IMG/Logo.png" alt=""> -->
            </div>
            <button> <a href="index.html">Volver</a></button>
        </div>
        <div id="inicio">
            <form action="validar.php" method="post" class="formulario">
                <h2>Iniciar sesion</h2>
                <p class="blanco">Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
                <p class="blanco">Contraseña <input type="password" placeholder="ingrese su contraseña" name="password"></p>
                <button>Entrar</button>
                <button ><a href="/registrar"> Registrarse </a></button>
                <button ><a href=""> Auxiliar </a></button>
                <button ><a href=""> Cliente </a></button>
            </form>
        </div>
    </body>
</html>