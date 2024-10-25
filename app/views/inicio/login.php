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
    <div class="titulo">
        <h2>CAMAL MUNICIPAL "SAN LUIS"</h2>
    </div>
    <!-- <img class="escudo" src="../../../assets/images/escudo_mde.png" alt="escudo"> -->
    <div class="login-container">
        <div class="informacion-form">
            <h2>¡Bienvenido!</h2>
            <p>Inicia sesión para continuar</p>
            <?php include "../../../app/controllers/controllerLogin.php" ?>
            <form class="form" action="" method="POST">               
                <label>
                    <i class='bx bx-user'></i>
                    <input type="text" placeholder="Usuario" name="usuario" autocomplete="off">                       
                </label>
                <br>
                <label>
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" placeholder="Contraseña" name="password" id="password" autocomplete="off">
                    <i class='bx bx-hide' id="toggle"></i>
                </label>
                <div class="ingresar">
                    <input name="ingresar" type="submit" value="Ingresar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
