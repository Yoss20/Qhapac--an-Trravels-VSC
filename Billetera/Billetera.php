<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../imagenes/logo-p.png"
    />
    <link rel="stylesheet" href="../css/stylesUsers.css" />
    <link rel="icon" href="../imagenes/logo-p.png" />
    <title>Mi Billetera</title>
    <link rel="stylesheet" href="styless.css" />
  </head>
  <body style="background-color: rgb(234, 233, 233)">
    <nav class="menu">
      
      <section
        style="background-color: rgba(0, 0, 0, 0.867)"
        class="encabezado_cont"
      >
      
        <ul class="menu__links0">
          <li class="menu__item">
            <a href="../indexUser.php" class="menu__link">Inicio</a>
          </li>

          
        <li class="menu__item">
          <a href="../VistasPagina/VentanaLOGUEADOS/HDestino.php" class="menu__link"
            >Destinos</a
          >
        </li>

        <li class="menu__item">
          <a href="../VistasPagina/VentanaLOGUEADOS/VueloUser.php" class="menu__link">Reserva</a>
        </li>

        <li class="menu__item">
          <a href="../VistasPagina/VentanaLOGUEADOS/promocionesUser.php" class="menu__link"
            >Promociones</a
          >
        </li>

        <li class="menu__item menu__item--show">
          <a href="#" class="menu__link"
            >¿QUIENES SOMOS? <img src="../assets/arrow.svg" class="menu__arrow"
          /></a>

          <ul class="menu__nesting">
            <li class="menu__inside">
              <a href="../VistasPagina/VentanaLOGUEADOS/EmpresaUser.php" class="menu__link menu__link--inside"
                >Qhapac Ñan Travels</a
              >
            </li>
            <li class="menu__inside">
              <a href="../VistasPagina/VentanaLOGUEADOS/NuestroEquipoUser.php" class="menu__link menu__link--inside"
                >Nuestro Equipo</a
              >
            </li>
          </ul>
        </li>
        <li class="menu__item menu__item--show">
          <a href="#" class="menu__link"
            >MI CUENTA <img src="../assets/arrow.svg" class="menu__arrow"
          /></a>

          <ul class="menu__nesting">
            <li class="menu__inside">
              <a href="../VistasPagina/MiPerfil.php" class="menu__link menu__link--inside">MI PERFIL</a>
            </li>
            <li class="menu__inside">
              <a href="Billetera.php" class="menu__link menu__link--inside"
                >MI BILLETERA</a
              >
            </li>
            
          </ul>
          
        </li>
      </ul>
        


       
    </nav>
    <main class="main-container">
      <section class="main-container__background-section">
        <div class="card">
          <img class="card__logo" src="../imagenes/logo-p1.png" alt="logo" />
          <p class="card__number">0000 0000 0000 0000</p>
          <div class="card__details">
            <p id="cambiar" class="card__details-name">YOSSELIN ALTAPIURANO</p>
            <p>
              <span class="card__month">00</span>/<span class="card__year"
                >00</span
              >
            </p>
          </div>
        </div>

        <div class="card-back">
          <p class="card-back__cvc">000</p>
        </div>
      </section>

      <section class="main-container__form-section">
      <form class="form" action="procesa.php" method="POST" enctype="multipart/form_data">

          <label class="form__label" for="cardholder"
            >NOMBRE EN LA TARJETA</label
          >
          <input
            class="form__input"
            type="text"
            name="cardholder"
            id="cardholder"
            placeholder="ejem. Yosselin Altapiurano"
          />
          <div class="form__cardholder--error error"></div>

          <label class="form__label" for="cardNumber"
            >NUMERO DE LA TARJETA</label
          >
          <input
            class="form__input"
            type="text"
            name="cardNumber"
            id="cardNumber"
            maxlength="19"
            placeholder="ejem. 1234 5678 9123 0000"
          />
          <div class="form__inputnumber--error error"></div>

          <div class="form__date-cvc">
            <!-- grid -->
            <!-- 1 -->
            <label class="form__label" for="cardMonth"
              >Fec. Vencimiento (MM/YY)</label
            >
            <!-- 2 -->
            <label class="form__label" for="cardCvc">CVC</label>
            <!-- 3 -->
            <div class="form__date">
              <input
                class="form__input"
                type="text"
                maxlength="2"
                name="cardMonth"
                id="cardMonth"
                placeholder="MM"
              />
              <input
                class="form__input"
                type="text"
                maxlength="2"
                name="cardYear"
                id="cardYear"
                placeholder="YY"
              />
            </div>
            <!-- 4 -->
            <input
              class="form__input"
              type="text"
              maxlength="3"
              name="cardCvc"
              id="cardCvc"
              placeholder="ejem. 123"
            />
            <!-- 5 -->
            <div class="form__errors-container">
              <div class="form__input-mm--error error"></div>
              <div class="form__input-yy--error error"></div>
            </div>
            <!-- 6 -->
            <div class="form__input-cvc--error error"></div>
          </div>
          
<input class="Botoncito" type="submit" value="Confirmar" name="Enviar"/>
<input type="hidden" name="dni" value="<?php echo $_SESSION['dni']; ?>"/>


</form>
      
      </section>
    </main>

    <script src="./main.js"></script>
  </body>
</html>
