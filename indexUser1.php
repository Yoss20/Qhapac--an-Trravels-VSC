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
    <title>Qhapac Ñan Travels</title>
    <link rel="stylesheet" href="css/stylesUsers.css" />
    <link rel="icon" href="imagenes/logo-p.png" />
    <script src="js/Registros.js"></script>
    
  </head>

  <body>
    <nav class="menu">
      <section class="encabezado_cont">
        <ul class="menu__links0">
          
          <li class="menu__item0">
            <a href="" class="menu__link0">Ayuda</a>
          </li>
          <li class="menu__item0">
            <a href="VistasPagina/VentanasLOGUEADOS/Contactanos.php" class="menu__link0">Contactanos</a>
          </li>
          <li  class="menu__item0">
          <form method="post">
            <button type="submit" name="cerrar_sesion" class="btn">Cerrar Sesión</button>
        </form>
          </li>
          <?php
          
          if (isset($_POST['cerrar_sesion'])) {
          header('Location: index.php');
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
          <img src="imagenes/LOGO TERMINADO.png" alt="Logo de la Compañia" />
        </div>

        <ul class="menu__links">
          <li class="menu__item">
            <a href="indexUser.php" class="menu__link">Inicio</a>
          </li>

          <li class="menu__item">
            <a href="VistasPagina/VentanasLOGUEADOS/HDestino.php" class="menu__link"
              >Destinos</a
            >
          </li>

          <li class="menu__item">
            <a href="VistasPagina/VentanasLOGUEADOS/Vuelo.php" class="menu__link">Reserva</a>
          </li>

          <li class="menu__item">
            <a href="VistasPagina/VentanasLOGUEADOS/promocionesUser.php" class="menu__link"
              >Promociones</a
            >
          </li>

          <li class="menu__item menu__item--show">
            <a href="#" class="menu__link"
              >¿QUIENES SOMOS? <img src="assets/arrow.svg" class="menu__arrow"
            /></a>

            <ul class="menu__nesting">
              <li class="menu__inside">
                <a href="VistasPagina/VentanasLOGUEADOS/EmpresaUser.php" class="menu__link menu__link--inside"
                  >Qhapac Ñan Travels</a
                >
              </li>
              <li class="menu__inside">
                <a href="VistasPagina/VentanasLOGUEADOS/NuestroEquipoUser.php" class="menu__link menu__link--inside"
                  >Nuestro Equipo</a
                >
              </li>
            </ul>
          </li>
          <li class="menu__item menu__item--show">
            <a href="#" class="menu__link"
              >MI CUENTA <img src="assets/arrow.svg" class="menu__arrow"
            /></a>
            

            <ul class="menu__nesting">
              <li class="menu__inside">
                <a href="VistasPagina/MiPerfil.php" class="menu__link menu__link--inside"
                  >MI PERFIL</a
                >
              </li>
              <li class="menu__inside">
                <a href="VistasPagina/Tarjetas.php" class="menu__link menu__link--inside"
                  >MI BILLETERA</a
                >
              </li>
            </ul>
          </li>
        </ul>

        
      </section>
    </nav>
    
    <script src="js/inicio.js"></script>

    <header class="header">
      <div class="header-content container">
        <div class="header-txt">
          <h1>CADA SENDERO CUENTA UNA HISTORIA ¿Cuál es la tuya?</h1>
          <p>
            Sumérgete en la auténtica cultura peruana a través de nuestras
            aventuras personalizadas.
          </p><br><br>
        </div>
        <br><br>

        <div class="options">
          <button class="option-btn"><img src="assets/avion.svg" class="avion"
            />Vuelos</button>
          <button class="option-btn"><img src="assets/hotel.svg" class="hotel"
            />Hoteles</button><br>
        </div>


        <section class="header-form">
          <h1><strong>Elija su próximo destino:</strong></h1>
          <h2>Revise si hay vuelos disponibles</h2>

          <select id="tipoViaje" class="tipoViaje">
            <option value="soloIda">Solo Ida</option>
            <option value="idaYVuelta">Ida y Vuelta</option>
        </select>

          <form class="flex_SOLOIDA" id="flex_SOLOIDA">

            <div class="flex_cont flex_cont11">
              <h3>Origen</h3>
              <div class="flex_cont1">
                <img src="assets/lugar.svg" />
                <input type="text" class="form-control" placeholder="Ingresa desde dónde" />
             </div>
            </div>
        
            <div class="flex_cont flex_cont22">
              <h3>Destino</h3>
              <div class="flex_cont1">
              <img src="assets/lugarD.svg" />
              <input type="text" class="form-control" placeholder="Ingresa hacia dónde" />
            </div>
            </div>
        
            <div class="flex_cont flex_cont33">
              <h3>Fecha</h3>
              <div class="flex_cont1">
              <img src="assets/calendar.svg" />
              <input type="date" class="form-control" placeholder="Date" />
              </div>
            </div>
        
            <div class="flex_cont flex_cont44">
              <h3>Cantidad de Personas</h3>
              <div class="flex_cont1">
                <img src="assets/user.svg" />
              <input type="number" class="form-control" placeholder="" />
            </div>
            </div>
            <div class="btnIda">
              <button class="btnI"><img src="assets/lupa.svg" class="lupa"
                />Buscar</button>
            </div>
          </form>

          <form class="flex_IDAYVUELTA" id="flex_IDAYVUELTA">

            <div class="flex_cont flex_cont11">
              <h3>Origen</h3>
              <div class="flex_cont1">
                <img src="assets/lugar.svg" />
                <input type="text" name="destinos" class="form-control" placeholder="Ingresa desde dónde" />
             </div>
            </div>
        
            <div class="flex_cont flex_cont22">
              <h3>Destino</h3>
              <div class="flex_cont1">
              <img src="assets/lugarD.svg" />
              <input type="text" class="form-control" placeholder="Ingresa hacia dónde" />
            </div>
            </div>
        
            <div class="flex_cont flex_cont33">
              <h3>Fecha de Ida</h3>
              <div class="flex_cont1">
                  <img src="assets/calendar.svg" />
                  <input type="date" class="form-control" name="fechaIda" placeholder="Fecha de Ida" />
              </div>
          </div>
          
          <div class="flex_cont flex_cont33">
              <h3>Fecha de Vuelta</h3>
              <div class="flex_cont1">
                  <img src="assets/calendar.svg" />
                  <input type="date" class="form-control" name="fechaVuelta" placeholder="Fecha de Vuelta" />
              </div>
          </div>
        
            <div class="flex_cont flex_cont44">
              <h3>Cantidad de Personas</h3>
              <div class="flex_cont1">
                <img src="assets/user.svg" />
              <input type="number" class="form-control" placeholder="" />
            </div>
            </div>
            
            <div class="btnIdayVuelta">
              <button class="btnIV"><img src="assets/lupa.svg" class="lupa"
                />Buscar</button>
            </div>
          </form>
        </section>
        

        <script src="formulario.js"></script>


        
      </div>
    </header>

    <main class="tours container">
      <h2>Nuestros destinos</h2>
      <p>Si aún no tienes pensado a donde ir, te podemos sugerir estos maginificos tours:</p>
      <div class="tour-content">
        <div class="tour-1">
          <div class="tours-txt">
            <h3>Puno/Cusco</h3>
            <p>
              Si te encanta las montañas y el hermoso clima de nuestras sierras, esta es tu mejor opción, conocerás todas las maravillas de puno y de cusco en un solo tour
            </p>
          </div>
        </div>

        <div class="tour-2">
          <div class="tours-txt">
            <h3>Piura/Tumbes</h3>
            <p>
              Si lo tuyo es el sol, la playa y la arena este tour es el indicado, pues tendrás la oportunidad de conocer las mejores playas del Perú. Vichayito, Mancora, Colán y demás.
            </p>
          </div>
        </div>

        <div class="tour-3">
          <div class="tours-txt">
            <h3>Ancash/Lima</h3>
            <p>
              Descubre la majestuosidad de la Cordillera Blanca y la riqueza histórica del Callejón de Huaylas. Vive la aventura y la cultura en cada paso. Ancash y La Libertad te esperan.
            </p>
          </div>
        </div>

        <div class="tour-4">
          <div class="tours-txt">
            <h3>Arequipa</h3>
            <p>
              Explora la Ciudad Blanca y deslúmbrate con sus maravillas naturales. Desde majestuosos volcanes hasta la arquitectura colonial, Arequipa te invita a descubrir la historia, la cultura y la belleza que la hace única.
            </p>
          </div>
        </div>
      </div>
    </main>


    <section class="video">
      <div class="video-content container">
        <div class="video-1">
          <h2>Descubre el mundo en cada viaje</h2>
          <p>
            Qhapac Ñan Travels te lleva a la historia de Perú. Ofrecemos experiencias de viaje excepcionales en cada paso del camino.
            Explora la magia de los Caminos del Inca con nosotros. Tu viaje, nuestra pasión.
          </p>
        </div>
  
        <div class="video-2">
          <video class="v1" controls>
            <source src="video/CaminosInca.mp4" type="video/mp4" />
          </video>
        </div>
      </div> 
    </section>

    <section class="carousel">
      <h1>Comentario <span id="css">de</span> Usuarios</h1>
      <div class="carousel-wrapper">
          <span id="item-1"></span>
          <span id="item-2"></span>
          <span id="item-3"></span>
          <div class="carousel-item item-1">
              <a href="#item-3" class="arrow-prev arrow"></a>
              <a href="#item-2" class="arrow-next arrow"></a>
              <div class="carousel-text">
                  <h2>María Rodríguez</h2>
                  <p>"Mi viaje con Qhapac Ñan Travels fue una experiencia inolvidable. Desde el increíble destino hasta la atención personalizada, todo fue perfecto. ¡Definitivamente volveré!"</p>
              </div>
          </div>
  
          <div class="carousel-item item-2">
              <a href="#item-1" class="arrow-prev arrow"></a>
              <a href="#item-3" class="arrow-next arrow"></a>
              <div class="carousel-text">
                  <h2>Juan Pérez</h2>
                  <p>"Nuestro viaje con esta agencia superó todas las expectativas. Los guías turísticos eran muy conocedores y amables, y cada detalle del viaje fue bien planificado. ¡Recomiendo Qhapac Ñan Travels!"</p>
              </div>
          </div>
  
          <div class="carousel-item item-3">
              <a href="#item-2" class="arrow-prev arrow"></a>
              <a href="#item-1" class="arrow-next arrow"></a>
              <div class="carousel-text">
                  <h2>Ana López</h2>
                  <p>"Viajar con esta agencia fue una decisión acertada. Hicieron que nuestro viaje a Perú fuera mágico. La comida, los paisajes y la cultura fueron asombrosos. ¡Gracias por esta experiencia única!"</p>
              </div>
          </div>
      </div>
  </section>

  <footer>
      <div class="footer-links-left">
        <h3>Información</h3>
        <ul>
          <li><a href="VistasPagina/VentanasSinRegistro/HDestino.php">Destinos</a></li>
          <li><a href="VistasPagina/Vuelo.php">Reserva</a></li>
          <li><a href="VistasPagina/VentanasSinRegistro/promociones.php">Promociones</a></li>
          <li><a href="VistasPagina/VentanasSinRegistro/Empresa.php">Nuestra Empresa</a></li>
          <li><a href="VistasPagina/VentanasSinRegistro/NuestroEquipo.php">Nuestro Equipo</a></li>
          <li><a href="VistasPagina/VentanasSinRegistro/Contactanos.php">Contactanos</a></li>
        </ul>
      </div>
      <h3>Contactanos</h3>
      <br />
      <ul class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61551098888038" target="_blank"><img src="imagenes/Facebook.png" width="185" height="185" ></a></li>
        <a href="https://wa.me/51951267834" target="_blank"><img src="imagenes/WhatsApp.png" width="185" height="185"></a></li>
        <a href="https://www.instagram.com/qhapacnantravels/" target="_blank"><img src="imagenes/Instagram.png" width="185" height="185" ></a></li>
    </ul>

    

    <br />
    <div class="copyright">
      <h4>&copy; 2023 Qhapac Ñan Travels. Todos los derechos reservados.</h4>
      <br />
      <br />
      <div class="footer-links">
        <a href="indexUser.php">Inicio</a> 
        <a href="#" id="enlaceCondiciones" class="enlace-condiciones" onclick="abrirVentanaEmergente('Login/Condiciones.html')">Condiciones de uso</a>
       <a href="#" id="enlaceAviso" class="enlace-privacidad" onclick="abrirVentanaEmergente('Login/Politica.html')">Politica de privacidad</a>
      </div>
    </footer>
    <script src="script.js"></script>



  </body>
</html>
