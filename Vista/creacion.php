<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/creacion.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="contenedor">
        <div class="contenedor_principal">
            <div class="formulario" action="../ingreso.php" method="post">
                <h2>Inicio de sesión</h2>
                <label>Ingrese su usuario o email</label>
                <input id="usuario" required>
                <label>Ingrese su usuario o email</label>
                <input id="usuario" required>
                <label>Ingrese su contraseña</label>
                <input id="contraseña" required>
                <div class="contenedor-btn">
                    <button class="btn">enviar</button>
                </div>
                <p>Ya tienes una?<a href="../Index.php">Inicia sesion</a></p>
            </div>
            <section class="img">
                <img src="img/image2.png" alt="">
            </section>
        </div>
    </div>
</body>
</html>