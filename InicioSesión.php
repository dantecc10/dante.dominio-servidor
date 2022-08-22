<?php
include 'ConexiónUsuarios.php';
echo "Hola";
$sql = "SELECT * FROM usuarios";
//$result = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql) or die("Error en la consulta a la base de datos");

while ($columna = mysqli_fetch_array($result)) {
    echo "<p>ID de usuario: " . $columna['ID'] . "</p><br>";
    echo "<p>Nombre de usuario: " . $columna['nombreUsuario'] . "</p><br>";
    echo "<p>Email de usuario: " . $columna['email'] . "</p><br>";
    echo "<p>Contraseña de usuario: " . $columna['contraseña'] . "</p><br>";
}
