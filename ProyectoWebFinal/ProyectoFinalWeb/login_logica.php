<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login lógica</title>
</head>

<body>

    <?php
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost:8080", "root", "", "proyectoweb") or
        die("Problemas con la conexión");

    // Iniciar sesión
    session_start();

    // Obtener las credenciales del formulario
    $nombre_usuario = mysqli_real_escape_string($conexion, $_POST['nombre_usuario']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

    // Guardar el nombre de usuario en la sesión
    $_SESSION["nombre_usuario"] = $nombre_usuario;

    // Buscar el usuario en la base de datos
    $consulta = "SELECT Usuario FROM usuarios WHERE Usuario = '$nombre_usuario' AND Contrasena = '$contrasena'";
    
    $resultado = mysqli_query($conexion, $consulta);

    // Si se encontró un usuario, iniciar sesión
    if (mysqli_num_rows($resultado) == 1) {
        // echo 'Lograste ingresar';
        header('Location: consultar_todo.php');
    } else {
        // Si no se encontró un usuario, mostrar
        // echo 'No se encontró un usuario';
        echo "<script>
        alert('El nombre de usuario y/o la contraseña es incorrecta. Por favor, intente de nuevo.');
        window.location.href='login.php '; </script>";
        session_destroy();
    }

    mysqli_close($conexion);
    ?>

</body>

</html>