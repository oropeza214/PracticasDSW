<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style_formulario.css">
    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="logo" href="#">Colombia<span>.</span></a>
            <ul class="menu-links">
                <span id="close-menu-btn" class="material-symbols-outlined">close</span>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="historia.html">Historia del lugar</a></li>
                <li><a href="lugares.html">Lugares Turísticos</a></li>
                <li><a href="comida.html">Comida Típica</a></li>
                <li><a href="contactos.html">Contactos</a></li>
                <li><a href="formulario.php">Formulario</a></li>
                <li><a href="extras.html">Extras</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
        </nav>
    </header>

    <div class="container">
        <h1 class="titulo">Llena nuestro formulario</h1>
    </div>

    <form action="altas_logica.php" method="post" enctype="multipart/form-data">
        <div class="form-container">
            <div class="form-group">
                <label for="nombre">Nombre(s)</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido-paterno">Apellido Paterno</label>
                <input type="text" id="apellido-paterno" name="apellido-paterno">
            </div>
            <div class="form-group">
                <label for="apellido-materno">Apellido Materno</label>
                <input type="text" id="apellido-materno" name="apellido-materno">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" id="edad" name="edad" min="18" max="60" onkeypress="return isNumber(event)">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="number" id="telefono" name="telefono" onkeypress="return isNumber(event)">
            </div>
            <div class="form-group">
                <label for="genero">Género</label>
                <select id="genero" name="genero" class="form-group input select-css">
                    <option value="" selected></option>
                    <option value="FEMENINO">Femenino</option>
                    <option value="MASCULINO">Masculino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ciudad-actual">Ciudad en la que vives</label>
                <input type="text" id="ciudad-actual" name="ciudad-actual">
            </div>

            <div class="form-group">
                <label for="ciudad_viaje">¿Qué lugar de Colombia te gustaría visitar?</label>
                <select id="ciudad_viaje" name="ciudad_viaje" class="form-group input select-css">
                    <option value=""></option>
                    <option value="CAÑO CRISTALES">Caño Cristales</option>
                    <option value="RESERVA RIO CLARO">Reserva Río Claro</option>
                    <option value="DESIERTO DE LA TATACOA">Desierto de la Tatacoa</option>
                    <option value="COMUNA 13">Comuna 13</option>
                    <option value="PIEDRA DEL PEÑOL Y GUATAPE">Piedra del Peñol y Guatapé</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pregunta-camisa">¿Te gustaría una camisa?</label>
                <select id="pregunta-camisa" name="pregunta-camisa" class="form-group input select-css">
                    <option value="" selected></option>
                    <option value="SI">Si</option>
                    <option value="NO">No</option>
                </select>
            </div>

            <div class="form-group" id="div-talla-camisa" style="display: none;">
                <label for="talla_camisa">Talla de la camisa</label>
                <select id="talla_camisa" name="talla_camisa" class="form-group input select-css">
                    <option value="NINGUNA" selected>Ninguna</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>

            <div class="button-container">
                <input type="submit" id="submit-button" value="Enviar" onclick="return validateForm()"><a href="altas_logica.php" class="button"></a>
            </div>
        </div>

        <script>
            document.getElementById('pregunta-camisa').addEventListener('change', function() {
                var valorSeleccionado = this.value;
                var divTallaCamisa = document.getElementById('div-talla-camisa');

                if (valorSeleccionado === 'SI') {
                    divTallaCamisa.style.display = 'block';
                } else {
                    divTallaCamisa.style.display = 'none';
                }
            });

            function isNumber(event) {
                var charCode = (event.which) ? event.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }

            function validateForm() {
                var name = document.getElementById("nombre").value;
                var lastname = document.getElementById("apellido-paterno").value;
                var motherlastname = document.getElementById("apellido-materno").value;
                // var age = document.getElementById("edad").value;
                var age = parseInt(document.getElementById("edad").value);
                var phone = document.getElementById("telefono").value;
                var gender = document.getElementById("genero").value;
                var city = document.getElementById("ciudad-actual").value;
                var citytravel = document.getElementById("ciudad_viaje").value;
                var shirt = document.getElementById("pregunta-camisa").value;
                var tallaCamisa = document.getElementById("talla_camisa").value;

                if (age < 18 || age > 60) {
                    alert("Tu edad debe ser entre 18 y 60 años.");
                    return false;
                }

                if (name == "" || lastname == "" || motherlastname == "" || age == "" || phone == "" || gender == "" || city == "" || citytravel == "" || shirt == "") {
                    alert("Todos los campos deben estar llenos");
                    return false;
                }

                if (shirt === "SI" && tallaCamisa === "NINGUNA") {
                    alert("Por favor, selecciona una talla para la camisa");
                    return false;
                }
            }
        </script>
    </form>

</body>

</html>