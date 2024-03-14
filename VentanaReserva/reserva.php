<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reserva</title>
    <link rel="stylesheet" href="reserva.css" />
    <link rel="icon" href="/imagenes/logo-p.png">
  </head>
  <body>
    <nav class="navbar">

      <div class="logo">
        <img src="/imagenes/LOGO TERMINADO.png" alt="Logo de la Compañia" />
      </div>

      <ul>
        <li><a href="/index.html">INICIO</a></li>
        <li><a href="/VentanaDestino/destinos.html">DESTINOS</a></li>

        <li><a href="#">RESERVAS</a></li>
        <li><a href="/VentanaPromociones/promociones.html">PROMOCIONES</a></li>
        <li><a href="#">¿QUIENES SOMOS?</a>
           <ul class="menu-desplegable">
            <li><a href="/VentanaEmpresa/Empresa.html">Qhapac Ñan Travels</a></li><br>
            <li><a href="/VentanaEquipo/NuestroEquipo.html">Nuestro Equipo</a></li>
           </ul>
          </li>
        <li><a href="/VentanaContactanos/Contactanos.html">CONTÁCTANOS</a></li>
        <li><a href="/Login/Login.html">LOGIN</a></li>
      </ul>
    </nav>

    <header class="header">
      <div class="header-content container">
        <div class="header-txt">
          <h1>¡Que esperas para reservar tu viaje soñado!</h1>
          <p>
            Descubre los secretos de los Caminos del Inca.Cada ruta es una historia por contar, cada sendero es un viaje por vivir.
          </p><br><br>
        </div>
      </div>
    </header>

    <main>
      <section id="informacion-viaje">
        <h2>Información del Viaje</h2>
        <form id="formulario-reserva">
          <table>
            <tr>
              <td><label for="nombre">Nombre:</label></td>
              <td><input type="text" id="nombre" name="nombre" required /></td>
            </tr>
            <tr>
              <td><label for="personas">Número de personas:</label></td>
              <td><input type="number" id="personas" name="personas" min="1" required /></td>
            </tr>
            <tr>
              <td><label for="ida">Unidireccional:</label></td>
              <td><input type="checkbox" id="ida" name="ida"/>Si</td>
            </tr>
          </table>
    
          <h3>Detalles del Viaje</h3>
          <table>
            <tr>
              <td><label for="origen">Origen:</label></td>
              <td><input type="text" id="origen" name="origen" required /></td>
              <td><label for="destino">Destino:</label></td>
              <td><input type="text" id="destino" name="destino" required /></td>
            </tr>
            <tr>
              <td><label for="fecha-salida">Fecha de salida:</label></td>
              <td><input type="date" id="fecha-salida" name="fecha-salida" required /></td>
              <td><label for="fecha-regreso">Fecha de regreso:</label></td>
              <td><input type="date" id="fecha-regreso" name="fecha-regreso" /></td>
            </tr>
          </table>
          <button type="submit">Reservar</button>
        </form>
      </section>
    </main>
    

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
          <a href="https://www.facebook.com/profile.php?id=61551098888038" target="_blank"><img src="/imagenes/Facebook.png" width="185" height="185" ></a></li>
          <a href="https://wa.me/51951267834" target="_blank"><img src="/imagenes/WhatsApp.png" width="185" height="185"></a></li>
          <a href="https://www.instagram.com/qhapacnantravels/" target="_blank"><img src="/imagenes/Instagram.png" width="185" height="185" ></a></li>
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
      </footer>
  </body>

  
</html>
