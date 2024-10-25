<?php
session_start();
if (empty($_SESSION["id"])) {
header("location:app/views/inicio/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDE-CAMAL</title>
    <!-- TRANSFORMAR LOGO DE PAGINA EN .ICO -->
    <link rel="shortcut icon" href="assets/images/escudo_mde.png">
</head>
<body>
    
</body>
</html>