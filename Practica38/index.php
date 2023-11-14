<?php
$servidor = "localhost";
$puerto = "3308";
$usuario = "root";
$clave = "";
$bd = "registrocontactos";

$conexion = mysqli_connect($servidor . ":" . $puerto, $usuario, $clave, $bd);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro contactos</title>
</head>

<body>
    <form action="#" name="registrocontactos" method="post">
        <input type="text" name="Nombre" placeholder="nombre">
        <input type="text" name="Telefono" placeholder="telefono">
        <input type="email" name="Correo" placeholder="correo">
        <input type="text" name="Comentarios" placeholder="comentarios">

        <input type="submit" name="registro" value="registro">
    </form>
</body>

</html>

<?php
if (isset($_POST['registro'])) {
    $nombre = $_POST['Nombre'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $comentarios = $_POST['Comentarios'];

    $guardar = "INSERT INTO contactos (nombre, telefono, correo, comentarios) VALUES ('$nombre', '$telefono', '$correo', '$comentarios')";

    $ejecutar = mysqli_query($conexion, $guardar);

    if ($ejecutar) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
}
?>
