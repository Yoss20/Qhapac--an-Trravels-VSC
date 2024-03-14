<?php
include("../Administrador/php/conexion.php");

?>



<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi Billetera</title>
    <link rel="stylesheet" href="../css/stylesTarjetass.css" />
    <link rel="stylesheet" href="../Administrador/css/estilos.css" />
    
    <link rel="icon" href="imagenes/logo-p.png" />
    <script src="../js/Registros.js"></script>
    
  </head>

  <body style="background-image: url('../Login/img/FondoMiPerfil.png'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
  <nav class="menu">
      <section class="encabezado_cont">
        <ul class="menu__links0">
          
          <li class="menu__item0">
            <a href="#" class="menu__link0">Ayuda</a>
          </li>
          <li class="menu__item0">
            <a href="../VistasPagina/Contactanos.php" class="menu__link0">Contactanos</a>
          </li>
          <li class="menu__item0">
          <form method="post">
            <button type="submit" name="cerrar_sesion" class="btn">Cerrar Sesión</button>
        </form>
          </li>
          <?php
          
          if (isset($_POST['cerrar_sesion'])) {
          header('Location: ../index.php');
          exit; 
        }
        ?>
        </ul>

        <div class="menu__hamburguer">
          <img src="../assets/menu.svg" class="menu__img" />
        </div>

        
      </section>


      <section class="menu_cont">
        <div class="logo">
          <img src="../imagenes/LOGO TERMINADO.png" alt="Logo de la Compañia" />
        </div>

        <ul class="menu__links">
          <li class="menu__item">
            <a href="../index.php" class="menu__link">Inicio</a>
          </li>

          <li class="menu__item">
            <a href="../VistasPagina/HDestino.php" class="menu__link"
              >Destinos</a
            >
          </li>

          <li class="menu__item">
            <a href="../VistasPagina/Vuelo.php" class="menu__link">Reserva</a>
          </li>

          <li class="menu__item">
            <a href="../VistasPagina/promociones.php" class="menu__link"
              >Promociones</a
            >
          </li>

          <li class="menu__item menu__item--show">
            <a href="#" class="menu__link"
              >¿QUIENES SOMOS? <img src="../assets/arrow.svg" class="menu__arrow"
            /></a>

            <ul class="menu__nesting">
              <li class="menu__inside">
                <a href="VentanasLOGUEADOS/EmpresaUser.php" class="menu__link menu__link--inside"
                  >Qhapac Ñan Travels</a
                >
              </li>
              <li class="menu__inside">
                <a href="VentanasLOGUEADOS/NuestroEquipoUser.php" class="menu__link menu__link--inside"
                  >Nuestro Equipo</a
                >
              </li>
            </ul>
          </li>
          <li class="menu__item menu__item--show">
            <a href="#" class="menu__link"
              >MI CUENTA <img src="../assets/arrow.svg" class="menu__arrow"
            /></a>
            

            <ul class="menu__nesting">
              <li class="menu__inside">
                <a href="MiPerfil.php" class="menu__link menu__link--inside"
                  >MI PERFIL</a
                >
              </li>
              <li class="menu__inside">
                <a href=" Tarjetas.php" class="menu__link menu__link--inside"
                  >MI BILLETERA</a
                >
              </li>
            </ul>
          </li>
        </ul>

        
      </section>
    </nav>

    <script src="../js/inicio.js"></script>


<form class="formulario" style="color: #fff;">
  <table class="tabla-tarjetas" border="9">
    <tr>
      <td colspan="6" align="center">
        <label class="labForm">TARJETAS REGISTRADAS</label>
      </td>
    </tr>
    <tr>
      <td colspan="1">
        <label class="labForm">DNI</label>
      </td>
      <td colspan="1">
        <label class="labForm">Código Tarjeta</label>
      </td>
    </tr>

    <?php
    // Verifica si el usuario está autenticado
    if (!isset($_SESSION['user_id'])) {
      header("Location: index.php");
      exit();
    }   

    // Obtén el DNI del usuario autenticado
    $user_dni = $_SESSION['user_id'];

    // Consulta la tabla de billeteras
    $sql = "SELECT ID, DNI FROM billetera WHERE DNI = '$user_dni'";
    $result = mysqli_query($conn, $sql);

    // Itera los resultados de la consulta
    while ($mostrar = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td colspan="1"><?php echo $mostrar['DNI']; ?></td>
        <td colspan="1"><?php echo $mostrar['ID']; ?></td>
      </tr>
    <?php
    }
    ?>
  </table>
</form>
<a href="../Billetera/Billetera.php" class="agregar-tarjeta-btn" name="btnAgregar">Agregar otra tarjeta</a>
</div>

    <footer>
      <div class="footer-links-left">
        <h3>Información</h3>
        <ul>
          <li><a href="VentanasSinRegistro/HDestino.php">Destinos</a></li>
          <li><a href="VentanasSinRegistro/Vuelo.php">Reserva</a></li>
          <li><a href="VentanasSinRegistro/promociones.php">Promociones</a></li>
          <li><a href="VentanasSinRegistro/Empresa.php">Nuestra Empresa</a></li>
          <li><a href="VentanasSinRegistro/NuestroEquipo.php">Nuestro Equipo</a></li>
          <li><a href="VentanasSinRegistro/Contactanos.php">Contactanos</a></li>
        </ul>
      </div>
      <h3>Contactanos</h3>
      <br />
      <ul class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61551098888038" target="_blank"><img src="../imagenes/Facebook.png" width="185" height="185" ></a></li>
        <a href="https://wa.me/51951267834" target="_blank"><img src="../imagenes/WhatsApp.png" width="185" height="185"></a></li>
        <a href="https://www.instagram.com/qhapacnantravels/" target="_blank"><img src="../imagenes/Instagram.png" width="185" height="185" ></a></li>
    </ul>

    

    <br />
    <div class="copyright">
      <h4>&copy; 2023 Qhapac Ñan Travels. Todos los derechos reservados.</h4>
      <br />
      <br />
      <div class="footer-links">
        <a href="index.php">Inicio</a> 
        <a href="#" id="enlaceCondiciones" class="enlace-condiciones" onclick="abrirVentanaEmergente('../Login/Condiciones.html')">Condiciones de uso</a>
       <a href="#" id="enlaceAviso" class="enlace-privacidad" onclick="abrirVentanaEmergente('../Login/Politica.html')">Politica de privacidad</a>
      </div>
    </footer>
    



  </body>
</html>
