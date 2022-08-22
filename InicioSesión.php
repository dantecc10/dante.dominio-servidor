<?php
include 'Scripts PHP/ConexiónUsuarios.php';
echo "Hola";
$sql = "SELECT * FROM usuarios";
//$result = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql) or die("Error en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($result)) {
    echo "<p>ID de usuario: " . $columna['ID'] . "</p>";
    echo "<p>Nombre de usuario: " . $columna['nombreUsuario'] . "</p>";
    echo "<p>Email de usuario: " . $columna['email'] . "</p>";
    echo "<p>Contraseña de usuario: " . $columna['contraseña'] . "</p>";
}

mysqli_close($conn);
