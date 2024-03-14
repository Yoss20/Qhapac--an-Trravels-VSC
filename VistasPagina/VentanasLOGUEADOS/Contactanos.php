<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTÁCTANOS</title>
    <link rel="stylesheet" href="../../css/styleContactanos1.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="icon" href="../../imagenes/logo-p.png">
</head>
<body  class="fondo">

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
            <a href="../VueloUser.php" class="menu__link">Reserva</a>
          </li>

          <li class="menu__item">
            <a href="promocionesUser.php" class="menu__link"
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
                <a href="../Tarjetas.php" class="menu__link menu__link--inside"
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



    <section class="S">
        <div class="contenedor">
            <div class="content">
                <div class="izq">
                    <div class="direccion detalles">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Dirección</div>
                        <div class="textoUno">Miraflores, 125</div>
                        <div class="textoDos">San Isidro, 666</div>
                    </div>

                    <div class="telefono detalles">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Teléfono</div>
                        <div class="textoUno">+01 52389</div>
                        <div class="textoDos">+01 59875</div>
                    </div>

                    <div class="email detalles">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">E-mail</div>
                        <div class="textoUno">secretariaQÑT@gmail.com</div>
                        <div class="textoDos">info.qñt@gmail.com</div>
                    </div>
                </div>


                <div class="der">
                    <div class="topic-text">Envianos tus consultas</div>
                    <p>Si tienes alguna consulta o dudas, escribanos para asesorarte. Es un placer ayudarte</p>
                    <form action="https://formsubmit.co/altamiranoandrea2901@gmail.com" method="POST">
                        <div class="input-box">
                        <input type="text" placeholder="Ingrese su nombre" name="name" >
                        </div>

                        <div class="input-box">
                            <input type="email" placeholder="Ingrese su E-mail" name="email">
                        </div>

                        <div class="input-box mensaje">
                            <input type="text" placeholder="Ingrese su mensaje" name="coments">
                        </div>

                        <div>
                            <input class="btn" type="submit" value="Enviar">
                            <input type="hidden" name="_next" value="http://localhost/Qhapac-an-Travels/VistasPagina/Contactanos.php">
                            <input type="hidden" name="_captcha" value="false">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


        


</body>
</html>