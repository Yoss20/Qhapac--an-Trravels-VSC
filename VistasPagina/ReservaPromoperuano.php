<?php
// Definir las variables
$dest1 = '';
$dest2 = '';
$fechmax1 = '';
$fechamin1 = '';
$fechmax2 = '';
$fechamin2 = '';
//////////////////////
$origen = '';
$destino = '';
$fecha = '';
$cantidadPersonas = '';
$fechaVuelta = '';
//////////////////////

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



<?php
include("../config/conexion.php");

function obtenerHorasYMinutosDesdeDuracion($duracion) {
  // Ejemplo simple, implementa tu lógica específica para analizar la duración aquí
  preg_match('/(\d+)h (\d+)min/', $duracion, $matches);

  $horas = isset($matches[1]) ? (int)$matches[1] : 0;
  $minutos = isset($matches[2]) ? (int)$matches[2] : 0;

  return array($horas, $minutos);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $duracion = '';
    $horaSalida = '';
    $horasDeLlegada = array();

  // Formar la ruta con el origen y destino
  $ruta = $origen . '-' . $destino;
  $rutaTitulo = $origen . ' a ' . $destino;
  $rutaT = $origen . ' → ' . $destino;

  setlocale(LC_TIME, 'spanish'); // Establece el idioma en español
  // Convierte la fecha al formato deseado
  $fecha_formateada = date("D. d M. Y", strtotime($fecha));


  //------------------------------------------
  $rutaRTitulo =$destino . ' a ' . $origen;
  $rutaTR = $destino . ' → ' . $origen;
  $rutaR = $destino . '-' . $origen;

  // Convierte la fecha al formato deseado
  $fecha_formateadaR = date("D. d M. Y", strtotime($fechaVuelta));

  // Consulta SQL para encontrar vuelos que coincidan con la ruta, la fecha y tengan asientos disponibles
  $query = "SELECT v.*, a.Img_aero FROM vuelos v join aerolinea a on v.Nom_aero=a.Nom_aero WHERE Ruta = :ruta AND fecha = :fecha AND asientosVuel >= :cantidad";
  $statement = $conexion->prepare($query);
  $statement->bindParam(':ruta', $ruta);
  $statement->bindParam(':fecha', $fecha);
  $statement->bindParam(':cantidad', $cantidadPersonas);
  // $statement->bindParam(':cantidad', $cantidadPersonas);
  $statement->execute();
  $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);



  if ($resultados) {
    foreach ($resultados as $vuelo) {
      $horaSalida = $vuelo['horaSal'];
      $duracion = $vuelo['duracionVuel'];
    // Convertir la duración a horas y minutos separados
  list($horasDuracion, $minutosDuracion) = obtenerHorasYMinutosDesdeDuracion($duracion);

  // Sumar la hora de salida y la duración
  $timestampHoraSalida = strtotime($horaSalida);
  $timestampHoraLlegada = $timestampHoraSalida + ($horasDuracion * 3600) + ($minutosDuracion * 60);

  // Formatear la hora de llegada
  $horasDeLlegada[$vuelo['IDvuelo']] = date('H:i:s', $timestampHoraLlegada);

   }
  }


   // Consulta SQL para encontrar vuelos que coincidan con la ruta, la fecha DE REGRESO y tengan asientos disponibles
   $queryRegreso = "SELECT v.*, a.Img_aero FROM vuelos v join aerolinea a on v.Nom_aero=a.Nom_aero WHERE Ruta = :rutaR AND fecha = :fechaVuelta AND asientosVuel >= :cantidad";
   $statementRegreso = $conexion->prepare($queryRegreso);
   $statementRegreso->bindParam(':rutaR', $rutaR);
   $statementRegreso->bindParam(':fechaVuelta', $fechaVuelta);
   $statementRegreso->bindParam(':cantidad', $cantidadPersonas);
   // $statement->bindParam(':cantidad', $cantidadPersonas);
   $statementRegreso->execute();
   $resultadosRegreso = $statementRegreso->fetchAll(PDO::FETCH_ASSOC);



  if ($resultadosRegreso) {
    foreach ($resultadosRegreso as $vueloR) {
        $horaSalidaR = $vueloR['horaSal'];
        $duracionR = $vueloR['duracionVuel'];


        // Convertir la duración a horas y minutos separados
  list($horasDuracion, $minutosDuracion) = obtenerHorasYMinutosDesdeDuracion($duracionR);

  // Sumar la hora de salida y la duración
  $timestampHoraSalida = strtotime($horaSalidaR);
  $timestampHoraLlegada = $timestampHoraSalida + ($horasDuracion * 3600) + ($minutosDuracion * 60);

  // Formatear la hora de llegada
  $horasDeLlegadaRegreso[$vueloR['IDvuelo']] = date('H:i:s', $timestampHoraLlegada);

    }
}
}
?>





<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Qhapac Ñan Travels</title>
    <link rel="stylesheet" href="../css/styleVuelo.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../../css/stylePromos23.css" />
    <link rel="icon" href="../imagenes/logo-p.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../Login/Registro.js"></script>
    <script src="../../js/ReservaPromo.js"></script>


  </head>

  <body>

  <?php
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

      <section class="menu_cont">
        <div class="logo">
          <img src="../imagenes/LOGO TERMINADO.png" alt="Logo de la Compañia" />
        </div>

        <ul class="menu__links">
          <li class="menu__item">
            <a href="../index.php" class="menu__link">Inicio</a>
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
            <a href="promociones.php" class="menu__link"
              >Promociones</a
            >
          </li>

          <li class="menu__item menu__item--show">
            <a href="#" class="menu__link"
              >¿QUIENES SOMOS? <img src="../assets/arrow.svg" class="menu__arrow"
            /></a>

            <ul class="menu__nesting">
              <li class="menu__inside">
                <a href="Empresa.php" class="menu__link menu__link--inside"
                  >Qhapac Ñan Travels</a
                >
              </li>
              <li class="menu__inside">
                <a href="NuestroEquipo.php" class="menu__link menu__link--inside"
                  >Nuestro Equipo</a
                >
              </li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>
  </div>
  <script src="../js/inicio.js"></script>
  
  <header class="header">


    <div class="options">
      <button class="option-btn"><img src="../assets/avion.svg" class="avion"
        />Vuelos</button>
      <!-- <button class="option-btn"><img src="../assets/hotel.svg" class="avion"
        />Hoteles</button><br> -->
    </div><br> 


    <section class="header-form">
      <h1>Elija su próximo destino:</h1>
      <h2>Revise si hay vuelos disponibles</h2>

      <select id="tipoViaje" class="tipoViaje">
        <option value="idaYVuelta">Ida y Vuelta</option>
      </select>

                <!--  action="procesar_formulario.php" method="post" -->
      <form class="flex_IDAYVUELTA"  method="POST">
      <?php
// Generar un UUID único
$idReservaUnico = uniqid();
 echo "idreserva:" .$idReservaUnico;
// Almacenar el UUID en un campo oculto en el formulario
echo '<input type="hidden" id="idReservaUnico" name="idReservaUnico" value="' . $idReservaUnico . '" readonly>';
?>
    <!-- Campo oculto que contiene el valor de $idReservaUnico -->
  <input type="hidden" name="idReservaGlobal" id="idReservaUnico" value="<?php echo $idReservaUnico; ?>">

  <div class="flex_cont flex_cont11">
            <h3>Origen</h3>
            <div class="flex_cont1">
              <img src="../assets/lugar.svg" />
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
              <img src="../assets/lugarD.svg" />
              <select name="destino" id="destino" style="width: 100%">
                <option value="Vilcabamba"><?php echo $dest1?></option>
                <option value="Ollantaytambo"><?php echo $dest2?></option>
              </select>
            </div>
          </div>

          <div class="flex_cont flex_cont33">
            <h3>Fecha de Ida</h3>
            <div class="flex_cont1">
              <img src="../assets/calendar.svg" />
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
              <img src="../assets/calendar.svg" />
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
              <img src="../assets/user.svg" />
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
          <button type="button" class="btnIV"><img src="../assets/lupa.svg" class="lupa"
            />Buscar</button>
        </div>
        </form>


    </section>
    <script src="../js/formulario.js"></script>
  </div>
  <script src="../js/fechapromo.js"></script>
  </header>



  <section class="Reserva">

    <section class="pasosreserva_cont">
      <div class="pasosreserva">
            <li>
                <a  class="reserva__link1">1. Seleccionar Vuelo<img src="../assets/arrow2.svg" class="arrow2"/></a>
            </li>
            <li>
                <a  class="reserva__link2">2. Completar Datos<img src="../assets/arrow2.svg" class="arrow2"/></a>
            </li>
            <li>
                <a  class="reserva__link3">3. Finalizar reserva<img src="../assets/arrow2.svg" class="arrow20"/></a>
            </li>
      </div>


<section class="paso1">

      <div class="info1">
        <h3 class="info1text">Elige tu vuelo de salida de</h3>
        <input type="text" class="RutaVuelo"  value="<?php echo $rutaTitulo; ?>" readonly/>
      </div>


       <!--Muestra los vuelos disponibles-->
      <section class="selecVueloI"  method="POST" enctrype="multipart/form-data">

      <?php
    $idDetalleIUnico = substr(md5(uniqid(mt_rand(), true)), 0, 10);
    echo "idreserva:" . $idDetalleIUnico;
    echo '<input type="hidden" id="idDetalleIGlobal" name="iidDetalleIGlobal" value="' . $idDetalleIUnico . '" readonly>';
    ?>

  <!-- Campo oculto que contiene el valor de $idReservaUnico -->
  <input type="hidden" name="idReservaGlobal" id="idReservaUnico" value="<?php echo $idReservaUnico; ?>">
 <!-- Campo oculto que contiene el valor de $idDetalleIUnico -->
 <input type="hidden" name="idDetalleIGlobal" id="idDetalleIGlobal" value="<?php echo $idDetalleIUnico; ?>">

<?php foreach ($resultados as $vuelo) {?>
        <form class="VuelDispoIDA">

           <!--la empresa-->
          <div class="empAereas_cont">
            <div class="fechaSalida">
              <img src="../assets/exit.svg"/>
              <h4>VUELO IDA</h4>
              <input type="text" name="fechaI" class="fechaS" value="<?php echo strftime("%a %e %b %Y", strtotime($fecha)); ?>" readonly/>
            </div>
            <div class="empAereas">
                  <img src="../imagenes/<?php echo $vuelo['Img_aero']; ?>" alt="imagen aerolinea"/>
                  <h4 name="vuelo"><?php echo $vuelo['Nom_aero']; ?></h4>
            </div>
          </div>

          <!--detalles del vuelo-->
          <div class="detalleV">
            <input type="text" class="orige_dest" value="<?php echo $rutaT; ?>" readonly/>
            <div  class="horaduracV">
              <input type="text" class="HoraSal" value="<?php echo $vuelo['horaSal']; ?>" readonly/>
              <a><strong>-</strong></a>
              <!-- <img src="../assets/flecha.svg"/> -->


              <input type="text" class="HoraLleg" value="<?php echo $horasDeLlegada[$vuelo['IDvuelo']]; ?>" readonly/>



            </div>
            <div class="Duracion">
            <h4>Duración</h4>
            <input type="text" class="duracVuel" value="<?php echo $vuelo['duracionVuel']; ?>" readonly/>
            </div>
          </div>


            <!--precios de vuelos-->
          <div class="precioV">
            <div class="disponibles">
              <input type="text" class="asientDisp" id="asientDisp" value="<?php echo $vuelo['asientosVuel']; ?>" readonly/>
              <h5><strong>asientos disponibles</strong></h5>
           </div>
            <h5>Precio por persona</h5>
            <div class="precio">
               <h4><strong>S/</strong></h4>
               <input type="text" class="precXper" id="precXper" value="<?php echo $vuelo['precioVuel']; ?>" readonly/>
               <h4><strong>PEN</strong></h4>
            </div>
            <h4 class="linea">____________________________</h4>
            <div class="total">
                <h4 class="txtTot"><strong>Total</strong></h4>
                <h4><strong>S/</strong></h4>
                <input type="text" name="precTotalI" class="precTotal" id="precTotal" value="<?php echo number_format($vuelo['precioVuel'] * $cantidadPersonas, 2); ?>" readonly/>
                <h4><strong>PEN</strong></h4>
            </div>
            <div>
                <button type="button" name="btnReservaI" id="btnReservaI" class="btnReservaI" data-idvueloI="<?php echo $vuelo['IDvuelo']; ?>">Reservar</button>
            </div>
          </div>
        </form>
<?php } ?>
</section>
<!-- Script JavaScript con jQuery para manejar la reserva -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/detalle.js"></script> -->

<!-- REGRESO -->
<div class="info2">
  <h3 class="info2text">Elige tu vuelo de regreso de</h3>
  <input type="text" class="RutaVuelo" value="<?php echo $rutaRTitulo; ?>" readonly/>
</div>


 <!--Muestra los vuelos disponibles-->
<section class="selecVueloIV">

<?php foreach ($resultadosRegreso as $vueloR) { ?>
  <form class="VuelDispoIDAVUELTA">

  <?php
    $idDetalleRUnico = substr(md5(uniqid(mt_rand(), true)), 0, 10);
    echo "idreserva:" . $idDetalleRUnico;
    echo '<input type="hidden" id="idDetalleRGlobal" name="iidDetalleRGlobal" value="' . $idDetalleRUnico . '" readonly>';
    ?>

 <!-- Campo oculto que contiene el valor de $idDetalleIUnico -->
 <input type="hidden" name="idDetalleRGlobal" id="idDetalleRGlobal" value="<?php echo $idDetalleRUnico; ?>">

     <!--la empresa-->
    <div class="empAereas_cont">
      <div class="fechaSalida">
        <img src="../assets/exit.svg"/>
        <h4>VUELO REGRESO</h4>
        <input type="text" class="fechaS" value="<?php echo strftime("%a %e %b %Y", strtotime($fechaVuelta)); ?>" readonly/>
      </div>
      <div class="empAereas">
            <img src="../imagenes/<?php echo $vueloR['Img_aero']; ?>" alt="imagen aerolinea"/>
            <h4><?php echo $vueloR['Nom_aero']; ?></h4>
      </div>
    </div>

    <!--detalles del vuelo-->
    <div class="detalleV">
      <input type="text" class="orige_dest" value="<?php echo $rutaTR; ?>" readonly/>
      <div  class="horaduracV">
        <input type="text" class="HoraSal" value="<?php echo $vueloR['horaSal']; ?>" readonly/>
        <img src="../assets/flecha.svg"/>
        <input type="text" class="HoraLleg" value="<?php echo $horasDeLlegadaRegreso[$vueloR['IDvuelo']]; ?>" readonly/>
      </div>
      <div class="Duracion">
      <h4>Duración</h4>
      <input type="text" class="duracVuel" value="<?php echo $vueloR['duracionVuel']; ?>" readonly/>
      </div>
    </div>


      <!--precios de vuelos-->
    <div class="precioV">
      <div class="disponibles">
        <input type="text" class="asientDisp" id="asientDisp" value="<?php echo $vueloR['asientosVuel']; ?>" readonly/>
        <h5><strong>asientos disponibles</strong></h5>
     </div>
      <h5>Precio por persona</h5>
      <div class="precio">
         <h4><strong>S/</strong></h4>
         <input type="text" class="precXper" id="precXper" value="<?php echo $vueloR['precioVuel']; ?>"  readonly/>
         <h4><strong>PEN</strong></h4>
      </div>
      <h4 class="linea">____________________________</h4>
      <div class="total">
          <h4 class="txtTot"><strong>Total</strong></h4>
          <h4><strong>S/</strong></h4>
          <input type="text" class="precTotal" id="precTotal" value="<?php echo number_format($vueloR['precioVuel'] * $cantidadPersonas, 2); ?>" readonly/>
          <h4><strong>PEN</strong></h4>
      </div>
      <div>
          <button type="button" class="btnReservaR" id="btnReservaR"  data-idvueloR="<?php echo $vueloR['IDvuelo']; ?>">Reservar</button>
      </div>
    </div>
  </form>
  <?php } ?>

  </section><!--termina elegir vuelo regreso-->
  <script src="../js/btnReservas.js"></script>
  <script src="insertarRD.js"></script>
  <script src="../js/btnBusqueda.js"></script>
  <script src="../js/detalleReserva.js"></script>


          <div class="botonContinuarpaso2">
            <button  class="btnContReserva" id="btnContReservap2" type="button" onclick="agregarFormulariosPasajerosv()">Continuar Reserva</button>
          </div>


</section> <!--termina Paso1-->

    <?php
    include("procesar_formulario.php");
    ?>

<section class="paso2">
  <div class="infoPasajero" id="pasajerosContainer">
  <input type="hidden" name="cantidadPasajeros" id="cantidadPasajerosHidden">

    <!-- Aqui van los formularios dinamic -->
  </div>

  <div class="botonContinuarpaso3">
  <button class="btnContReserva" id="btnContReservap3" type="button" onclick="enviarDatosALaBaseDeDatosv()">Continuar Reserva</button>

  </div>

</section>

<script src="../js/InfoPasajer.js"></script>
  <script src="dsad.js"></script>



<section class="paso3">

    <h3>Contacto</h3>
    <p>Sus boletos y el recibo se enviarán a la dirección de correo eléctronico a continuacion</p>
    <div class="field-holder">
      <input class="inputP" type="text" id="correo" required>
      <label class="labelI" for="correo">Ingrese su correo</label>
    </div>
    <div class="field-holder">
      <input class="inputP" type="text" id="telefono" required>
      <label class="labelI" for="telefono">Ingrese su teléfono</label>
    </div>


  <section>
    <h3>Medio de pago</h3>
    <label id="acepto-terminos">
    <input type="checkbox" required> <!-- Agregado el atributo required -->
  He leído y acepto las <a href="#" id="enlaceCondiciones" class="enlace-condiciones" onclick="abrirVentanaEmergente('Login/Condiciones.html')">Condiciones de uso</a> y la <a href="#" id="enlaceAviso" class="enlace-privacidad" onclick="abrirVentanaEmergente('Login/Politica.html')">Politica de privacidad</a> de este sitio web.
  </label>
    <div class="BOTON">
      <button class="BTN" type="button">XXXX-XXXX-XXXX-X126</button>
    </div>
    <div class="BOTON">
      <a href="../Billetera/Billetera.php">
        <button class="BTN1" type="button">INGRESAR TARJETA</button>
      </a>


    </div>
  </section>


  </section>

  <script src="../js/pasosreserva.js"></script>


</section>



    <section class="tuReserva">

        <section>
        <div class="detallesReser">
          <h4 class="textReserva">Tu Reserva</h4>

          <div class="boletoS">
            <h5 class="textReserva2">Vuelo de salida</h5>
            <div class="horalugar">
              <div class="horalugarO">
                <input type="text" class="lugarOrig"  value="<?php echo $origen; ?>" readonly/>
                <input type="text" class="horavueloSI" readonly/>
              </div>
              <div class="horalugarD">
                <input type="text" class="lugarDes" value="<?php echo $destino; ?>" readonly/>
                <input type="text" class="horavueloLI" readonly/>
              </div>
            </div>
            <input type="text" class="fechavueloSI" readonly/>
          </div>

          <div class="boletoR">
            <h5 class="textReserva2">Vuelo de regreso</h5>
            <div class="horalugar">
              <div class="horalugarO">
                <input type="text" class="lugarOrig" value="<?php echo $destino; ?>" readonly/>
                <input type="text" class="horavueloSR" readonly/>
              </div>
              <div class="horalugarD">
                <input type="text" class="lugarDes" value="<?php echo $origen; ?>" readonly readonly/>
                <input type="text" class="horavueloLR" readonly/>
              </div>
            </div>
            <input type="text" class="fechavueloSR" readonly/>
          </div>
        </div>

      </section>


      <section>
        <div class="Pasajeros">
          <h4 class="textReserva">Pasajeros</h4>
          <div>
            <input type="number" class="catPasj" value="<?php echo $cantidadPersonas; ?>" readonly/>
            <h5 class="textReserva2">Adulto</h5>
          </div>
        </div>
      </section>

    <section>
        <div class="CostosVuel">
          <h4 class="textReserva"><strong>Costo de Vuelo</strong></h4>
          <div class="boleta">
            <div>
              <h5 class="textReserva2">Tarifa base</h5>
              <div  class="preciosoles">
                <h4><strong>S/</strong></h4>
                <input type="text" name="subtotal" class="tarifBase" id="tarifBase"  readonly/>
                <h4><strong>PEN</strong></h4>
              </div>
            </div>
            <div>
              <h5 class="textReserva2">Descuentos</h5>
              <div  class="preciosoles">
                <h4><strong>S/</strong></h4>
                <input type="text" name="descuento" class="desc" id="desc"  readonly/>
                <h4><strong>PEN</strong></h4>
              </div>
            </div>
            <div>
              <h5 class="textReserva2">Impuestos</h5>
              <div  class="preciosoles">
                <h4><strong>S/</strong></h4>
                <input type="text" name="imp" class="imp" id="imp"  readonly/>
                <h4><strong>PEN</strong></h4>
              </div>
            </div>
          </div>


          <div class="totCosVuelo">
            <h4 class="textReserva"><strong>Total</strong></h4>
            <div  class="preciosoles">
              <h4><strong>S/</strong></h4>
              <input type="text" name="total" class="totVuelo" id="totVuelo"  readonly/>
              <h4><strong>PEN</strong></h4>
            </div>
          </div>
        </div>
      </section>

    <section>
        <div class="Tot">
            <h4>Total</h4>

          <div  class="preciosoles">
            <h4><strong>S/</strong></h4>
            <input type="text" class="precTotal" id="totAcum"  readonly/>
            <h4><strong>PEN</strong></h4>
          </div>
        </div>
      </section>
    </section>



  </section>
<script src="../js/InfoPasajer.js"></script>

<section class="infextracont">
 <h3>¿Por qué viajar con Qhapac Ñan Travels?</h3>
 <section class="infextra">
   <div class="razon1">
     <h4><strong>Experiencia local auténtica</strong></h4>
     <p>Ofrecen un enfoque auténtico y directo hacia las experiencias culturales.</p>
    <img src="../imagenes/mapPeru.jpg"/>
   </div>
   <div class="razon2">
     <h4><strong>Expertos en Turismo</strong></h4>
     <p>Los guías turísticos están altamente capacitados y tienen un profundo conocimiento de la historia, la cultura y los destinos.</p>
     <img src="../imagenes/expecTuris.jpg" />
   </div>
   <div class="razon3">
     <h4><strong>Atención personalizada</strong></h4>
     <p>Brindan un servicio al cliente excepcional, asegurándose de que cada viajero se sienta atendido y disfrute de una experiencia inolvidable.</p>
     <img src="../imagenes/atencionpers.jpg"/>
   </div>
 </section>
</section>



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
    <a href="/">Inicio</a> |
    <a href="/terminos">Términos y condiciones</a> |
    <a href="/privacidad">Política de privacidad</a>
  </div>
</footer>


<script src="../js/InfoPasajer.js"></script>
  </body>

</html>
