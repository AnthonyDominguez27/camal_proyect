<?php
session_start(); // Iniciar la sesión

if (!empty($_POST["ingresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        require '../../../config/conexion.php';
        $sql = "SELECT * FROM Usuario u INNER JOIN Persona p ON u.idPersona=p.idPersona
                WHERE usuario = ?";
        $params = array($usuario);
        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt === false) {
            echo "Error en la consulta SQL";
            die(print_r(sqlsrv_errors(), true));
        }

        if (sqlsrv_has_rows($stmt)) {
            $datos = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
            if ($password == $datos['password']) {                
                $_SESSION["id"] = $datos['idUsuario'];
                $_SESSION['usuario'] = $datos['nombre'];
                header("location: index.php");
                sqlsrv_free_stmt($stmt);
                exit;
            } else {
                echo "<div class='mensajeError' style='color: red;'> Contraseña incorrecta </div>";
            }            
        } else {
            echo "<div class='mensajeError' style='color: red;'> Usuario no encontrado </div>";
        }

    }else {
            echo "<div class='mensajeError' style='color: red;'>Campos Vacíos</div>";
        }
}
