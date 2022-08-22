<?php
    $servername = "localhost";
    $database = $dbname = "life";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("<p>Error al conectar con la base de datos: " . mysqli_connect_error() . "</p><p>Pruebe a verificar la conexión del servidor...</p>");
    }
    echo "<script>console.log('Conexión a la base de datos: Exitosa')</script>";
