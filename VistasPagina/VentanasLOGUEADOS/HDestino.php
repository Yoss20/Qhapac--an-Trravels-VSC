 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos</title>
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="icon" href="../imagenes/logo-p.png" />
    <script src="../js/Registros.js"></script>
    <link rel="stylesheet" href="../../css/EstilosDestinos/EstilosH.css">
    <link rel="stylesheet" href="../../css/footer.css" />
    




    <link rel="stylesheet" href="../../css/EstilosDestinos/DANCASH.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DAPURIMAC.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DAYACUCHO.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DCUSCO.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DHUANCAVELICA.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DHUANUCO.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DJUNIN.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DLIMA.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DMADREDEDIOS.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DPUNO.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DSANMARTIN.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DTACNA.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DTRUJILLO.css">
    <link rel="stylesheet" href="../../css/EstilosDestinos/DTUMBES.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body  >

<nav class="menu">
      <section class="encabezado_cont">
        <ul class="menu__links0">
          
        </li  class="menu__item0">
          <form method="post">
            <a href="https://wa.me/51951267834" class="menu__link0" target="_blank">Ayuda</a>
        </form>
          </li>
          <?php
          
          if (isset($_POST['contactanos'])) {
          header('Location: ../../VistasPagina/VentanasLOGUEADOS/Contactanos.php');
          exit; 
        }
        ?>

          </li  class="menu__item0">
          <form method="post">
            <button type="submit" name="contactanos" class="btn1">Contáctanos</button>
        </form>
          </li>
          <?php
          
          if (isset($_POST['contactanos'])) {
          header('Location: ../VistasPagina/Contactanos.php');
          exit; 
        }
        ?>
         
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
          </li>>
        </ul>

        <div class="menu__hamburguer">
          <img src="../../assets/menu.svg" class="menu__img" />
        </div>

        
      </section>


      <section class="menu_cont">
        <div class="logo">
          <img src="../../imagenes/LOGO TERMINADO.png" alt="Logo de la Compañia" />
        </div>

        <ul class="menu__links">
         <li class="menu__item">
             <form method="post">
            <button type="submit" name="Inicio" class="btn1">Inicio</button>
        </form>
          </li>
          <?php
          
          if (isset($_POST['Inicio'])) {
          header('Location: ../../indexUser.php');
          exit; 
        }
        ?>

      <ul class="menu__links">
         <li class="menu__item">
             <form method="post">
            <button type="submit" name="destino" class="btn1">Destinos</button>
        </form>
          </li>
          <?php
          
          if (isset($_POST['destino'])) {
          header('Location: HDestino.php');
          exit; 
        }
        ?>
  
         <ul class="menu__links">
         <li class="menu__item">
             <form method="post">
            <button type="submit" name="reserva" class="btn1">Reserva</button>
        </form>
          </li>
          <?php
          
          if (isset($_POST['reserva'])) {
          header('Location: ');
          exit; 
        }
        ?>

<ul class="menu__links">
         <li class="menu__item">
             <form method="post">
            <button type="submit" name="promociones" class="btn1">Promociones</button>
        </form>
          </li>
          <?php
          
          if (isset($_POST['promociones'])) {
          header('Location: ../../VistasPagina/VentanasLOGUEADOS/promocionesUser.php');
          exit; 
        }
        ?>



          <li class="menu__item menu__item--show">
            <a  class="menu__link"
              >¿QUIENES SOMOS? <img src="../../assets/arrow.svg" class="menu__arrow"
            /></a>

            <ul class="menu__nesting">
                    <li class="menu__inside">
                        <button onclick="redirectTo('EmpresaUser.php')" class="btn1">Qhapac Ñan Travels</button>
                    </li>
                    <li class="menu__inside">
                        <button onclick="redirectTo('NuestroEquipoUser.php')" class="btn1">Nuestro Equipo</button>
                    </li>
                </ul>

          </li>


          <li class="menu__item menu__item--show">
            <a class="menu__link"
              >MI CUENTA <img src="../../assets/arrow.svg" class="menu__arrow"
            /></a>

            <ul class="menu__nesting">
                    <li class="menu__inside">
                        <button onclick="ir('MiPerfil.php')" class="btn1">MI PERFIL</button>
                    </li>
                    <li class="menu__inside">
                        <button onclick="ir2('Tarjetas.php')" class="btn1">MI BILLETERA</button>
                    </li>
                </ul>

          </li>
        </ul>

      </section>
    </nav>

    <script>
    function redirectTo(page) {
        window.location.href = '../../VistasPagina/VentanasLOGUEADOS/' + page;
    }
</script>
<script>
    function ir(page) {
        window.location.href = '../../VistasPagina/' + page;
    }
</script>
<script>
    function ir2(page) {
        window.location.href = '../../Billetera/' + page;
    }
</script>





<header>
    <section>
      <ul>
          <li><a href="#ANCASH" data-target="ANCASH">ÁNCASH</a></li>
          <li><a href="#APURIMAC" data-target="APURIMAC">APURÍMAC</a></li>
          <li><a href="#AYACUCHO" data-target="AYACUCHO">AYACUCHO</a></li>
          <li><a href="#CUSCO" data-target="CUSCO">CUSCO</a></li>
          <li><a href="#HUANCAVELICA" data-target="HUANCAVELICA">HUANCAVELICA</a></li>
          <li><a href="#HUANUCO" data-target="HUANUCO">HUÁNUCO</a></li>
          <li><a href="#JUNIN" data-target="JUNIN">JUNÍN</a></li>
          <li><a href="#TRUJILLO" data-target="TRUJILLO">TRUJILLO</a></li>
          <li><a href="#LIMA" data-target="LIMA">LIMA</a></li>
          <li><a href="#MADRE_DE_DIOS" data-target="MADRE_DE_DIOS">MADRE DE DIOS</a></li>
          <li><a href="#PUNO" data-target="PUNO">PUNO</a></li>
          <li><a href="#SAN_MARTIN" data-target="SAN_MARTIN">SAN MARTÍN</a></li>
          <li><a href="#TACNA" data-target="TACNA">TACNA</a></li>
          <li><a href="#TUMBES" data-target="TUMBES">TUMBES</a></li>
      </ul>
  </section>
  </header>
 <section>
  <section class="imgBD departamento">
  <img src="../../imagenes/imgDestinos/BUSCATUSDESTINOS.png" alt="" style="width: 900px; height: 380px;">
</section>




  <section class="departamento" id="ANCASH" >
  <div id="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    <input type="radio" name="slider" id="slide4">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_1">
                <div class="slide-content">
                   <h2>ÁNCASH</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_2">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_3">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_4">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
       <label for="slide1"></label>
       <label for="slide2"></label>
       <label for="slide3"></label>
       <label for="slide4"></label>
    </div>
    <div id="bullets">
       <label for="slide1"></label>
       <label for="slide2"></label>
       <label for="slide3"></label>
       <label for="slide4"></label>
    </div>
 </div>
</section>



<section class="departamento" id="APURIMAC" >
   <div id="slider">
     <input type="radio" name="slider" id="slide5" checked>
     <input type=radio name="slider" id="slide6">
     <input type=radio name="slider" id="slide7">
     <input type=radio name="slider" id="slide8">
     <div id="slides">
       <div id="overflow">
         <div class="inner">
           <div class="slide slide_5">
             <div class="slide-content">
               <h2>APURÍMAC</h2>
               <p>Bienvenidos</p>
             </div>
           </div>
           <div class="slide slide_6">
             <div class="slide-content">
              
             </div>
           </div>
           <div class="slide slide_7">
             <div class="slide-content">
           
             </div>
           </div>
           <div class="slide slide_8">
             <div class="slide-content">
             </div>
           </div>
         </div>
       </div>
     </div>
     <div id="controls">
       <label for="slide5"></label>
       <label for="slide6"></label>
       <label for="slide7"></label>
       <label for="slide8"></label>
     </div>
     <div id="bullets">
       <label for="slide5"></label>
       <label for="slide6"></label>
       <label for="slide7"></label>
       <label for="slide8"></label>
     </div>
   </div>
 </section>








<section class="departamento" id="AYACUCHO"  >
  <div id="slider">
    <input type="radio" name="slider" id="slide9" checked>
    <input type="radio" name="slider" id="slide10">
    <input type="radio" name="slider" id="slide11">
    <input type="radio" name="slider" id="slide12">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_9">
                <div class="slide-content">
                   <h2>AYACUCHO</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_10">
                <div class="slide-content">
                 
                </div>
              </div>
             <div class="slide slide_11">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_10">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
      <label for="slide9"></label>
      <label for="slide10"></label>
      <label for="slide11"></label>
      <label for="slide12"></label>
    </div>
    <div id="bullets">
       <label for="slide9"></label>
       <label for="slide10"></label>
       <label for="slide11"></label>
       <label for="slide12"></label>
    </div>
 </div>
</section>


<section class="departamento" id="CUSCO">
  <div id="slider">
    <input type="radio" name="slider" id="slide13" checked>
    <input type="radio" name="slider" id="slide14">
    <input type="radio" name="slider" id="slide15">
    <input type="radio" name="slider" id="slide16">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_13">
                <div class="slide-content">
                   <h2>CUSCO</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_14">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_15">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_16">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
      <label for="slide13"></label>
      <label for="slide14"></label>
      <label for="slide15"></label>
      <label for="slide16"></label>
    </div>
    <div id="bullets">
       <label for="slide13"></label>
       <label for="slide14"></label>
       <label for="slide15"></label>
       <label for="slide16"></label>
    </div>
 </div>
</section>


<section class="departamento" id="HUANCAVELICA" >
  <div id="slider">
    <input type="radio" name="slider" id="slide17" checked>
    <input type="radio" name="slider" id="slide18">
    <input type="radio" name="slider" id="slide19">
    <input type="radio" name="slider" id="slide20">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_17">
                <div class="slide-content">
                   <h2>HUANCAVELICA</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_18">
                <div class="slide-content">
                 
                </div>
              </div>
             <div class="slide slide_19">
                <div class="slide-content">
                 
                </div>
             </div>
             <div class="slide slide_20">
                <div class="slide-content">
                 
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
      <label for="slide17"></label>
      <label for="slide18"></label>
      <label for="slide19"></label>
      <label for="slide20"></label>
    </div>
    <div id="bullets">
       <label for="slide17"></label>
       <label for="slide18"></label>
       <label for="slide19"></label>
       <label for="slide20"></label>
    </div>
 </div>
</section>


<section class="departamento" id="HUANUCO" >
  <div id="slider">
    <input type="radio" name="slider" id="slide21" checked>
    <input type="radio" name="slider" id="slide22">
    <input type="radio" name="slider" id="slide23">
    <input type="radio" name="slider" id="slide24">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_21">
                <div class="slide-content">
                   <h2>HUÁNUCO</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_22">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_23">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_24">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
       <label for="slide21"></label>
       <label for="slide22"></label>
       <label for="slide23"></label>
       <label for="slide24"></label>
    </div>
    <div id="bullets">
       <label for="slide21"></label>
       <label for="slide22"></label>
       <label for="slide23"></label>
       <label for="slide24"></label>
    </div>
 </div>
</section>



<section class="departamento" id="JUNIN" >
  <div id="slider">
    <input type="radio" name="slider" id="slide25" checked>
    <input type="radio" name="slider" id="slide26">
    <input type="radio" name="slider" id="slide27">
    <input type="radio" name="slider" id="slide28">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_25">
                <div class="slide-content">
                   <h2>JUNÍN</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_26">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_27">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_28">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
      <label for="slide25"></label>
      <label for="slide26"></label>
      <label for="slide27"></label>
      <label for="slide28"></label>
    </div>
    <div id="bullets">
       <label for="slide25"></label>
       <label for="slide26"></label>
       <label for="slide27"></label>
       <label for="slide28"></label>
    </div>
 </div>
</section>


<section class="departamento" id="TRUJILLO">
  <div id="slider">
    <input type="radio" name="slider" id="slide29" checked>
    <input type="radio" name="slider" id="slide30">
    <input type="radio" name="slider" id="slide31">
    <input type="radio" name="slider" id="slide32">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_29">
                <div class="slide-content">
                   <h2>TRUJILLO</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_30">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_31">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_32">
                <div class="slide-content">

                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
      <label for="slide29"></label>
      <label for="slide30"></label>
      <label for="slide31"></label>
      <label for="slide32"></label>
    </div>
    <div id="bullets">
       <label for="slide29"></label>
       <label for="slide30"></label>
       <label for="slide31"></label>
       <label for="slide32"></label>
    </div>
 </div>
</section>


<section class="departamento" id="LIMA"  >
  <div id="slider">
    <input type="radio" name="slider" id="slide33" checked>
    <input type="radio" name="slider" id="slide34">
    <input type="radio" name="slider" id="slide35">
    <input type="radio" name="slider" id="slide36">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_33">
                <div class="slide-content">
                   <h2>LIMA</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_34">
                <div class="slide-content">
          
                </div>
              </div>
             <div class="slide slide_35">
                <div class="slide-content">
              
                </div>
             </div>
             <div class="slide slide_36">
                <div class="slide-content">
             
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
      <label for="slide33"></label>
      <label for="slide34"></label>
      <label for="slide35"></label>
      <label for="slide36"></label>
    </div>
    <div id="bullets">
       <label for="slide33"></label>
       <label for="slide34"></label>
       <label for="slide35"></label>
       <label for="slide36"></label>
    </div>
 </div>
</section>



<section class="departamento" id="MADRE_DE_DIOS"  >
  <div id="slider">
    <input type="radio" name="slider" id="slide37" checked>
    <input type="radio" name="slider" id="slide38">
    <input type="radio" name="slider" id="slide39">
    <input type="radio" name="slider" id="slide40">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_37">
                <div class="slide-content">
                   <h2>MADRE DE DIOS</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_38">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_39">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_40">
                <div class="slide-content">
                 
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
      <label for="slide37"></label>
      <label for="slide38"></label>
      <label for="slide39"></label>
      <label for="slide40"></label>
    </div>
    <div id="bullets">
       <label for="slide37"></label>
       <label for="slide38"></label>
       <label for="slide39"></label>
       <label for="slide40"></label>
    </div>
 </div>
</section>



<section class="departamento" id="PUNO"  >
  <div id="slider">
    <input type="radio" name="slider" id="slide41" checked>
    <input type="radio" name="slider" id="slide42">
    <input type="radio" name="slider" id="slide43">
    <input type="radio" name="slider" id="slide44">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_41">
                <div class="slide-content">
                   <h2>PUNO</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_42">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_43">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_44">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
       <label for="slide41"></label>
       <label for="slide42"></label>
       <label for="slide43"></label>
       <label for="slide44"></label>
    </div>
    <div id="bullets">
       <label for="slide41"></label>
       <label for="slide42"></label>
       <label for="slide43"></label>
       <label for="slide44"></label>
    </div>
 </div>
</section>



<section class="departamento" id="SAN_MARTIN"  >
  <div id="slider">
    <input type="radio" name="slider" id="slide45" checked>
    <input type="radio" name="slider" id="slide46">
    <input type="radio" name="slider" id="slide47">
    <input type="radio" name="slider" id="slide48">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_45">
                <div class="slide-content">
                   <h2>SAN MARTÍN</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_46">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_47">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_48">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
      <label for="slide45"></label>
      <label for="slide46"></label>
      <label for="slide47"></label>
      <label for="slide48"></label>
    </div>
    <div id="bullets">
       <label for="slide45"></label>
       <label for="slide46"></label>
       <label for="slide47"></label>
       <label for="slide48"></label>
    </div>
 </div>
</section>


<section class="departamento" id="TACNA" >
  <div id="slider">
    <input type="radio" name="slider" id="slide49" checked>
    <input type="radio" name="slider" id="slide50">
    <input type="radio" name="slider" id="slide51">
    <input type="radio" name="slider" id="slide52">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_49">
                <div class="slide-content">
                   <h2>TACNA</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_50">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_51">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_52">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
       <label for="slide49"></label>
       <label for="slide50"></label>
       <label for="slide51"></label>
       <label for="slide52"></label>
    </div>
    <div id="bullets">
      <label for="slide49"></label>
      <label for="slide50"></label>
      <label for="slide51"></label>
      <label for="slide52"></label>
    </div>
 </div>
</section>


<section class="departamento" id="TUMBES" >
  <div id="slider">
    <input type="radio" name="slider" id="slide53" checked>
    <input type="radio" name="slider" id="slide54">
    <input type="radio" name="slider" id="slide55">
    <input type="radio" name="slider" id="slide56">
    <div id="slides">
       <div id="overflow">
          <div class="inner">
             <div class="slide slide_53">
                <div class="slide-content">
                   <h2>TUMBES</h2>
                   <p>Bienvenidos</p>
                </div>
             </div>
             <div class="slide slide_54">
                <div class="slide-content">
                </div>
              </div>
             <div class="slide slide_55">
                <div class="slide-content">
                </div>
             </div>
             <div class="slide slide_56">
                <div class="slide-content">
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="controls">
       <label for="slide53"></label>
       <label for="slide54"></label>
       <label for="slide55"></label>
       <label for="slide56"></label>
    </div>
    <div id="bullets">
      <label for="slide53"></label>
      <label for="slide54"></label>
      <label for="slide55"></label>
      <label for="slide56"></label>
    </div>
 </div>
</section>
</section>



 <footer>
  <div class="footer-links-left">
    <h3>Información</h3>
    <ul>
    <li><a href="HDestino.php">Destinos</a></li>
          <li><a href=../VueloUser.php">Reserva</a></li>
          <li><a href="promocionesUser.php">Promociones</a></li>
          <li><a href="EmpresaUser.php">Nuestra Empresa</a></li>
          <li><a href="NuestroEquipoUser.php">Nuestro Equipo</a></li>
          <li><a href="Contactanos.php">Contactanos</a></li>
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
    <a href="/">Inicio</a> |
    <a href="/terminos">Términos y condiciones</a> |
    <a href="/privacidad">Política de privacidad</a>
  </div>
</footer>

 
<script src="../../js/SeccionDepartamentos.js"></script>
</body>


</html>