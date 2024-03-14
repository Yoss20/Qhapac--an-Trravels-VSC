<?php
// Definir las variables 
$dest1 = '';
$dest2 = '';
$fechmax1 = '';
$fechamin1 = '';
$fechmax2 = '';
$fechamin2 = '';


// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnreservaprom1'])) {
    // Recuperar los datos del formulario y asignarlos a las variables
    $dest1 = $_POST['dest1promo1'] ?? '';
    $dest2 = $_POST['dest2promo1'] ?? '';
    $fechmax1 = '2024-07-24';
    $fechamin1 = '2024-07-01';
    $fechmax2 = '2024-07-31';
    $fechamin2 = '2024-07-08';
}

// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnreservaprom2'])) {
  // Recuperar los datos del formulario y asignarlos a las variables
  $dest1 = $_POST['dest1promo2'] ?? '';
  $dest2 = $_POST['dest2promo2'] ?? '';
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnreservaprom3'])) {
  // Recuperar los datos del formulario y asignarlos a las variables
  $dest1 = $_POST['dest1promo3'] ?? '';
  $dest2 = $_POST['dest2promo3'] ?? '';
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnreservaprom4'])) {
  // Recuperar los datos del formulario y asignarlos a las variables
  $dest1 = $_POST['dest1promo4'] ?? '';
  $dest2 = $_POST['dest2promo4'] ?? '';
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnreservaprom5'])) {
  // Recuperar los datos del formulario y asignarlos a las variables
  $dest1 = $_POST['dest1promo5'] ?? '';
  $dest2 = $_POST['dest2promo5'] ?? '';
  $fechmax1 = '2024-12-28';
  $fechamin1 = '2024-12-01';
  $fechmax2 = '2024-12-31';
  $fechamin2 = '2024-12-05';
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnreservaprom6'])) {
  // Recuperar los datos del formulario y asignarlos a las variables
  $dest1 = $_POST['dest1promo6'] ?? '';
  $dest2 = $_POST['dest2promo6'] ?? '';
  $fechmax1 = '2024-02-25'; 
  $fechamin1 = '2024-02-01';
  $fechmax2 = '2024-02-28'; 
  $fechamin2 = '2024-02-04';
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Qhapac Ñan Travels</title>
    <link rel="stylesheet" href="../../css/stylePromos23.css" />
    <link rel="icon" href="../../imagenes/logo-p.png" />
    <link rel="stylesheet" href="../../css/footer.css">
    <script src="../../js/ReservaPromo.js"></script>
  </head>

  <body>
    <?php
    include("../../config/conexion.php");

    $sql = "SELECT * FROM destinos WHERE Id_dest=1";
    $stmt = $conexion->prepare($sql); $stmt->execute(); $resultado =
    $stmt->fetch(PDO::FETCH_ASSOC); if ($resultado) { $nom_dest =
    $resultado['Nom_dest']; } $sql1 = "SELECT * FROM destinos WHERE Id_dest=5";
    $stmt1 = $conexion->prepare($sql1); $stmt1->execute(); $resultado1 =
    $stmt1->fetch(PDO::FETCH_ASSOC); if ($resultado1) { $nom_dest1 =
    $resultado1['Nom_dest']; } $sql2 = "SELECT * FROM destinos WHERE
    Id_dest=10"; $stmt2 = $conexion->prepare($sql2); $stmt2->execute();
    $resultado2 = $stmt2->fetch(PDO::FETCH_ASSOC); if ($resultado2) { $nom_dest2
    = $resultado2['Nom_dest'];}?>

    <nav class="menu">
      <section class="encabezado_cont">
        <ul class="menu__links0">
          <li class="menu__item0">
          <a href="https://wa.me/51951267834" target="_blank">Ayuda</a>
          </li>
          <li class="menu__item0">
            <a href="../Contactanos.php" class="menu__link0">Contactanos</a>
          </li>
          <li class="menu__item0">
            <button href="../Login.php" class="btn">Login</button>
            <?php
          
          if (isset($_POST['Login'])) {
          header('Location: /Qhapac-an-Travels/VistasPagina/Login.php');
          exit; 
        }
        ?>
            <button href="../Registrar.php" class="btn">Sign up</button>
            <?php
          
          if (isset($_POST['SignUp'])) {
          header('Location: /Qhapac-an-Travels/VistasPagina/Registro.php');
          exit; 
        }
        ?>
          </li>
        </ul>

        <div class="menu__hamburguer">
          <img src="../../assets/menu.svg" class="menu__img" />
        </div>
      </section>

      <section class="menu_cont">
        <div class="logo">
          <img
            src="../../imagenes/LOGO TERMINADO.png"
            alt="Logo de la Compañia"
          />
        </div>

        <ul class="menu__links">
          <li class="menu__item">
            <a href="/Qhapac-an-Travels/indexUser.php" class="menu__link">Inicio</a>
          </li>

          <li class="menu__item">
            <a
              href="/Qhapac-an-Travels/VistasPagina/HDestinoUser.php"
              class="menu__link"
              >Destinos</a
            >
          </li>

          <li class="menu__item">
            <a href="vuelos.html" class="menu__link">Reserva</a>
          </li>

          <li class="menu__item">
            <a href="../promocionesUser.php" class="menu__link">Promociones</a>
          </li>

          <li class="menu__item menu__item--show">
            <a href="/Qhapac-an-Travels/VistasPagina/NuestroEquipoUser.php" class="menu__link"
              >¿QUIENES SOMOS?
              <img src="../../assets/arrow.svg" class="menu__arrow"
            /></a>

            <ul class="menu__nesting">
              <li class="menu__inside">
                <a href="/Qhapac-an-Travels/VistasPagina/EmpresaUser.php" class="menu__link menu__link--inside"
                  >Qhapac Ñan Travels</a
                >
              </li>
              <li class="menu__inside">
                <a href="/Qhapac-an-Travels/VistasPagina/NuestroEquipoUser.php" class="menu__link menu__link--inside"
                  >Nuestro Equipo</a
                >
              </li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>

    <script src="../../js/inicio.js"></script>

    <header class="header">
      <div class="options">
        <button class="option-btn">
          <img src="../../assets/avion.svg" class="avion" />Vuelos
        </button>
        <button class="option-btn">
          <img src="../../assets/hotel.svg" class="avion" />Hoteles</button
        ><br />
      </div>
      <br />

      <section class="header-form">
        <h1><strong>Elija su próximo destino:</strong></h1>
        <h2>Revise si hay vuelos disponibles</h2>

        <select id="tipoViaje" class="tipoViaje">
          <option value="idaYVuelta">Ida y Vuelta</option>
        </select>

        <form class="flex_IDAYVUELTA">
          <div class="flex_cont flex_cont11">
            <h3>Origen</h3>
            <div class="flex_cont1">
              <img src="../../assets/lugar.svg" />
              <input
                type="text"
                class="form-control"
                value="<?php echo $nom_dest; ?>"
                readonly
              />
            </div>
          </div>

          <div class="flex_cont flex_cont22">
            <h3>Destino</h3>
            <div class="flex_cont1">
              <img src="../../assets/lugarD.svg" />
              <select name="destino" id="destino" style="width: 100%">
                <option value="Vilcabamba"><?php echo $dest1?></option>
                <option value="Ollantaytambo"><?php echo $dest2?></option>
              </select>
            </div>
          </div>

          <div class="flex_cont flex_cont33">
            <h3>Fecha de Ida</h3>
            <div class="flex_cont1">
              <img src="../../assets/calendar.svg" />
              <input
                type="date"
                id="fecha-salida"
                class="form-control"
                name="fechaIda"
                placeholder="Fecha de Ida"
                max="<?php echo $fechmax1?>"
                min="<?php echo $fechamin1?>"
                required
              />
            </div>
          </div>

          <div class="flex_cont flex_cont33">
            <h3>Fecha de Vuelta</h3>
            <div class="flex_cont1">
              <img src="../../assets/calendar.svg" />
              <input
                type="date"
                id="fecha-regreso"
                class="form-control"
                name="fechaVuelta"
                placeholder="Fecha de Vuelta"
                max="<?php echo $fechmax2?>"
                min="<?php echo $fechamin2?>"
                required
              />
            </div>
          </div>

          <div class="flex_cont flex_cont44">
            <h3>Cantidad de Personas</h3>
            <div class="flex_cont1">
              <img src="../../assets/user.svg" />
              <input
                type="number"
                id="cantidadPasajeros"
                name="cantidadPasajeros"
                min="1"
                max="5"
              />
            </div>
          </div>

          <div class="btnIdayVuelta">
          <button class="btnIV"><img src="../../assets/lupa.svg" class="lupa"
            />Buscar</button>
        </div>
        </form>
      </section>
      <script src="../../js/fechaprom.js"></script>
    </header>
    

    <section class="Reserva fondoimg">
      <section class="pasosreserva_cont">
        <div class="pasosreserva">
          <li>
            <a class="reserva__link1"
              >1. Seleccionar Vuelo<img
                src="../../assets/arrow2.svg"
                class="arrow2"
            /></a>
          </li>
          <li>
            <a class="reserva__link2"
              >2. Completar Datos<img
                src="../../assets/arrow2.svg"
                class="arrow2"
            /></a>
          </li>
          <li>
            <a class="reserva__link3"
              >3. Finalizar reserva<img
                src="../../assets/arrow2.svg"
                class="arrow20"
            /></a>
          </li>
        </div>

        <section class="paso1">
          <div class="info">
            <h3>Elige tu vuelo de salida de</h3>
            <input
              type="text"
              class="RutaVuelo"
              value="<?php echo $nom_dest; ?>"
              readonly
            />
          </div>

          <!--Muestra los vuelos disponibles-->
          <section class="selecVuelo">
            <form class="VuelDispoLATAM">
              <!--la empresa-->
              <div class="empAereas_cont">
                <div class="fechaSalida">
                  <img src="../../assets/exit.svg" />
                  <h4>Salida</h4>
                  <input type="text" class="fechaS" readonly />
                </div>
                <div class="empAereas">
                  <img src="../../imagenes/Latam.png" />
                  <h4>LATAM Airlines</h4>
                </div>
              </div>

              <!--detalles del vuelo-->
              <div class="detalleV">
                <input type="text" class="orige_dest" readonly />
                <div class="horaduracV">
                  <input type="text" class="HoraSal" readonly />
                  <img src="../../assets/flecha.svg" />
                  <input type="text" class="HoraLleg" readonly />
                </div>
                <div class="Duracion">
                  <h4>Duración</h4>
                  <input type="text" class="duracVuel" readonly />
                </div>
              </div>

              <!--precios de vuelos-->
              <div class="precioV">
                <div class="disponibles">
                  <input
                    type="text"
                    class="asientDisp"
                    id="asientDisp"
                    readonly
                  />
                  <h5><strong>asientos disponibles</strong></h5>
                </div>
                <h5>Precio por persona</h5>
                <div class="precio">
                  <h4><strong>S/</strong></h4>
                  <input type="text" class="precXper" id="precXper" readonly />
                  <h4><strong>PEN</strong></h4>
                </div>

                <div class="total">
                  <h4 class="txtTot"><strong>Total</strong></h4>
                  <h4><strong>S/</strong></h4>
                  <input
                    type="text"
                    class="precTotal"
                    id="precTotal"
                    readonly
                  />
                  <h4><strong>PEN</strong></h4>
                </div>
                <div>
                  <button class="btnReserva">Reservar</button>
                </div>
              </div>
            </form>

            <form class="VuelDispoSTAR">
              <!--la empresa-->
              <div class="empAereas_cont">
                <div class="fechaSalida">
                  <img src="../../assets/exit.svg" />
                  <h4>Salida</h4>
                  <input type="text" class="fechaS" readonly />
                </div>
                <div class="empAereas">
                  <img src="../../imagenes/Star.png" />
                  <h4>Star Perú</h4>
                </div>
              </div>

              <!--detalles del vuelo-->
              <div class="detalleV">
                <input type="text" class="orige_dest" readonly />
                <div class="horaduracV">
                  <input type="text" class="HoraSal" readonly />
                  <img src="../../assets/flecha.svg" />
                  <input type="text" class="HoraLleg" readonly />
                </div>
                <div class="Duracion">
                  <h4>Duración</h4>
                  <input type="text" class="duracVuel" readonly />
                </div>
              </div>

              <!--precios de vuelos-->
              <div class="precioV">
                <div class="disponibles">
                  <input
                    type="text"
                    class="asientDisp"
                    id="asientDisp"
                    readonly
                  />
                  <h5><strong>asientos disponibles</strong></h5>
                </div>
                <h5>Precio por persona</h5>
                <div class="precio">
                  <h4><strong>S/</strong></h4>
                  <input type="text" class="precXper" id="precXper" readonly />
                  <h4><strong>PEN</strong></h4>
                </div>

                <div class="total">
                  <h4 class="txtTot"><strong>Total</strong></h4>
                  <h4><strong>S/</strong></h4>
                  <input
                    type="text"
                    class="precTotal"
                    id="precTotal"
                    readonly
                  />
                  <h4><strong>PEN</strong></h4>
                </div>
                <div>
                  <button class="btnReserva">Reservar</button>
                </div>
              </div>
            </form>

            <form class="VuelDispoVivaAir">
              <!--la empresa-->
              <div class="empAereas_cont">
                <div class="fechaSalida">
                  <img src="../../assets/exit.svg" />
                  <h4>Salida</h4>
                  <input type="text" class="fechaS" readonly />
                </div>
                <div class="empAereas">
                  <img src="../../imagenes/VivaAir.png" />
                  <h4>Viva Air</h4>
                </div>
              </div>

              <!--detalles del vuelo-->
              <div class="detalleV">
                <input type="text" class="orige_dest" readonly />
                <div class="horaduracV">
                  <input type="text" class="HoraSal" readonly />
                  <img src="../../assets/flecha.svg" />
                  <input type="text" class="HoraLleg" readonly />
                </div>
                <div class="Duracion">
                  <h4>Duración</h4>
                  <input type="text" class="duracVuel" readonly />
                </div>
              </div>

              <!--precios de vuelos-->
              <div class="precioV">
                <div class="disponibles">
                  <input
                    type="text"
                    class="asientDisp"
                    id="asientDisp"
                    readonly
                  />
                  <h5><strong>asientos disponibles</strong></h5>
                </div>
                <h5>Precio por persona</h5>
                <div class="precio">
                  <h4><strong>S/</strong></h4>
                  <input type="text" class="precXper" id="precXper" readonly />
                  <h4><strong>PEN</strong></h4>
                </div>

                <div class="total">
                  <h4 class="txtTot"><strong>Total</strong></h4>
                  <h4><strong>S/</strong></h4>
                  <input
                    type="text"
                    class="precTotal"
                    id="precTotal"
                    readonly
                  />
                  <h4><strong>PEN</strong></h4>
                </div>
                <div>
                  <button class="btnReserva">Reservar</button>
                </div>
              </div>
            </form>
          </section>

          <div class="info">
            <h3>Elige tu vuelo de regreso de</h3>
            <input type="text" class="RutaVuelo" readonly />
          </div>

          <!--Muestra los vuelos disponibles-->
          <section class="selecVuelo">
            <form class="VuelDispoLATAM">
              <!--la empresa-->
              <div class="empAereas_cont">
                <div class="fechaSalida">
                  <img src="../../assets/exit.svg" />
                  <h4>Salida</h4>
                  <input type="text" class="fechaS" readonly />
                </div>
                <div class="empAereas">
                  <img src="../../imagenes/Latam.png" />
                  <h4>LATAM Airlines</h4>
                </div>
              </div>

              <!--detalles del vuelo-->
              <div class="detalleV">
                <input type="text" class="orige_dest" readonly />
                <div class="horaduracV">
                  <input type="text" class="HoraSal" readonly />
                  <img src="../../assets/flecha.svg" />
                  <input type="text" class="HoraLleg" readonly />
                </div>
                <div class="Duracion">
                  <h4>Duración</h4>
                  <input type="text" class="duracVuel" readonly />
                </div>
              </div>

              <!--precios de vuelos-->
              <div class="precioV">
                <div class="disponibles">
                  <input
                    type="text"
                    class="asientDisp"
                    id="asientDisp"
                    readonly
                  />
                  <h5><strong>asientos disponibles</strong></h5>
                </div>
                <h5>Precio por persona</h5>
                <div class="precio">
                  <h4><strong>S/</strong></h4>
                  <input type="text" class="precXper" id="precXper" readonly />
                  <h4><strong>PEN</strong></h4>
                </div>

                <div class="total">
                  <h4 class="txtTot"><strong>Total</strong></h4>
                  <h4><strong>S/</strong></h4>
                  <input
                    type="text"
                    class="precTotal"
                    id="precTotal"
                    readonly
                  />
                  <h4><strong>PEN</strong></h4>
                </div>
                <div>
                  <button class="btnReserva">Reservar</button>
                </div>
              </div>
            </form>

            <form class="VuelDispoSTAR">
              <!--la empresa-->
              <div class="empAereas_cont">
                <div class="fechaSalida">
                  <img src="../../assets/exit.svg" />
                  <h4>Salida</h4>
                  <input type="text" class="fechaS" readonly />
                </div>
                <div class="empAereas">
                  <img src="../../imagenes/Star.png" />
                  <h4>Star Perú</h4>
                </div>
              </div>

              <!--detalles del vuelo-->
              <div class="detalleV">
                <input type="text" class="orige_dest" readonly />
                <div class="horaduracV">
                  <input type="text" class="HoraSal" readonly />
                  <img src="../../assets/flecha.svg" />
                  <input type="text" class="HoraLleg" readonly />
                </div>
                <div class="Duracion">
                  <h4>Duración</h4>
                  <input type="text" class="duracVuel" readonly />
                </div>
              </div>

              <!--precios de vuelos-->
              <div class="precioV">
                <div class="disponibles">
                  <input
                    type="text"
                    class="asientDisp"
                    id="asientDisp"
                    readonly
                  />
                  <h5><strong>asientos disponibles</strong></h5>
                </div>
                <h5>Precio por persona</h5>
                <div class="precio">
                  <h4><strong>S/</strong></h4>
                  <input type="text" class="precXper" id="precXper" readonly />
                  <h4><strong>PEN</strong></h4>
                </div>

                <div class="total">
                  <h4 class="txtTot"><strong>Total</strong></h4>
                  <h4><strong>S/</strong></h4>
                  <input
                    type="text"
                    class="precTotal"
                    id="precTotal"
                    readonly
                  />
                  <h4><strong>PEN</strong></h4>
                </div>
                <div>
                  <button class="btnReserva">Reservar</button>
                </div>
              </div>
            </form>

            <form class="VuelDispoVivaAir">
              <!--la empresa-->
              <div class="empAereas_cont">
                <div class="fechaSalida">
                  <img src="../../assets/exit.svg" />
                  <h4>Salida</h4>
                  <input type="text" class="fechaS" readonly />
                </div>
                <div class="empAereas">
                  <img src="../../imagenes/VivaAir.png" />
                  <h4>Viva Air</h4>
                </div>
              </div>

              <!--detalles del vuelo-->
              <div class="detalleV">
                <input type="text" class="orige_dest" readonly />
                <div class="horaduracV">
                  <input type="text" class="HoraSal" readonly />
                  <img src="../../assets/flecha.svg" />
                  <input type="text" class="HoraLleg" readonly />
                </div>
                <div class="Duracion">
                  <h4>Duración</h4>
                  <input type="text" class="duracVuel" readonly />
                </div>
              </div>

              <!--precios de vuelos-->
              <div class="precioV">
                <div class="disponibles">
                  <input
                    type="text"
                    class="asientDisp"
                    id="asientDisp"
                    readonly
                  />
                  <h5><strong>asientos disponibles</strong></h5>
                </div>
                <h5>Precio por persona</h5>
                <div class="precio">
                  <h4><strong>S/</strong></h4>
                  <input type="text" class="precXper" id="precXper" readonly />
                  <h4><strong>PEN</strong></h4>
                </div>

                <div class="total">
                  <h4 class="txtTot"><strong>Total</strong></h4>
                  <h4><strong>S/</strong></h4>
                  <input
                    type="text"
                    class="precTotal"
                    id="precTotal"
                    readonly
                  />
                  <h4><strong>PEN</strong></h4>
                </div>
                <div>
                  <button class="btnReserva">Reservar</button>
                </div>
              </div>
            </form>
          </section>
          <!--termina elegir vuelo regreso-->
          <!-- 
          <script src="../../js/btnBuscar2.js"></script> -->
          <div class="botonContinuarpaso2">
            <button
              class="btnContReserva"
              id="btnContReservap2"
              onclick="agregarFormulariosPasajeros()"
            >
              Continuar Reserva
            </button>
          </div>
        </section>
        <!--termina Paso1-->
        <?php
    include("../procesar_formulario.php");
    ?>
        <section class="paso2">
          <div class="infoPasajero" id="pasajerosContainer">
            <input
              type="hidden"
              name="cantidadPasajeros"
              id="cantidadPasajerosHidden"
            />

            <!-- Aqui van los formularios dinamic -->
          </div>

          <div class="botonContinuarpaso3">
            <button
              class="btnContReserva"
              id="btnContReservap3"
              type="button"
              onclick="enviarDatosALaBaseDeDatos()"
            >
              Continuar Reserva
            </button>
          </div>
        </section>

        <section class="paso3">
          <h3>Contacto</h3>
          <p>
            Sus boletos y el recibo se enviarán a la dirección de correo
            eléctronico a continuacion
          </p>
          <div class="field-holder">
            <input class="inputP" type="text" id="correo" required />
            <label class="labelI" for="correo">Ingrese su correo</label>
          </div>
          <div class="field-holder">
            <input class="inputP" type="text" id="telefono" required />
            <label class="labelI" for="telefono">Ingrese su teléfono</label>
          </div>

          <section>
            <h3>Medio de pago</h3>
            <label id="acepto-terminos">
              <input type="checkbox" required />
              <!-- Agregado el atributo required -->
              He leído y acepto las
              <a
                href="#"
                id="enlaceCondiciones"
                class="enlace-condiciones"
                onclick="abrirVentanaEmergente('Login/Condiciones.html')"
                >Condiciones de uso</a
              >
              y la
              <a
                href="#"
                id="enlaceAviso"
                class="enlace-privacidad"
                onclick="abrirVentanaEmergente('Login/Politica.html')"
                >Politica de privacidad</a
              >
              de este sitio web.
            </label>
            <div class="BOTON">
              <button class="BTN" type="button">XXXX-XXXX-XXXX-X126</button>
            </div>
            <div class="BOTON">
              <a href="Billetera.html">
                <button class="BTN1" type="button">INGRESAR TARJETA</button>
              </a>
            </div>
          </section>
        </section>

        <script src="../../js/pasosreserva2.js"></script>
      </section>

      <section class="tuReserva">
        <section>
          <div class="detallesReser">
            <h4 class="textReserva">Tu Reserva</h4>
            <div class="boletoS">
              <h5 class="textReserva2">Vuelo de salida</h5>
              <div class="horalugar">
                <div class="horalugarO">
                  <input type="text" class="lugarOrig" readonly />
                  <input type="text" class="horavueloS" readonly />
                </div>
                <div class="horalugarD">
                  <input type="text" class="lugarDes" readonly />
                  <input type="text" class="horavueloL" readonly />
                </div>
              </div>
              <input type="text" class="fechavueloS" readonly />
            </div>

            <div class="boletoR">
              <h5 class="textReserva2">Vuelo de regreso</h5>
              <div class="horalugar">
                <div class="horalugarO">
                  <input type="text" class="lugarOrig" readonly />
                  <input type="text" class="horavueloS" readonly />
                </div>
                <div class="horalugarD">
                  <input type="text" class="lugarDes" readonly />
                  <input type="text" class="horavueloL" readonly />
                </div>
              </div>
              <input type="text" class="fechavueloS" readonly />
            </div>
          </div>
        </section>

        <section>
          <div class="Pasajeros">
            <h4 class="textReserva">Pasajeros</h4>
            <div>
              <input type="number" class="catPasj" readonly />
              <h5 class="textReserva2">Adulto</h5>
            </div>
          </div>
        </section>

        <section>
          <div class="Tot">
            <h4>Total</h4>

            <div class="preciosoles">
              <h4><strong>S/</strong></h4>
              <input type="text" class="precTotal" id="totAcum" readonly />
              <h4><strong>PEN</strong></h4>
            </div>
          </div>
        </section>
      </section>
    </section>
    <section style="margin: 0; padding: 0">
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
        <a href="index.php">Inicio</a> 
        <a href="#" id="enlaceCondiciones" class="enlace-condiciones" onclick="abrirVentanaEmergente('Login/Condiciones.html')">Condiciones de uso</a>
       <a href="#" id="enlaceAviso" class="enlace-privacidad" onclick="abrirVentanaEmergente('Login/Politica.html')">Politica de privacidad</a>
      </div>
    </footer>

    </section>
    
    
      
    
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        calcularMontoTotal();
      });
    </script>
    <script src="../../js/InfoPasajer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.0.0/build/global/luxon.min.js"></script>
    <link rel="stylesheet" href="../../css/footer.css">
  </body>
</html>
