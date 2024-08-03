<?php
// Parámetros de conexión
$serverName = "wserver19/sqlexpress"; // Ejemplo: tu_servidor\sqlexpress
$connectionInfo = array(
    "Database" => "epower",
    "UID" => "epower",
    "PWD" => "epower"
);

// Establecer la conexión
$conn = sqlsrv_connect($serverName, $connectionInfo);

// Comprobar si la conexión se estableció correctamente
if($conn) {
    echo "Conexión establecida.";
} else {
    die(print_r(sqlsrv_errors(), true));
}
?>
