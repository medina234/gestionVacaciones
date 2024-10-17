<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/css/index.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <main>
        <div class="contenedor">
            <form>
                <h2>Inicio de sesión</h2>
                <label>Ingrese su usuario o email</label>
                <input id="usuario" required>
                <label>Ingrese su contraseña</label>
                <input id="contraseña" type="password" required>
                <div class="container-btn">
                    <input class="btn" type="submit">Login</button>
                </div>
                <p>¿Es nuevo? <span> <a href="Vista/creacion.php">Crea tu usuario</a></span></p>
                <p>¿Olvideaste tu contraseña? <a href="Vista/recuperacion.php">Recuperala</a></p>
            </form>
            <section class="section-img">
                <img src="Vista/img/image.png" alt="">
            </section>
        </div>
    </div>
</body>
</html>