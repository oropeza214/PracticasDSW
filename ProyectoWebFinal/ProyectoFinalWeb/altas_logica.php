<!DOCTYPE html>
<html lang="en">

<head>
    <title>Estatus de la alta del formulario</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        body {
            margin-top: 10vh;
            width: 100%;
            min-height: 100vh;
        }

        h1,
        h2 {
            font: 200% sans-serif;
        }

        input {
            height: 40px;
            width: 170px;
            border-radius: 15px;
            transition: 0.15s;
        }

        input:hover {
            background-color: #A59F9F;
        }

        table {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body align='center'>
    <h1>Estatus de la alta del formulario</h1>
    <?php
    $nombre = strtoupper(isset($_POST['nombre']) ? $_POST['nombre'] : '');
    $apellidoPaterno = strtoupper(isset($_POST['apellido-paterno']) ? $_POST['apellido-paterno'] : '');
    $apellidoMaterno = strtoupper(isset($_POST['apellido-materno']) ? $_POST['apellido-materno'] : '');
    $ciudadActual = strtoupper(isset($_POST['ciudad-actual']) ? $_POST['ciudad-actual'] : '');

    if (empty($nombre) or empty($apellidoPaterno) or empty($apellidoMaterno) or empty($ciudadActual)) {
        echo "<body align='center'><i><Strong>Favor de no dejar campos vacios.</i></Strong></body>";
    } else {

        $conexion = mysqli_connect("localhost", "root", "", "proyectoweb") or
            die("Problemas con la conexión");

        mysqli_query($conexion, "INSERT INTO registros (Nombre, ApePaterno, ApeMaterno, Edad, Telefono, Genero, Ciudad_Actual, Ciudad_Viaje, Talla_Camisa) VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$_REQUEST[edad]', '$_REQUEST[telefono]', '$_REQUEST[genero]', '$ciudadActual', '$_REQUEST[ciudad_viaje]', '$_REQUEST[talla_camisa]')") or die("<center>Problemas en el SELECT" . mysqli_error($conexion) . "<br><br><br><br><form action='index.html' method='post'><input type='submit' value='Volver al inicio'></form></center>");
        mysqli_close($conexion);

        echo "<h3 align ='center'>Se ha efectuado el registro correctamente.</h3>";
    }
    ?>

    <form action="formulario.php" method="post">
        <br><input type="submit" value="Realizar otro formulario">
    </form>

    <form action="index.html" method="post">
        <br><input type="submit" value="Volver al Inicio">
    </form>
</body>

</html>