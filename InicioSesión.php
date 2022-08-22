<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'Scripts PHP/ConexiónUsuarios.php';

    $sql = "SELECT * FROM usuarios";
    //$result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql) or die("Error en la consulta a la base de datos");

    while ($columna = mysqli_fetch_array($result)) {
        if (($_POST['emailUsuario'] == $columna['nombreUsuario'] || $_POST['emailUsuario'] == $columna['email']) && ($_POST['contraseña'] == $columna['contraseña'])) {
            echo "Lo lograste, el inicio es correcto";
        } else {
            echo "Revisa eso último...";
        }
    }

    mysqli_close($conn);
    ?>
</body>

</html>