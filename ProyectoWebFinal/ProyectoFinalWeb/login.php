<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Electrónico</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://www.escapadah.com/u/fotografias/m/2022/3/1/f1280x720-1807_133482_5050.jpg');
            /* Cambia 'fondo.jpg' por la ruta correcta a tu imagen de fondo */
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .box {
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            /* Centra el contenido horizontalmente */
        }

        .box h2 {
            margin: 0 0 20px;
            padding: 0;
            font-size: 28px;
        }

        .inputBox {
            position: relative;
            margin-bottom: 30px;
        }

        .inputBox input {
            width: 100%;
            padding: 10px;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid #000;
        }

        .inputBox span {
            position: absolute;
            left: 0;
            bottom: 8px;
            padding: 10px;
            pointer-events: none;
            transition: 0.5s;
        }

        .inputBox input:focus~span,
        .inputBox input:valid~span {
            transform: translateY(-20px);
            font-size: 12px;
            color: #333;
        }

        .boton {
            text-align: center;
            /* Centra el botón horizontalmente */
            margin-top: 20px;
            /* Agrega espacio arriba del botón */
        }

        .boton input[type="submit"] {
            background: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .links {
            text-align: center;
        }

        .links a {
            color: #333;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="box">
        <span class="borderLine"></span>
        <form action="login_logica.php" method="post">
            <h2>Inicia sesión</h2>
            <div class="inputBox">
                <input type="text" id="nombre_usuario" name="nombre_usuario" required="required">
                <span for="nombre_usuario">Nombre de usuario</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" id="contrasena" name="contrasena" required="required">
                <span for="contrasena">Contraseña</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="boton">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>

</html>