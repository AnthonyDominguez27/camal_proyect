<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Iniciar Sesión</title>
</head>
<body>
    
<img class="image_login" src="../../../assets/images/login_2.png" alt="Fondo de Inicio de Sesión">
<span class="loader" id="contenedor_carga"><span class="loader-inner"></span></span>

<div class="container-form" id="login_container" style="display: none;">
<div class="container-form">
    <div class="information">
        <img src="../../../assets/images/logo_login.png" alt="Logo MDE_Trujillo" class="info_image">
        <img src="../../../assets/images/nameMuni.png" alt="Name MDE_Trujillo" class="info_image1">
        <div class="info-childs">
            <h2>CAMAL MUNICIPAL</h2>
            <h3>"SAN LUIS"</H3>
        </div>
        <img src="../../../assets/images/ganadoLogo.png" alt="Logo Ganado Vector" class="info_image2">
    </div>

    <div class="form_information">

        <div class="firstLine">
            <div class="form_square">
            </div>
        </div>

        <div class="form-information_childs">
            <h2>¡Bienvenido!</h2>
            <p>Inicia sesión para continuar</p>
            <?php include "../../../app/controllers/controllerLogin.php" ?>
            <form class="form" action="" method="POST">               
                <label>
                    <i class='bx bx-user'></i>
                    <input type="text" placeholder="Usuario" name="usuario" autocomplete = "off">                       
                </label>
                <label>
                    <i class='bx bx-lock-alt' ></i>
                    <input type="password" placeholder="Contraseña" name="password" id="password" autocomplete = "off">
                    
                </label>
                <div class="ingresar">
                    <input name="ingresar" type="submit" value="Ingresar">
                </div>
            </form>
        </div>
    </div>
</div>

    <script>
    window.onload = function() {
    setTimeout(function() {
        var contenedor = document.getElementById('contenedor_carga');
        var loginContainer = document.getElementById('login_container');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
        loginContainer.style.display = 'flex';
    }, 1500);
    };
</script>
</body>
</html>
