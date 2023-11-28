<?php
session_start();

// Verificación de sesión
if (!isset($_SESSION['nombre_usuario'])) {
    header('Location: ../login.php');
    exit();
}

// Desactivar la caché del navegador
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <link href="tabla" rel="stylesheet" type="text/css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "metropolis", Arial, Helvetica, sans-serif;
        }

        *::-webkit-scrollbar {
            /*Oculta la barra de scroll down/up*/
            display: none;
            /* Para navegadores basados en WebKit, como Chrome o Safari */
        }

        th,
        td {
            padding: 0.4rem !important;
            font-size: 120%;
        }

        img:hover {
            transition: .5s;
            transform: scale(2.5);
            z-index: 10;
        }

        table {
            font-family: "metropolis", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
        }

        h1 {
            margin: 2%;
        }

        body>div {
            box-shadow: 10px 10px 8px #888888;
            border: 2px solid black;
            border-radius: 10px;
            background-color: rgba(229, 231, 233, 0.4);
        }

        input {
            background-color: linear-gradient(45deg, #ff0057, #2196f3);
            height: 40px;
            width: 170px;
            border-radius: 15px;
            transition: 0.15s;
        }

        input:hover {
            background-color: #A59F9F;
        }

        .button-volver {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <title>Lista de productos</title>
</head>

<body>
    <h1 align="center">Lista de registros</h1>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "proyectoweb") or
        die("Problemas con la conexión");
    $sql = "SELECT * FROM registros";
    $resultado = mysqli_query($conexion, $sql);

    ?>


    <div class="container" style="margin-top: 10px;padding: 5px">
        <table id="tablax" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <!-- <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Inventario</th> -->

                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Telefono</th>
                <th>Género</th>
                <th>Ciudad Actual</th>
                <th>Ciudad a Visitar</th>
                <th>Talla de camisa</th>
            </thead>
            <tbody>

                <?php
                while ($cosas = mysqli_fetch_assoc($resultado)) {
                ?>

                    <tr>
                        <td><?php echo $cosas['ID_Registro']; ?></td>
                        <td><?php echo $cosas['Nombre']; ?></td>
                        <td><?php echo $cosas['ApePaterno']; ?></td>
                        <td><?php echo $cosas['ApeMaterno']; ?></td>
                        <td><?php echo $cosas['Edad']; ?></td>
                        <td><?php echo $cosas['Telefono']; ?></td>
                        <td><?php echo $cosas['Genero']; ?></td>
                        <td><?php echo $cosas['Ciudad_Actual']; ?></td>
                        <td><?php echo $cosas['Ciudad_Viaje']; ?></td>
                        <td><?php echo $cosas['Talla_Camisa']; ?></td>
                    </tr>

                <?php
                }

                ?>
            </tbody>
        </table>
        <form class="button-volver" action="index.html" method="post">
            <br><input type="submit" value="Salir">
        </form>
    </div>


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [
                    [10, 25, -1],
                    [10, 25, "All"]
                ],
            });
        });
    </script>

</body>

</html>