<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="stylesheet" href="../../css/nuestro-equipo1.css">
    <link rel="icon" href="/imagenes/logo-p.png">
  </head>
  <body style="background: radial-gradient(circle, rgb(22, 30, 46), rgb(138, 153, 173));">

    <nav class="menu">
    <section class="encabezado_cont">
        <ul class="menu__links0">
          
          <li class="menu__item0"> 
            <a href="#" class="menu__link0">Ayuda</a>
          </li>
          <li class="menu__item0">
            <a href="../../VistasPagina/VentanasLOGUEADOS/Contactanos.php" class="menu__link0">Contactanos</a>
          </li>
          <li class="menu__item0">
          
             <form method="post">
            <button type="submit" name="SignUp" class="btn">Cerrar Sesión</button>
        </form>
          </li>
          <?php
          
          if (isset($_POST['SignUp'])) {
          header('Location: ../../index.php'); 
          exit; 
        }
        ?>
          </li>
        </ul>

        <div class="menu__hamburguer">
          <img src="../assets/menu.svg" class="menu__img" />
        </div>

        
      </section>


      <section class="menu_cont">
        <div class="logo">
          <img src="../../imagenes/LOGO TERMINADO.png" alt="Logo de la Compañia" />
        </div>

        <ul class="menu__links">
          <li class="menu__item">
          <a href="../../indexUser.php" class="menu__link">Inicio</a>
          </li>

          <li class="menu__item">
            <a href="../../VistasPagina/VentanasLOGUEADOS/HDestino.php" class="menu__link"
              >Destinos</a
            >
          </li>

          <li class="menu__item">
            <a href="" class="menu__link">Reserva</a>
          </li>

          <li class="menu__item">
            <a href="../../VistasPagina/VentanasLOGUEADOS/promocionesUser.php" class="menu__link"
              >Promociones</a
            >
          </li>

          <li class="menu__item menu__item--show">
            <a href="#" class="menu__link"
              >¿QUIENES SOMOS? <img src="../../assets/arrow.svg" class="menu__arrow"
            /></a>

            <ul class="menu__nesting">
              <li class="menu__inside">
                <a href="../../VistasPagina/VentanasLOGUEADOS/EmpresaUser.php" class="menu__link menu__link--inside"
                  >Qhapac Ñan Travels</a
                >
              </li>
              <li class="menu__inside">
                <a href="../../VistasPagina/VentanasLOGUEADOS/NuestroEquipoUser.php" class="menu__link menu__link--inside"
                  >Nuestro Equipo</a
                >
              </li>
            </ul>
          </li>
          <li class="menu__item menu__item--show">
            <a href="#" class="menu__link"
              >MI CUENTA <img src="../../assets/arrow.svg" class="menu__arrow"
            /></a>
            

            <ul class="menu__nesting">
              <li class="menu__inside">
                <a href="../../VistasPagina/MiPerfil.php" class="menu__link menu__link--inside"
                  >MI PERFIL</a
                >
              </li>
              <li class="menu__inside">
                <a href="../../Billetera/Billetera.php" class="menu__link menu__link--inside"
                  >MI BILLETERA</a
                >
              </li>
            </ul>
          </li>
        </ul>
        </ul>

        
      </section>
      <script src="../js/inicio.js"></script>
    </nav>
    <header class="header">

      <div class="header-content container">
        <div class="header-txt">
          <h1>CADA SENDERO CUENTA UNA HISTORIA ¿Cuál es la tuya?</h1>
          <p>
            Sumérgete en la auténtica cultura peruana a través de nuestras
            aventuras personalizadas.
          </p>
        </div>
      </div>
    </header>
</br>
</br>
</br>


    <h1 style="
    background: radial-gradient(circle, rgb(100, 118, 120), rgb(22, 38, 62));">¿Quiénes somos?</h1>
  </br>
  </br>
    <ul>
      <li>
        Somos un grupo de estudiantes de la Universidad Técnologica del Perú,
        actualmente cursamos el quinto ciclo. Esta página web está diseñada como
        herramienta para la empresa ficticia "Qhapac Ñan Travels" la cual es una
        agencia de turismo que tiene como finalidad exhibir los principales
        destinos turisticos de todo departamento por donde atraviesen los
        caminos del Inca.
      </li>
    </ul>
    <section  id="nuestro-equipo">
    </br>
    </br>
      <h1 style="
      background: radial-gradient(circle, rgb(100, 118, 120), rgb(22, 38, 62));">Nuestro equipo</h1>
    </br>
    </br>
    <div class="team-members">
      <div class="team-member">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../imagenes/imgNuestroEquipo/Yosselin.jpg" alt="Andrea Altapiurano" />
            </div>
            <div class="flip-card-back">
              <p >La Andreita es muy buena</p>
            </div>
          </div>
        </div>
        <p>Andrea Altapiurano</p>
      </div>
      <div class="team-members">
        <div class="team-member">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="../../imagenes/imgNuestroEquipo/Omar.png" alt="Omar Trejo" />
              </div>
              <div class="flip-card-back">
                <p>Omar aprobó CAF2</p>
              </div>
            </div>
          </div>
          <p>Omar Trejo</p>
        </div>
        <div class="team-members">
          <div class="team-member">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="../../imagenes/imgNuestroEquipo/Esther.png" alt="Esther Bendezu" />
                </div>
                <div class="flip-card-back">
                  <p>Esther sonríe mucho</p>
                </div>
              </div>
            </div>
            <p>Esther Bendezu</p>
          </div>
          <div class="team-members">
            <div class="team-member">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="../../imagenes/imgNuestroEquipo/Foto Carnet.jpg" alt="Luis Paz" />
                  </div>
                  <div class="flip-card-back">
                    <p>Lorem Ipsum si</p>
                  </div>
                </div>
              </div>
              <p>Luis Paz</p>
            </div>
    </section>
  </br>
  </br>
  </br>
  </br>

    <footer>
      <div class="footer-links-left">
        <h3>Información</h3>
        <ul>
          <li><a href="/codigo-de-etica">Código de ética</a></li>
          <li><a href="/libro-de-reclamaciones">Libro de reclamaciones</a></li>
          <li><a href="/documentos">Documentos</a></li>
          <li><a href="/peticiones-quejas-reclamos">Consulta de peticiones, quejas o reclamos</a></li>
          <li><a href="/agentes-de-viajes">Agentes de viajes</a></li>
          <li><a href="/eventos">Eventos</a></li>
          <li><a href="/noticias">Noticias</a></li>
        </ul>
      </div>
      <h3>Contactanos</h3>
      <br />
      <ul class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61551098888038" target="_blank"><img src="../../imagenes/Facebook.png" width="185" height="185" ></a></li>
        <a href="https://wa.me/51951267834" target="_blank"><img src="../../imagenes/WhatsApp.png" width="185" height="185"></a></li>
        <a href="https://www.instagram.com/qhapacnantravels/" target="_blank"><img src="../../imagenes/Instagram.png" width="185" height="185" ></a></li>
    </ul>

    

    <br />
    <div class="copyright">
      <h4>&copy; 2023 Qhapac Ñan Travels. Todos los derechos reservados.</h4>
      <br />
      <br />
      <div class="footer-links">
        <a href="../index.html">Inicio</a> |
        <a href="/terminos">Términos y condiciones</a> |
        <a href="/privacidad">Política de privacidad</a>
      </div>
    </footer>
  </body>
</html>
