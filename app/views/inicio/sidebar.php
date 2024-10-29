    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MDE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Camal Municipal" name="description" />
        <meta content="Personalizado" name="Autor" />
        <!-- TRANSFORMAR LOGO DE PAGINA EN .ICO -->
        <link rel="shortcut icon" href="../../../assets/images/escudo_mde.png">
        <link rel="stylesheet" href="../../../assets/css/styleSidebar.css">
    </head>
    <body>
    <!-- Barra lateral de navegación -->
    <div class="sidebar">
        <div class="logo">
            <img src="../../../assets/images/escudo_mde.png" alt="Logo Municipalidad" height="70%" class="mde_escudo">
            <img src='../../../assets/images/MDE_LOGO.svg' alt="" height="50px" style="width: 90%; padding: 10px;"> <span class="logo-txt"></span>
            <hr>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#">Principal</a></li>
                <li><a href="#">Registros</a>
                <ul class="dropdown">
                <li><a href="#">Nuevo Servicio</a></li>
                <li><a href="#">Comerciante</a></li>
            </ul>
        </li>
                <li><a href="#">Consultas</a>
                <ul class="dropdown">
                    <li><a href="#">Servicios por Comerciante</a></li>
                    <li><a href="#">Servicios por Cámara Frigorifica</a></li>
                    <li><a href="#">Servicios por Tipo de Animal</a></li>
                    <li><a href="#">Información de tipos de animales</a></li>
                </ul>
            </li>

                <li><a href="#">Tarifas</a></li>
                <li><a href="#">Reportes</a>
            <ul class="dropdown">
                <li><a href="#">Generar Reporte</a></li>

            </ul>
        </li>
            </ul>
        </nav>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
    <div id="contenedor_principal">
        <?php include "../../../app/views/inicio/principal.php" ?>
        <!-- Aquí se mostrará el contenido de las páginas cargadas sin recargar la página completa. -->
    </div>
    </div>
    


    </body>
    </html>