<?php
session_start();
include('perfil.php');

// Verificar si hay un parámetro de éxito en la URL
if (isset($_GET['exito']) && $_GET['exito'] === 'foto_subida') {
    echo '<div class="exito-mensaje">La foto se ha subido correctamente.</div>';
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="../css/stylesUsers.css" />
    <link rel="icon" href="imagenes/logo-p.png" />
    <script src="../js/Registros.js"></script>
    
  </head>

  <body style="background-image: url('../Login/img/FondoMiPerfil.png'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    <nav class="menu">
      <section class="encabezado_cont">
        <ul class="menu__links0">
          
          <li class="menu__item0">
          <a href="https://wa.me/51951267834" class="menu__link0" target="_blank">Ayuda</a>
          </li>
          <li class="menu__item0">
            <a href="VentanasLOGUEADOS/Contactanos.php" class="menu__link0">Contactanos</a>
          </li>
          <li  class="menu__item0">
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
          <img src="assets/menu.svg" class="menu__img" />
        </div>

        
      </section>


      <section class="menu_cont" >
        <div class="logo">
          <img src="../imagenes/LOGO TERMINADO.png" alt="Logo de la Compañia" />
        </div>

        <ul class="menu__links">
          <li class="menu__item">
            <a href="../indexUser.php" class="menu__link">Inicio</a>
          </li>

          <li class="menu__item">
            <a href="HDestino.php" class="menu__link"
              >Destinos</a
            >
          </li>

          <li class="menu__item">
            <a href="Vuelo.php" class="menu__link">Reserva</a>
          </li>

          <li class="menu__item">
            <a href="promocionesUser.php" class="menu__link"
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
    
  </div>
  <script src="../js/inicio.js"></script>


    <div class="perfil-container">
    <h1 class="mi_perfil">Mi Perfil</h1>
   
   <div class="perfil-content">
   <div class="perfil-info">
        <!-- Información del usuario -->
        <div class="info-item">
            <label for="nombre">Nombre:</label>
            <span><?php echo $nombreCompleto; ?></span>
        </div>

        <div class="info-item">
            <label for="email">Correo Electrónico:</label>
            <span><?php echo $correo; ?></span>
        </div>

        <div class="info-item">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <span><?php echo $fechaNacimiento; ?></span>
        </div>

        <div class="info-item">
            <label for="celular">Celular:</label>
            <span><?php echo $celular; ?></span>
        </div>
   
    </div>


      <div class="foto-perfil-container">
      <img src="../imagenes/imgNuestroEquipo/OIG.jpeg" alt="Foto de perfil" id="foto-perfil" />

      </div>
   </div>
</div>

<footer>
      <div class="footer-links-left">
        <h3>Información</h3>
        <ul>
          <li><a href="VistasPagina/VentanasLOGUEADOS/HDestino.php">Destinos</a></li>
          <li><a href="VistasPagina/VueloUser.php">Reserva</a></li>
          <li><a href="VistasPagina/VentanasLOGUEADOS/promocionesUser.php">Promociones</a></li>
          <li><a href="VistasPagina/VentanasLOGUEADOS/EmpresaUser.php">Nuestra Empresa</a></li>
          <li><a href="VistasPagina/VentanasLOGUEADOS/NuestroEquipoUser.php">Nuestro Equipo</a></li>
          <li><a href="VistasPagina/VentanasLOGUEADOS/Contactanos.php">Contactanos</a></li>
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
    <script src="script.js"></script>



  </body>
</html>
