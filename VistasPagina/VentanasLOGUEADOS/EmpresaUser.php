<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="../../css/styleEmpresa.css">
    <link rel="stylesheet" href="../../css/Header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="icon" href="../imagenes/logo-p.png">
</head>
<body>
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
    </nav>
    <script src="../js/inicio.js"></script>

    <section class="sectcont">
        <div class="txtsemiasd">
            <p>Sobre Nosotros</p>
        </div>
        <div class="cuad">
            <div>    
                <div class="cuadsub">
                    <p class="txtSub">Descripcion de la empresa</p>
                </div>
                <div class="divpadre">
                    <div class="div-izquierdo">
                        <img class="tmmin" src="../../imagenes/imgEmpresa/descrpEmpresa.jpg" alt="Imagen">
                    </div>
                    <div class="div-derecho cuadrotxt">
                        <p>Nuestra misión es ofrecer viajes que trascienden lo convencional, guiando a nuestros 
                            clientes a través de los antiguos Caminos del Inca para descubrir, aprender y conectarse
                            con este mundo ancestral de una manera que transforme sus vidas. Estamos comprometidos en
                            brindar experiencias de viaje auténticas y significativas que inspiren a los aventureros y 
                            promuevan el turismo en estas rutas históricas.
                        </p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="cuad">
            <div>    
                <div class="cuadsub">
                    <p class="txtSub">Mision</p>
                </div>
                <div class="divpadre">
                    <div class="div-derecho cuadrotxt">
                        <p>Nuestra misión es ofrecer viajes que trascienden lo convencional, guiando a nuestros 
                            clientes a través de los antiguos Caminos del Inca para descubrir, aprender y conectarse
                            con este mundo ancestral de una manera que transforme sus vidas. Estamos comprometidos en
                            brindar experiencias de viaje auténticas y significativas que inspiren a los aventureros y 
                            promuevan el turismo en estas rutas históricas.
                        </p>
                    </div>
                    <div class="div-izquierdo">
                        <img class="tmmin" src="../../imagenes/imgEmpresa/misiEmpre1.jpg" alt="Imagen">
                    </div>
                </div>
            </div>    
        </div>
        <div class="cuad">
            <div>    
                <div class="cuadsub">
                    <p class="txtSub">Vision</p>
                </div>
                <div class="divpadre">
                    <div class="div-izquierdo">
                        <img class="tmmin" src="../../imagenes/imgEmpresa/objEmpre.jpg" alt="Imagen">
                    </div>
                    <div class="div-derecho cuadrotxt">
                        <p>Nuestra misión es ofrecer viajes que trascienden lo convencional, guiando a nuestros 
                            clientes a través de los antiguos Caminos del Inca para descubrir, aprender y conectarse
                            con este mundo ancestral de una manera que transforme sus vidas. Estamos comprometidos en
                            brindar experiencias de viaje auténticas y significativas que inspiren a los aventureros y 
                            promuevan el turismo en estas rutas históricas.
                        </p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="centrartxt">
            <p id="txtsemi">¿Porque elegirnos?</p>
        </div>
        <div class="centcuadro">
            <div class="zoom-div cuadro">
                <p>Paga tu viaje con cualquier medio de pago, efectivo o transferencia bancaria.</p>
            </div>
            <div class="zoom-div cuadro">
                <p>Ofrecemos atención de profesionales expertos en viajes vía telefónica, online y en sucursales.</p>
            </div>
            
            <div class="zoom-div cuadro">
                <p>Te acompañamos antes, durante y después del viaje. Creamos y damos acceso a experiencias de viaje inolvidables de principio a fin.</p>
            </div>

            <div class="zoom-div cuadro">
                <p>Nuestro compromiso es tu satisfacción. Trabajamos incansablemente para asegurarnos de que tengas una experiencia de viaje positiva y sin preocupaciones.</p>
            </div>

            <div class="zoom-div cuadro">
                <p>Te ofrecemos acceso a experiencias de viaje exclusivas que no encontrarás en otro lugar. Queremos que tus viajes sean únicos y especiales..</p>
            </div>
        </div>


    </section>

    <section>
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

    </section>
</body>
</html>