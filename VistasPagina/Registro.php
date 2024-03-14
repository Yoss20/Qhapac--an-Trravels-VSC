<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/styleRegistro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../js/Registros.js"></script>
    <link rel="icon" href="../imagenes/logo-p.png">

</head>
<body>
<a href="../index.php" id="logo-container">
    <div id="logo-background"></div>
    <img src="../imagenes/LOGO TERMINADO.png" alt="Logo" id="logo-button" />
  </a>
 <div class="wrapper">
 <form action="Registrar.php" method="post" onsubmit="return validarFormulario(event) && validarFortalezaContrasena(event)">



        <h1>Registro</h1>   

        <div class="input-box">
            <div class="input-field">
                <input type="number"
                placeholder="Usuario/Dni" name= "dni" required maxlength="8"> 
                <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                <select name="genero" required>
                <option value="" disabled selected>Selecciona un género</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="Detergente">No binario</option>
                <option value="Indeciso/a">Prefiero no decirlo</option>
                </select>
                <i class='bx bxs-user'></i>
                </div>
            <button type="button" class="input-field" id="consultar">Autocompletar nombres</button>
            

            <div class ="input-field">
                <input type="text" name="nombre" placeholder="Nombres" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class ="input-field">
            <input type="text" name="apellidop" placeholder="Apellido Paterno" required>
                <i class='bx bxs-user'></i> 
            </div>

            <div class ="input-field">
            <input type="text" name="apellidom" placeholder="Apellido Materno" required>
                <i class='bx bxs-user'></i> 
            </div>
            <div class="input-field">
    <input type="text" id="fecha" name="fecha-naci" placeholder="Fecha de nacimiento" required onfocus="(this.type='date')" onblur="(this.type='text')" />
    <i class='bx bxs-calendar'></i>
</div>

        </div>

        <div class="input-box">
            <div class="input-field">
                <input type="email" name="email" placeholder="Correo Electrónico" required>
                <i class='bx bxs-envelope' ></i>
            </div>
            <div class="input-field">
                <input type="number" placeholder="Celular" name="celular" required maxlength="9">
                <i class='bx bxs-phone'></i>
            </div>
            
        </div>

        <div class="input-box">
            <div class="input-field">
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-field">   
                <input type="password" name="repetir_contrasena" placeholder="Repetir Contraseña" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
        </div>
    
        <label id="acepto-terminos">
        
        <input type="checkbox" required> <!-- Agregado el atributo required -->
    He leído y acepto las <a href="#" onclick="abrirVentanaEmergente('../Login/Condiciones.html')">Condiciones de uso</a> y la <a href="#" onclick="abrirVentanaEmergente('../Login/Politica.html')">Politica de privacidad</a> de este sitio web.
    </label>


        <button type="submit" class="btn">Registrarse</button>
        <div id="error-message" class="error-message"></div>
        <div id="mensaje1" class="mensaje1"></div>

        </div> 
    </form>
    <?php
    if (isset($_GET['success'])) {
        header("Location: ../indexUser.php");
        exit();
    } elseif (isset($_GET['error'])) {
        if ($_GET['error'] == 'contrasenas_no_coinciden') {
            echo "Las contraseñas no coinciden.";
        } elseif ($_GET['error'] == 'database_error') {
            echo "Error al registrar en la base de datos.";
        }
    }
    ?>
</div>   


</body> 
</html>