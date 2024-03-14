<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/StyleLogin.css" />
    <script src="../js/Login.js"></script>
    <link rel="icon" href="../imagenes/logo-p.png" />
  </head>
  <body>

  <a href="../index.php">
    <img src="../imagenes\LOGO TERMINADO.png" alt="Logo" id="logo-button" />
  </a>
    
    <div class="login-box">
      <img src="../Login/img/Abiertos.gif" id="mi-imagen" alt="Ojos Abiertos" />
      <img
        src="../Login/img/Animación.gif"
        id="mi-animacion"
        alt="Animación de llama cerrando los ojos"
        style="display: none"
      />

      <h1>INICIAR SESIÓN</h1>
      <form action="proceso_login.php" method="post">
        <!-- USERNAME INPUT -->
        <label for="username" required>Usuario</label>
        <input
          type="text"
          id="username"
          name="username"
          placeholder="Ingresar Usuario/Dni" required
        />

        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input
          type="password"
          id="passwordField"
          name="password"
          placeholder="Ingresar contraseña" required
        />
        <div id="error-message" class="error-message">
          <?php
  if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error === "contrasena_incorrecta") {
      echo "Contraseña incorrecta.";
    } elseif ($error === "usuario_no_encontrado") {
      echo "Usuario no encontrado.";
    }
  }
  ?>
        </div>
        <input type="submit" value="Ingresar" />
        <a href="Registro.php">¿No tienes una cuenta?</a>
        
      </form>
    </div>
  </body>
</html>
