<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Las reales promociones</title>
    <link rel="stylesheet" href="../../css/styePromociones.css" />
    <link rel="stylesheet" href="../../css/hederfooterProm.css" />
    <link rel="icon" href="../imagenes/logo-p.png" />
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

    <header class="header">
      <div class="header-content container">
        <div class="header-txt">
          <h1>¡Tenemos las mejores PROMOCIONES!</h1>
          <p>
            Descubre los secretos de los Caminos del Inca.Cada ruta es una
            historia por contar, cada sendero es un viaje por vivir.
          </p>
          <br /><br />
        </div>
      </div>
    </header>

    <section class="esp">
      <div class="contenedorprom fondo">
        <header style="text-align: center">
          <h2 class="tit">promociones</h2>
          <div>
            <h3 style="color: white">
              Promociones para festividades importes :D
            </h3>
          </div>
        </header>
        <div class="contro">
          <div class="botones">
            <div class="arr left" id="btn-izquierda"><div></div></div>
          </div>
          <div class="vistas-previas">
            <!-- Vista previa 1 -->
            <form class="vistaprev" action="../ReservaPromoperuano.php" method="POST">
              <div style="position: relative">
                <img
                  class="logodesc"
                  src="../../imagenes/imgPromociones/icon28.png"
                  alt="Oferta"
                />
                <div class="miDiv">
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/VILCABAMBA.jpg"
                    alt="lugar"
                  />
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/Ollantaytambo2.png"
                    alt="Lugar2"
                  />
                </div>
              </div>
              <h3 class="letraCont" style="font-size: 20px; color: aliceblue">
                  Orgulloso de ser peruano
              </h3>
              <p class="letraCont">
                ¡Celebra las fiestas patrias en Perú con un viaje inolvidable!
                Ollantaytambo y Vilcabamba, dos destinos excepcionales que se ubican en
                <input type="hidden" name="dest1promo1" value="Cuzco">
                <a href="HDestino.php#CUSCO" class="letrades" name="dest1promo1"> Cuzco</a> 
                y 
                <input type="hidden" name="dest2promo1" value="Madre de Dios">
                <a href="HDestino.php#CUSCO" class="letrades"  name="dest2promo1">Madre de Dios</a>. 
                Perú es un país con una rica historia y
                cultura, y es un destino ideal para celebrar las fiestas
                patrias. En el corazón de los Andes peruanos, encontrarás dos
                destinos excepcionales para disfrutar de una experiencia única:
              </p>
              <p class="letraCont">
                Ollantaytambo es un pueblo mágico ubicado en el Valle Sagrado de los Incas. Es
                un lugar lleno de historia y cultura, y es un destino ideal para
                celebrar las fiestas patrias. Durante las fiestas patrias,
                Ollantaytambo se llena de vida y color. Hay desfiles,
                conciertos, bailes y otras actividades para celebrar la
                independencia de Perú.
              </p>
              <p class="letraCont">
                Vilcabamba es un destino turístico ubicado en la región de Amazonas. Es un
                lugar conocido por su belleza natural, su historia y su cultura.
                Durante las fiestas patrias, Vilcabamba se llena de actividades
                para celebrar la independencia de Perú. Hay desfiles,
                conciertos, bailes y otras actividades para disfrutar.
              </p> <!--href="Promociones/ReservaPromoPeruano.php"-->
              <button type="submit" name="btnreservaprom1" class="letraCont Reserva botreserv" formaction="../ReservaPromoperuano.php"
              >Reservar</button>

              <footer style="margin-bottom: 15px; margin-top: 15px">
                <ul style="color: white">
                  <li><a>Reserva hasta 1 mes antes</a></li>
                  <li><a>Tour incluido de 5 dias</a></li>
                  <li><a>Reserva ligada a disponibilidad</a></li>
                  <li><a>Duracion del viaje 7 dias</a></li>
                </ul>
                <span class="precio">Desde US$2,250</span><br />
                <span class="precio" style="color: gray; font-size: small"
                  >*Precio por persona</span
                >
              </footer>
            </form>
            <!-- Vista previa 2 -->
            <form class="vistaprev" action="../ReservaPromoperuano.php" method="POST">
              <div style="position: relative">
                <img
                  class="logodesc"
                  src="../../imagenes/imgPromociones/graduacion.png"
                  alt="Oferta"
                />
                <div class="miDiv">
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/Zorritos.jpg"
                    alt="imagen2"
                  />
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/macchu.jpg"
                    alt="lugar"
                  />
                </div>
              </div>
              <h3 class="letraCont" style="font-size: 20px; color: aliceblue">
                  Promocion 2023
              </h3>
              <p class="letraCont">
                ¡Celebra tu viaje de promo en Perú con un viaje inolvidable! En
                el corazón de los Andes peruanos (
                  <input type="hidden" name="dest1promo2" value="Cuzco">
                  <a href="HDestino.php#CUSCO" class="letrades" name="dest1promo2"> Cuzco</a>
                  ), encontrarás Machu Picchu, una
                de las maravillas del mundo moderno, y en la costa norte,
                Zorritos en 
                <input type="hidden" name="dest2promo2" value="Tumbes">
                <a href="HDestino.php#CUSCO" class="letrades" name="dest2promo2"> Tumbes</a>
                , una playa paradisíaca.
              </p>
              <p class="letraCont">
                Machu Picchu es una ciudadela inca ubicada en la Cordillera de los Andes. Es
                una de las atracciones turísticas más populares del mundo y es
                un destino ideal para un viaje de promoción. Durante un viaje a
                Machu Picchu, los participantes podrán: Visitar la ciudadela
                inca, aprender sobre la historia del Imperio Inca, disfrutar de
                la belleza natural de los Andes. Entre muchas cosas mas.
              </p>
              <p class="letraCont">
                Zorritos es una playa ubicada en la costa norte del Perú. Es un destino
                turístico popular por sus aguas cristalinas, su arena blanca y
                su ambiente relajado. Durante un viaje a Zorritos, los
                participantes podrán: Relajarse en la playa y disfrutar del sol.
                Practicar deportes acuáticos como el surf y el buceo.
                Experimentar la gastronomía peruana.
              </p>
              <button type="submit" name="btnreservaprom2" class="letraCont Reserva botreserv" formaction="../ReservaPromoperuano.php"
                >Reservar</button>
              <footer style="margin-bottom: 15px; margin-top: 15px">
                <ul style="color: white">
                  <li><a>Minino 20 estdudiantes</a></li>
                  <li><a>Maximo 35 estdudiantes</a></li>
                  <li><a>Minimo 2 responsables de alumnos</a></li>
                  <li><a>Duracion del viaje: 7 dias</a></li>
                </ul>
                <span class="precio">Desde US$1,500</span><br />
                <span class="precio" style="color: gray; font-size: small"
                  >*Precio por persona</span
                >
              </footer>
            </form>
            <!-- Vista previa 3 -->
            <form class="vistaprev" action="../ReservaPromoperuano.php" method="POST">
              <div style="position: relative">
                <img
                  class="logodesc"
                  src="../../imagenes/imgPromociones/feliz-cumpleanos.png"
                  alt="Oferta"
                />
                <div class="miDiv">
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/gruta de huagapo.jpg"
                    alt="lugar"
                  />
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/puerto maldonado.jpg"
                    alt="imagen2"
                  />

                </div>
              </div>
              <h3 class="letraCont" style="font-size: 20px; color: aliceblue">
                
                  Happy birtday Para Ti
                
              </h3>
              <p class="letraCont">
                ¡Celebra tu cumpleaños en Perú con un viaje inolvidable!El Perú
                es un país con una belleza natural y cultural incomparable, y es
                un destino ideal para celebrar un cumpleaños. En 
                <input type="hidden" name="dest1promo3" value="Junin">
                <a href="HDestino.php#CUSCO" class="letrades" name="dest1promo3"> Junin</a> 
                y 
                <input type="hidden" name="dest2promo3" value="Madre de Dios">
                <a href="HDestino.php#CUSCO" class="letrades" name="dest2promo3"> Madre de Dios</a>
                , encontrarás dos destinos excepcionales para
                disfrutar de una experiencia única: La Gruta de Huagapo y Puerto
                Maldonado.
              </p>
              <p class="letraCont">
                La Gruta de Huagapo
                es una maravilla natural ubicada en la región Junín. Es una
                cueva de 2,800 metros de longitud que alberga una gran variedad
                de estalactitas y estalagmitas. Durante el recorrido, los
                visitantes podrán disfrutar de la belleza natural de la cueva y
                aprender sobre su historia y su cultura.
              </p>
              <p class="letraCont">
                Puerto Maldonado
                es una ciudad ubicada en la selva amazónica. Es un destino
                turístico popular por su biodiversidad y su cultura. Durante el
                viaje, los visitantes podrán disfrutar de actividades como el
                ecoturismo, el turismo vivencial y la observación de aves.
              </p>
              <button type="submit" name="btnreservaprom3" class="letraCont Reserva botreserv" formaction="../ReservaPromoperuano.php"
                >Reservar</button>
              <footer style="margin-bottom: 15px; margin-top: 15px">
                <ul style="color: white">
                  <li><a>Solo aplica a persona que cumple años</a></li>
                  <li><a>Reserva solo durante el mes del cumpleaños</a></li>
                  <li><a>Duracion del viaje 7 dias</a></li>
                  <li><a>Maximo 4 personas</a></li>
                </ul>
                <span class="precio">Desde US$1,200</span><br />
                <span class="precio" style="color: gray; font-size: small"
                  >*Precio por persona</span
                >
              </footer>
            </form>
            <!-- Vista previa 4 -->
            <form class="vistaprev" action="../ReservaPromoperuano.php" method="POST">
              <div style="position: relative">
                <img
                  class="logodesc"
                  src="../../imagenes/imgPromociones/pareja-de-boda.png"
                  alt="Oferta"
                />
                <div class="miDiv">
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/mirador.jpeg"
                    alt="imagen2"
                  />
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/Zorritos.jpg"
                    alt="lugar"
                  />
                </div>
              </div>
              <h3 class="letraCont" style="font-size: 20px; color: aliceblue">
                
                  Luna de miel
                
              </h3>
              <p class="letraCont">¡Una luna de miel inolvidable en Perú!</p>

              <p class="letraCont">
                El Perú es un país con una belleza natural y cultural
                incomparable, y es un destino ideal para celebrar una luna de
                miel. En 
                <input type="hidden" name="dest1promo4" value="Tumbes">
                <a href="HDestino.php#CUSCO" class="letrades" name="dest1promo4"> Tumbes</a>
                 y 
                <input type="hidden" name="dest2promo4" value="Tacna">
                <a href="HDestino.php#CUSCO" class="letrades" name="dest2promo4"> Tacna</a>
                , encontrarás dos
                destinos excepcionales para disfrutar de una experiencia única:
                El Mirador de Pachía y Zorritos.
              </p>
              <p class="letraCont">
                Zorritos
                es un pueblo turístico ubicado en el distrito de Zorritos,
                Tumbes. Es un lugar conocido por sus playas, su gastronomía y su
                cultura. Durante la luna de miel, los visitantes podrán
                disfrutar de actividades como el buceo, el surf, la pesca y la
                observación de aves.
              </p>
              <p class="letraCont">
                El mirador de Pachía
                es un mirador natural ubicado en el distrito de Pachía, Tacna.
                Es un lugar perfecto para disfrutar de una vista panorámica del
                desierto de Sechura y del Océano Pacífico. Durante la puesta de
                sol, el paisaje es simplemente mágico.
              </p>

              <button type="submit" name="btnreservaprom4" class="letraCont Reserva botreserv" formaction="../ReservaPromoperuano.php"
                >Reservar</button>
              <footer style="margin-bottom: 15px; margin-top: 15px">
                <ul style="color: white">
                  <li><a>Maximo 2 personas</a></li>
                  <li><a>Reserva con 3 mese de anticipación</a></li>
                  <li><a>Certificado de matrimonio</a></li>
                </ul>
                <span class="precio">Desde US$2,000</span><br />
                <span class="precio" style="color: gray; font-size: small"
                  >*Precio por persona</span
                >
              </footer>
            </form>
            <!-- Vista previa 5 -->
            <form class="vistaprev" action="../ReservaPromoperuano.php" method="POST">
              <div style="position: relative">
                <img
                  class="logodesc"
                  src="../../imagenes/imgPromociones/feliz-ano-nuevo.png"
                  alt="Oferta"
                />
                <div>
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/plaza-armas-cusco-banderas-scaled.jpg"
                    alt="lugar"
                  />
                </div>
              </div>
              <h3 class="letraCont" style="font-size: 20px; color: aliceblue">
                Año Nuevo Viajes nuevos
              </h3>
              <p class="letraCont">
                Empieza el año nuevo en Perú con un viaje inolvidable en los mejores sitios como 
                <a href="HDestino.php#CUSCO" class="letrades" name="dest1promo1"
                  > Tacna </a>!
              </p>
              <p class="letraCont">
                Plaza de Armas
                de Tacna, un destino excepcional para una experiencia única El
                Perú es un país con una rica historia y cultura, y es un destino
                ideal para celebrar Año Nuevo. En el corazón de la ciudad de
                Tacna, encontrarás un destino excepcional para disfrutar de una
                experiencia única: la Plaza de Armas de Tacna. La Plaza de Armas
                de Tacna es una plaza histórica ubicada en el centro de la
                ciudad.
              </p>
              <p class="letraCont">
              <input type="hidden" name="dest1promo5" value="Tacna">
              <a href="HDestino.php#CUSCO" class="letrades" name="dest1promo5"> Tacna</a>  
                es un lugar lleno de historia y cultura, y es un destino ideal
                para celebrar Año Nuevo. Durante la víspera de Año Nuevo, la
                plaza se llena de vida y color. Hay conciertos, bailes, fuegos
                artificiales y otras actividades para celebrar el nuevo año.
              </p>
              <button type="submit" name="btnreservaprom5" class="letraCont Reserva botreserv" formaction="../ReservaPromoperuano.php"
                >Reservar</button>
              <footer style="margin-bottom: 15px; margin-top: 15px">
                <ul style="color: white">
                  <li><a>7 dias </a></li>
                  <li><a>1 champán</a></li>
                  <li><a>Maximo 5 personas</a></li>

                </ul>
                <span class="precio">Desde US$400</span><br />
                <span class="precio" style="color: gray; font-size: small"
                  >*Precio por persona</span
                >
              </footer>
            </form>
            <!-- Vista previa 6 -->
            <form class="vistaprev" action="../ReservaPromoperuano.php" method="POST">
              <div style="position: relative">
                <img
                  class="logodesc"
                  src="../../imagenes/imgPromociones/dia-de-san-valentin-icono.png"
                  alt="Oferta"
                />
                <div class="miDiv">
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/lagollaganuco.jpg"
                    alt="lugar"
                  />
                  <img
                    class="tmimag"
                    src="../../imagenes/imgPromociones/lago sandoval.jpg"
                    alt="imagen2"
                  />
                </div>
              </div>
              <h3 class="letraCont" style="font-size: 20px; color: aliceblue">
                Tio Valentin
                
              </h3>
              <p class="letraCont">
                ¡Celebra San Valentín en Perú con un viaje inolvidable!
              </p>
              <p class="letraCont">
                El Perú es un país con una belleza natural incomparable, y es un
                destino ideal para celebrar San Valentín. En 
                <input type="hidden" name="dest1promo6" value="Ancash">
                <a href="HDestino.php#CUSCO" class="letrades" name="dest1promo6"
                  > Ancash</a> y <input type="hidden" name="dest2promo6" value="Madre de Dios"><a href="HDestino.php#CUSCO" class="letrades" name="dest2promo6"
                  > Madre de Dios</a>
                , encontrarás dos destinos para disfrutar de una
                experiencia única: los lagos Llanganuco y Sandoval.
              </p>
              <p class="letraCont">
                Los lagos Llanganuco son un conjunto de tres lagos ubicados en el Parque Nacional
                Huascarán. Son conocidos por sus aguas cristalinas y sus
                impresionantes paisajes. Durante San Valentín, los lagos
                Llanganuco se llenan de vida y color. Hay caminatas, picnics y
                otras actividades para disfrutar en pareja.
              </p>
              <p class="letraCont">
                EL lago Sandoval es un lago ubicado en la Reserva Nacional Tambopata. Durante San
                Valentín, el lago Sandoval se llena de actividades para celebrar
                el amor. Hay paseos en bote, observación de aves y otras
                actividades para disfrutar en pareja.
              </p>

              <button type="submit" name="btnreservaprom6" class="letraCont Reserva botreserv" formaction="../ReservaPromoperuano.php"
                >Reservar</button>
              <footer style="margin-bottom: 15px; margin-top: 15px">
                <ul style="color: white">
                  <li><a>7 dias</a></li>
                  <li><a>Barra libre</a></li>
                  <li><a>Maximo 2 personas</a></li>
                  <li><a>Recuerdo de luna de miel</a></li>
                </ul>
                <span class="precio">Desde US$1,200</span><br />
                <span class="precio" style="color: gray; font-size: small"
                  >*Precio por persona</span
                >
              </footer>
            </form>
            <!-- ... Agregar más vistas previas según sea necesario ... -->
          </div>
          <div class="botones">
            <div class="arr right" id="btn-derecha"><div></div></div>
          </div>
        </div>
      </div>
    </section>
    <footer id="mi-footer">
      <div class="footer-links-left">
        <h3>Información</h3>
        <ul>
          <li><a href="/codigo-de-etica">Código de ética</a></li>
          <li><a href="/libro-de-reclamaciones">Libro de reclamaciones</a></li>
          <li><a href="/documentos">Documentos</a></li>
          <li>
            <a href="/peticiones-quejas-reclamos"
              >Consulta de peticiones, quejas o reclamos</a
            >
          </li>
          <li><a href="/agentes-de-viajes">Agentes de viajes</a></li>
          <li><a href="/eventos">Eventos</a></li>
          <li><a href="/noticias">Noticias</a></li>
        </ul>
      </div>
      <h3>Contactanos</h3>
      <br />
      <ul class="social-icons">
        <a
          href="https://www.facebook.com/profile.php?id=61551098888038"
          target="_blank"
        >
          <img src="../../imagenes/Facebook.png" width="185" height="185"
        /></a>

        <a href="https://wa.me/51951267834" target="_blank">
          <img src="../../imagenes/WhatsApp.png" width="185" height="185"
        /></a>

        <a href="https://www.instagram.com/qhapacnantravels/" target="_blank">
          <img src="../../imagenes/Instagram.png" width="185" height="185"
        /></a>
      </ul>
      <br />
      <div class="copyright">
        <h4>&copy; 2023 Qhapac Ñan Travels. Todos los derechos reservados.</h4>
        <br />
        <br />
        <div class="footer-links">
          <a href="/">Inicio</a> |
          <a href="/terminos">Términos y condiciones</a> |
          <a href="/privacidad">Política de privacidad</a>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/scriptProm.js"></script>
  </body>
</html>
