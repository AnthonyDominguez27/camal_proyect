<?php
$serverName = "ANTHONY-DOMINGU";
$connectionOptions = array(
    "Database" => "camal_municipal",
    "Uid" => "sa",
    "PWD" => "Anthony27"
);

// Intenta conectarte
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    // Si hay un error, imprímelo
    echo "Conexión no se pudo establecer";
    die(print_r(sqlsrv_errors(), true));
    } else {
        
    }

// La conexión fue exitosa, puedes ejecutar consultas aquí
