<!DOCTYPE html>
<html lang="es">
 
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="stylesheet" href="../Santa_Barbara/css/styleIniciarSesion.css">
    </head>
        <body>
            <div class="login-page">
                
                <div class="form">
                  <form class="register-form">
                    <input type="text"  name = "usuario" placeholder="nombre"/>
                    <input type="password" name = "clave" placeholder="contraseña"/>
                    <input type="text" placeholder="Correo electronico"/>
                    <!--Esta parte de arriba la podemos dejar por si queremos redirigirlos a crear una cuenta  !-->
                  </form>
                  <form action = "validar.php" method = "POST" class="login-form">
                    <h1 class="section-title">Inicio de sesión</h1>
                    <input type="text" name = "usuario" placeholder="Usuario"/>
                    <input type="password" name = "clave" placeholder="Contraseña"/>
                    <button type="submit">Ingresar</button>
                    <p class="message">Olvido su contraseña? <a href="#">Recuperar contraseña</a></p>
                  </form>
                </div>
              </div>
        </body>
</html>