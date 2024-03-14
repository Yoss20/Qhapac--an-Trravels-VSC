<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/Estilos2.css">
    <link rel="stylesheet" href="../css/estilos4.css">
    <!-- CUSTOM JS -->
    <script src="../js/Muestrafor.js" defer></script>
    <script src="../js/app.js" defer></script>
    <link rel="icon" href="../../imagenes/logo-p.png">
</head>
<body>
<div class="container">
    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="../img/logo-p1.png" alt="">
                <span>Qhapac Ñan Travels</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        
        <!-- MENU -->
        <div class="menu">

        <br>
        <br>
        <br>


            <div class="enlace"  data-form="dashB">
                <i class="bx bx-grid-alt"></i>
                <span>Principal</span>
            </div>

            <div class="enlace" data-form="Usuar">
                <i class="bx bx-user"></i>
                <span>Usuarios</span>
            </div>

            <div class="enlace" data-form="Destin">
                <i class='bx bx-map-pin'></i>
                <span>Destinos</span>
            </div>

            <div class="enlace" data-form="Aerolin">
                <i class='bx bxs-plane-take-off'></i>
                <span>Aerolineas</span>
                


            </div>

            <div class="enlace" data-form="Vuelo">
                <i class='bx bxs-plane-alt'></i>
                <span>Vuelos Ida</span>
            </div>

            <div class="enlace" data-form="DetalleV">
                <i class='bx bxs-plane-alt'></i>
                <span>Detalle de vuelo</span>
            </div>

            <div class="enlace" data-form="Promoc">
                <i class="bx bx-cart"></i>
                <span>Promociones</span>
            </div>

         
            <div class="enlace" data-form="Reserv">
                <i class='bx bxs-calendar-alt'></i>
                <span>Reservas</span>
            </div>

            <div class="enlace" data-form="Pasajer">
                <i class='bx bxs-user-detail'></i>
                <span>Pasajeros</span>
            </div>

            <div class="enlace" data-form="Tarj">
                <i class='bx bx-credit-card' ></i>
                <span>Billeteras</span>
            </div>


        </div>
    </div>

    <section class="FormDerecha">
   
        <form action="" id="dashB" class="formulario fo2">

            <h1 class="title">BIENVENIDOS A QHAPAC ÑAN TRAVELS</h1>
            <div class="contenedor">
            <section>
            <div class="usu">
                <div class="contador-usuarios">
                  <h2 >N° REGISTRADOS</h2>
                  <hr style="color: aliceblue;">
                  <p class="total-usuarios">
                    <?php
                      $conn = mysqli_connect("localhost", "root", "", "bd_agenciaviaje");
            
                      $sql = "SELECT COUNT(*) AS Total FROM login";
            
                      $result = mysqli_query($conn, $sql);
            
                      $row = mysqli_fetch_assoc($result);
            
                      $total_usuarios = $row['Total'];
            
                      echo $total_usuarios;
                    ?>
                  </p>
                </div>
              </div>

              <div class="usu">
                <div class="contador-usuarios">
                  <h2 >VUELOS DISPONIBLES</h2>
                  <hr style="color: aliceblue;">
                  <p class="total-usuarios">
                    <?php
                      $conn = mysqli_connect("localhost", "root", "", "bd_agenciaviaje");
            
                      $sql = "SELECT COUNT(*) AS Total FROM vuelos";
            
                      $result = mysqli_query($conn, $sql);
            
                      $row = mysqli_fetch_assoc($result);
            
                      $total_usuarios = $row['Total'];
            
                      echo $total_usuarios;
                    ?>
                  </p>
                </div>
              </div>

              <div class="usu">
                <div class="contador-usuarios">
                  <h2 >PROMOCIONES</h2>
                  <hr style="color: aliceblue;">
                  <p class="total-usuarios">
                    <?php
                      $conn = mysqli_connect("localhost", "root", "", "bd_agenciaviaje");
            
                      $sql = "SELECT COUNT(*) AS Total FROM promociones";
            
                      $result = mysqli_query($conn, $sql);
            
                      $row = mysqli_fetch_assoc($result);
            
                      $total = $row['Total'];
            
                      echo $total;
                    ?>
                  </p>
                </div>
              </div>

              <div class="usu">
                <div class="contador-usuarios">
                  <h2 >RUTAS QHAPAC ÑAN</h2>
                  <hr style="color: aliceblue;">
                  <p class="total-usuarios">
                    <?php
                      $conn = mysqli_connect("localhost", "root", "", "bd_agenciaviaje");
            
                      $sql = "SELECT COUNT(*) AS Total FROM destinos";
            
                      $result = mysqli_query($conn, $sql);
            
                      $row = mysqli_fetch_assoc($result);
            
                      $total = $row['Total'];
            
                      echo $total;
                    ?>
                  </p>
                </div>
            </section>
            </div>
            <hr>
            <section class="sDiseño" >
                <div>
                <div class="usu2">
                <img src="../img/QÑT.png" alt="" style="width: 700px; height: 380px;">
                <br>
                <a  href="../../index.php" target="_blank" class="btn1">Ir a Qhapac Ñan Travels</a>

                </div>
                <div class="usu2">
                    <img src="../img/Contactanos.png" alt="" style="width: 200px; height: 380px;">
                    <br>
                    <a href="../../VistasPagina/Contactanos.php" target="_blank" class="btn1">Ir a Contactos</a>

                </div>
              
                </div>
                
                 <div class ="usu2" >
               
                 <a href="../../VistasPagina/Login.php"class="btn2">CERRAR SESIÓN</a>

                 </div>  
                
            </section>
         
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
              <script src="../js/cantusu.js"></script>
            
              
        </form>

 

        <form action="Usuar.php" id="Usuar" class="formulario fo3"  name="Formu" method="post">
            <div  style="overflow-x: scroll; max-width: 1080px;" >
      

            <table border="1">
            <tr >
                    <td  align="center" colspan="10"><label class="labForm">USUARIOS REGISTRADOS</label></td>
                 
                </tr>
            <tr >
                    <td  align="center" colspan="5"><label class="labForm">DNI</label></td>
                    <td  align="center" colspan="5"><label class="labForm">ROL</label></td>
                </tr>

                <tr>
                <td align="center" colspan="5"><input type="text" value="" maxlength="8" name="dniU"></td>
                <td align="center" colspan="5">
    <input type="text" value="" maxlength="1" name="rolU" pattern="[AU]" title="Ingrese solo 'A' o 'U'">
</td>

    
                </tr>
                
                <tr><td  align="center" colspan="5" align="center">
                    <input type="submit" value="Modificar" name="modificarDatos">
              
                    <td  align="center" colspan="5" align="center">
                
                    <input type="submit" value="Eliminar" name="eliminarDatos">
                </td>
                </td></tr>
                <tr>
                    <td colspan="1"><label class="labForm">DNI</label></td>
                    <td colspan="1"><label class="labForm">Contraseña</label></td>
                    <td colspan="1"><label class="labForm">Nombres</label></td>
                    <td colspan="1"><label class="labForm">Apellido paterno</label></td>
                    <td colspan="1"><label class="labForm">Apellido materno</label></td>
                    <td colspan="1"><label class="labForm">Género</label></td>
                    <td colspan="1"><label class="labForm">Correo</label></td>
                    <td colspan="1"><label class="labForm">Celular</label></td>
                    <td colspan="1"><label class="labForm">Fecha Nacimiento</label></td>
                    <td colspan="1"><label class="labForm">ROL</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM login";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td colspan="1"><?php echo $mostrar['Usuario']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Contraseña']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Nombres']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Apellidop']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Apellidom']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Genero']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Correo']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Celular']; ?></td>
                        <td colspan="1"><?php echo $mostrar['FecNac']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Rol']; ?></td>
                    </tr>
                    <?php
                }
                ?>
         

            </table>
        </div>
        </form>
    



        <form action="formu.php"  id="Destin" class="formulario fo4" name="Formu" method="post">
        
            <table border="1">
                <tr>
                    <td align="center" colspan="4">
                        <label class="labForm" >Destinos</label>
                    </td>
                </tr>

                <tr>
                    <td colspan="4">
                        <label align="center" class="labForm" >Registrar Destino</label>
                    </td>
                </tr>
                <tr>
                    <td><label class="labForm">Código</label></td><td><input type="text" value="" maxlength="7" name="txtCodigo"></td>
                    <td><label class="labForm">Departamento</label></td><td><input type="text" value="" maxlength="13" name="txtDpto"></td>
                </tr>

                <tr><td colspan="4" align="center">
                    <input type="submit" value="Nuevo" name="limpiarDatos">
                    <input type="submit" value="Grabar" name="GrabarDatos">
                    <input type="submit" value="Modificar" name="modificarDatos">
                    <input type="submit" value="Eliminar" name="eliminarDatos">
                </td></tr>

                <tr><td colspan="4"><label class="labForm">Base de datos DESTINOS</label></td></tr>
                <tr>
                    <td colspan="2"><label class="labForm">Código</label></td>
                    <td colspan="2"><label class="labForm">Departamento</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM destinos";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td colspan="2"><?php echo $mostrar['ID_dest']; ?></td>
                        <td colspan="2"><?php echo $mostrar['Nom_dest']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                

            </table>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
            
           <br>
           <br>
           <br>
            
            
        </form>
    


        <form action="aerolinea.php"  id="Aerolin" class="formulario fo5" name="Formu" method="post">
          
            <table border="1">
                <tr>
                    <td align="center" colspan="6">
                        <label class="labForm" >Aerolíneas</label>
                    </td>
                </tr>

                <tr>
                    <td colspan="6">
                        <label align="center" class="labForm" >Registrar Aerolíneas</label>
                    </td>
                </tr>
                <tr>
                    <td><label class="labForm">Código</label></td><td><input type="text" value="" maxlength="7" name="txtCodigoAer"></td>
                    <td><label class="labForm">Nombre de Aerolínea</label></td><td><input type="text" value="" maxlength="20" name="txtNomAer"></td>
                    <td><label class="labForm">Imagen</label></td><td><input type="text" value="" maxlength="13" name="img"></td>
                </tr>

                <tr><td colspan="6" align="center">
                    <input type="submit" value="Nuevo" name="limpiarDatos">
                    <input type="submit" value="Grabar" name="GrabarDatos">
                    <input type="submit" value="Modificar" name="modificarDatos">
                    <input type="submit" value="Eliminar" name="eliminarDatos">
                </td></tr>

                <tr><td colspan="6"><label class="labForm">Base de datos AEROLÍNEAS</label></td></tr>
                <tr>
                    <td colspan="2"><label class="labForm">Código</label></td>
                    <td colspan="2"><label class="labForm">Nombre aerolínea</label></td>
                    <td colspan="2"><label class="labForm">Imagen</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM aerolinea";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td colspan="2"><?php echo $mostrar['IDaero']; ?></td>
                        <td colspan="2"><?php echo $mostrar['Nom_aero']; ?></td>
                        <td colspan="2"><?php echo $mostrar['Img_aero']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                

            </table>

        </form>
    


        <form action="vueloC.php"  id="Vuelo" class="formulario fo6" name="Formu" method="post">
            
            <table border="1">
                <tr>
                    <td align="center" colspan="8">
                        <label class="labForm" >Vuelos IDA</label>
                    </td>
                </tr>

                <tr>
                    <td align="center" colspan="8">
                        <label class="labForm" >Registrar Vuelos</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><label class="labForm">ID Vuelo</label></td><td colspan="2"><input type="text" value="" maxlength="7" name="txtCodVuelo"></td>
                    <td colspan="2"><label class="labForm">Ruta</label></td><td colspan="2"><input type="text" value="" maxlength="13" name="txtRuta"></td>
                </tr>
                <tr>
                    <td colspan="2"><label class="labForm">Fecha</label></td colspan="2"><td colspan="2"  align="center"> <input type="date" class="" name="txtfecha" placeholder="Date" value=""></td>
                    <td colspan="2"><label class="labForm">Hora de salida</label></td><td colspan="2" align="center"><input type="time" class="" name="txtHora" placeholder="" value=""></td>
                </tr>
                <tr>
                    <td colspan="2"><label class="labForm">Duración de Vuelo</label></td><td colspan="2"><input type="text" value="" maxlength="7" name="txtDuracion"></td>
                    <td colspan="2"><label class="labForm">Asientos Disponibles</label></td><td colspan="2"><input type="text" value="" maxlength="13" name="txtAsientos"></td>
                </tr>
                <tr>
                    <td colspan="2"><label class="labForm">Precio de asiento</label></td><td colspan="2"><input type="text" value="" maxlength="3" name="txtPrecio"></td>
                    <td colspan="2"><label class="labForm">Aerolinea</label></td><td colspan="2"><input type="text" value="" maxlength="20" name="txtAero"></td>
                </tr>

                <tr><td colspan="8" align="center">
                    <input type="submit" value="Nuevo" name="limpiarDatos">
                    <input type="submit" value="Grabar" name="GrabarDatos">
                    <input type="submit" value="Modificar" name="modificarDatos">
                    <input type="submit" value="Eliminar" name="eliminarDatos">
                </td></tr>

                <tr><td colspan="8"><label class="labForm">Base de datos DESTINOS</label></td></tr>
                <tr>
                    <td colspan="1"><label class="labForm">IDVuelo</label></td>
                    <td colspan="1"><label class="labForm">Ruta</label></td>
                    <td colspan="1"><label class="labForm">Fecha</label></td>
                    <td colspan="1"><label class="labForm">Hora Salida</label></td>
                    <td colspan="1"><label class="labForm">Duración</label></td>
                    <td colspan="1"><label class="labForm">Asientos</label></td>
                    <td colspan="1"><label class="labForm">Precio de Asiento</label></td>
                    <td colspan="1"><label class="labForm">Aerolinea</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM vuelos";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td colspan="1"><?php echo $mostrar['IDvuelo']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Ruta']; ?></td>
                        <td colspan="1"><?php echo $mostrar['fecha']; ?></td>
                        <td colspan="1"><?php echo $mostrar['horaSal']; ?></td>
                        <td colspan="1"><?php echo $mostrar['duracionVuel']; ?></td>
                        <td colspan="1"><?php echo $mostrar['asientosVuel']; ?></td>
                        <td colspan="1"><?php echo $mostrar['precioVuel']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Nom_aero']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                

            </table>
        </form>


        
        <form action="DetalleVuelo.php"  id="DetalleV" class="formulario fo7" name="Formu" method="post">
            
            <table border="1">
                <tr>
                    <td align="center" colspan="5">
                        <label class="labForm" >Detalle de Reserva</label>
                    </td>
                </tr>

                <tr>
                    <td align="center" colspan="5">
                        <label class="labForm" >Informacion de Vuelo</label>
                    </td>
                </tr>

                <tr>
                    <td colspan="1"><label class="labForm">ID Detalle</label></td>
                    <td colspan="1"><label class="labForm">Codigo Vuelo</label></td>
                    <td colspan="1"><label class="labForm">Codigo Reserva</label></td>
                    <td colspan="1"><label class="labForm">Cantidad de pasajeros</label></td>
                    <td colspan="1"><label class="labForm">Total a pagar</label></td>
                </tr>

                <tr>
                    <td colspan="1"><input type="text" value="" maxlength="7" name="txtidDetalle"></td>
                    <td colspan="1"><input type="text" value="" maxlength="13" name="txtVuelo"></td>
                    <td colspan="1"><input type="text" value="" maxlength="7" name="codR"></td>
                    <td colspan="1"><input type="text" value="" maxlength="13" name="cantP"></td>
                    <td colspan="1"><input type="text" value="" maxlength="13" name="pago"></td>

                </tr>
                
                <tr><td colspan="5" align="center">
                    <input type="submit" value="Grabar" name="GrabarDatos">
                    <input type="submit" value="Modificar" name="modificarDatos">
                    <input type="submit" value="Eliminar" name="eliminarDatos">
                </td></tr>

                <tr><td colspan="5"><label class="labForm">Base de datos Registro de Vuelos</label></td></tr>
                <tr>
                    <td colspan="1"><label class="labForm">ID Detalle</label></td>
                    <td colspan="1"><label class="labForm">Codigo Vuelo</label></td>
                    <td colspan="1"><label class="labForm">Codigo Reserva</label></td>
                    <td colspan="1"><label class="labForm">Cantidad de pasajeros</label></td>
                    <td colspan="1"><label class="labForm">Total a pagar</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM detalle";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td colspan="1"><?php echo $mostrar['IDdetalle']; ?></td>
                        <td colspan="1"><?php echo $mostrar['codVuelo']; ?></td>
                        <td colspan="1"><?php echo $mostrar['codReserva']; ?></td>
                        <td colspan="1"><?php echo $mostrar['cantPasaj']; ?></td>
                        <td colspan="1"><?php echo $mostrar['tot_vuelo']; ?></td>

                    </tr>
                    <?php
                }
                ?>
                

            </table>
        </form>



    

    
        <form action="promo.php" name="Formu" method="post"  id="Promoc" class="formulario fo8">
          
            <table border="1">
                <tr>
                    <td align="center" colspan="8">
                        <label class="labForm" >Promociones</label>
                    </td>
                </tr>

                <tr>
                    <td align="center" colspan="6">
                        <label class="labForm" >Registrar Promociones</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><label class="labForm">Nombre de Promoción</label></td><td colspan="3"><input type="text" value="" maxlength="13" name="txtProm"></td>
                </tr>
                <tr>
                    <td colspan="1"><label class="labForm">ID Promoción</label></td><td colspan="2"><input type="text" value="" maxlength="7" name="txtCodProm"></td>
                    <td colspan="1"><label class="labForm">Precio</label></td colspan="2"><td colspan="2"><input type="text" value="" maxlength="7" name="txtPrecVu"></td>
                </tr>
                <tr>
                    <td colspan="1"><label class="labForm">Máximo de pasajeros</label></td><td colspan="2"><input type="text" value="" maxlength="7" name="maxPas"></td>
                    <td colspan="1"><label class="labForm">Mínimo de pasajeros</label></td><td colspan="2"><input type="text" value="" maxlength="13" name="minPas"></td>
                </tr>
             

                <tr><td colspan="6" align="center">
                    
                    <input type="submit" value="Nuevo" name="limpiarDatos">
                    <input type="submit" value="Grabar" name="GrabarDatos">
                    <input type="submit" value="Modificar" name="modificarDatos">
                    <input type="submit" value="Eliminar" name="eliminarDatos">
                </td></tr>

                <tr><td colspan="6"><label class="labForm">Base de datos DESTINOS</label></td></tr>
                <tr>
                    <td colspan="1"><label class="labForm">ID Promoción</label></td>
                    <td colspan="1"><label class="labForm">Nombre Promoción</label></td>
                    <td colspan="1"><label class="labForm">Precio</label></td>
                    <td colspan="1"><label class="labForm">Máximo de pasajeros</label></td>
                    <td colspan="1"><label class="labForm">Mínimo de pasajeros</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM promociones";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td colspan="1"><?php echo $mostrar['IdPromo']; ?></td>
                        <td colspan="1"><?php echo $mostrar['nombreProm']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Precio']; ?></td>
                        <td colspan="1"><?php echo $mostrar['MaxPer']; ?></td>
                        <td colspan="1"><?php echo $mostrar['MinPer']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                

            </table>
        </form>
   

    

    
        <form action="" name="Formu" method="post"  id="Pasajer" class="formulario fo9">
        

            <table border="1">
                <tr>
                    <td align="center" colspan="3">
                        <label class="labForm" >INFORMACIÓN PASAJEROS</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="1"><label class="labForm">DNI</label></td>
                    <td colspan="1"><label class="labForm">Nombre</label></td>
                    <td colspan="1"><label class="labForm">Apellido</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM pasajeros";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td colspan="1"><?php echo $mostrar['DNI']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Nombre']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Apellido']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                

            </table>


        </form>
   

    
        <form action="datosbil.php" name="Formu" method="post"  id="Tarj" class="formulario fo10">
          

            <table border="1">
                <tr>
                    <td align="center" colspan="6">
                        <label class="labForm" >TARJETAS REGISTRADAS</label>
                    </td>
                </tr>
            
                <tr>
                <td colspan="1"><label class="labForm">DNI</label></td>
                    <td colspan="1"><label class="labForm">Código Tarjeta</label></td>
                    <td colspan="1"><label class="labForm">Nombre y Apellido</label></td>
                    <td colspan="1"><label class="labForm">Año</label></td>
                    <td colspan="1"><label class="labForm">Mes</label></td>
                    <td colspan="1"><label class="labForm">CVC</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM billetera";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                    <td colspan="1"><?php echo $mostrar['DNI']; ?></td>
                        <td colspan="1"><?php echo $mostrar['ID']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Nombre']; ?></td>
                        <td colspan="1"><?php echo $mostrar['ano']; ?></td>
                        <td colspan="1"><?php echo $mostrar['mes']; ?></td>
                        <td colspan="1"><?php echo $mostrar['CVC']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                

            </table>

        </form>

        
        <form action="datosRes.php" name="Formu" method="post"  id="Reserv" class="formulario fo11">
         

            <table border="1">
                <tr>
                    <td align="center" colspan="8">
                        <label class="labForm" >Reservas</label>
                    </td>
                </tr>

                <tr>
                    <td align="center" colspan="7">
                        <label class="labForm" >Reservas registradas</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><label class="labForm">Codigo Reserva</label></td><td colspan="4"><input type="text" value="" maxlength="13" name="codR"></td>
                </tr>
                <tr>
                    <td colspan="1"><label class="labForm">Fecha Reserva</label></td><td colspan="4"><input type="text" value="" maxlength="7" name="fechaR"></td>
                    <td colspan="1"><label class="labForm">Subtotal</label></td ><td colspan="4"><input type="text" value="" maxlength="7" name="subt"></td>
                </tr>
                <tr>
                    <td colspan="1"><label class="labForm">DecReserva</label></td><td colspan="4"  align="center"> <input type="date" class="" name="dRes" placeholder="Date" value=""></td>
                    <td colspan="1"><label class="labForm">Importe</label></td><td colspan="4"><input type="text" value="" maxlength="13" name="importe"></td>
                </tr>
                <tr>
                    <td colspan="1"><label class="labForm">Total Factura</label></td><td colspan="4"  align="center"> <input type="date" class="" name="factura" placeholder="Date" value=""></td>
                    <td colspan="1"><label class="labForm">Estado</label></td><td colspan="4"><input type="text" value="" maxlength="13" name="Estado"></td>
                </tr>
             

                <tr><td colspan="7" align="center">
                    <input type="submit" value="Nuevo" name="limpiarDatos">
                    <input type="submit" value="Grabar" name="GrabarDatos">
                    <input type="submit" value="Modificar" name="modificarDatos">
                    <input type="submit" value="Eliminar" name="eliminarDatos">
                </td></tr>

                <tr><td colspan="7"><label class="labForm">Base de datos de Reservas</label></td></tr>
                <tr>
                    <td colspan="1"><label class="labForm">Codigo Reserva</label></td>
                    <td colspan="1"><label class="labForm">Fecha Reserva</label></td>
                    <td colspan="1"><label class="labForm">Subtotal</label></td>
                    <td colspan="1"><label class="labForm">DecReserva</label></td>
                    <td colspan="1"><label class="labForm">Importe</label></td>
                    <td colspan="1"><label class="labForm">Total Factura</label></td>
                    <td colspan="1"><label class="labForm">Estado</label></td>
                </tr>

                <?php
                $sql = "SELECT * FROM reserva";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td colspan="1"><?php echo $mostrar['codReserva']; ?></td>
                        <td colspan="1"><?php echo $mostrar['fechaReserva']; ?></td>
                        <td colspan="1"><?php echo $mostrar['subTot']; ?></td>
                        <td colspan="1"><?php echo $mostrar['decReserva']; ?></td>
                        <td colspan="1"><?php echo $mostrar['imp']; ?></td>
                        <td colspan="1"><?php echo $mostrar['totFact']; ?></td>
                        <td colspan="1"><?php echo $mostrar['Estado']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                

            </table>

        </form>


   
</section>
</div>





</body>
</html>