// arrays que contienen los nombres de archivos de las imágenes de las maravillas y las respuestas correctas respectivas.
let maravillas = ["chichen-itza.svg", "coliseo.svg", "cristo-redentor.svg", "machu-picchu.svg", "muralla-china.svg", "petra.svg", "taj-mahal.svg"];
let correcta = [1, 0, 2, 1, 2, 0, 1];

// array que almacena las opciones de respuestas para cada maravilla.
let opciones = [];
opciones.push(["Machu Picchu", "Chichen Itza", "Coliseo"]);
opciones.push(["Coliseo", "Petra", "Cristo Redentor"]);
opciones.push(["Muralla China", "Taj Mahal", "Cristo Redentor"]);
opciones.push(["Petra", "Machu Picchu", "Taj Mahal"]);
opciones.push(["Chichen Itza", "Petra", "Muralla China"]);
opciones.push(["Petra", "Machu Picchu", "Chichen Itza"]);
opciones.push(["Coliseo", "Taj Mahal", "Cristo Redentor"]);

// variables que mantienen la posición actual en el juego y la cantidad de respuestas correctas.
let posActual = 0;
let cantidadAcertadas = 0;

// función que inicia el juego, reinicia las variables y muestra la pantalla de juego.
function comenzarJuego() {
    posActual = 0;
    cantidadAcertadas = 0;
    document.getElementById("pantalla-inicial").style.display = "none"; // Oculta la pantalla inicial
    document.getElementById("pantalla-juego").style.display = "block"; // Muestra la pantalla de juego
    cargarMaravilla(); // llama a la función para cargar la primera maravilla
}

// función que carga la maravilla actual y las opciones de respuesta, o termina el juego si todas las maravillas han sido respondidas.
function cargarMaravilla() {
    if (maravillas.length <= posActual) { // comprueba si se han presentado todas las maravillas
        terminarJuego(); // si es así, termina el juego
    } else {
        limpiarOpciones(); // limpia las opciones de respuesta anteriores

        // establece la nueva imagen y opciones de respuesta
        document.getElementById("imgMaravilla").src = "img/" + maravillas[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
    }
}

// función que limpia las clases CSS de las opciones de respuesta, probablemente eliminando cualquier indicador de respuesta correcta/incorrecta del intento anterior.
function limpiarOpciones() {
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";
    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
}

// función que comprueba si la opción seleccionada es correcta e indica visualmente la respuesta.
function comprobarRespuesta(opElegida) {
    if (opElegida == correcta[posActual]) { // si la respuesta es correcta
        document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
        document.getElementById("l" + opElegida).className = "letra letraAcertada";
        cantidadAcertadas++; // incrementa el contador de respuestas correctas
    } else { // si la respuesta es incorrecta
        document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
        document.getElementById("l" + opElegida).className = "letra letraNoAcertada";
        document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
        document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
    }
    posActual++; // avanza a la siguiente maravilla
    setTimeout(cargarMaravilla, 1000); // espera un segundo antes de cargar la siguiente maravilla
}

// función que maneja el final del juego, ocultando y mostrando las pantallas relevantes y presentando las estadísticas del juego.
function terminarJuego() {
    document.getElementById("pantalla-juego").style.display = "none"; // oculta la pantalla de juego
    document.getElementById("pantalla-final").style.display = "block"; // muestra la pantalla final
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas; // muestra el número de respuestas correctas
    document.getElementById("numIncorrectas").innerHTML = maravillas.length - cantidadAcertadas; // muestra el número de respuestas incorrectas
}

// función que restablece el juego a su estado inicial, mostrando la pantalla de inicio y ocultando las demás.
function volverAlInicio() {
    document.getElementById("pantalla-final").style.display = "none"; // oculta la pantalla final
    document.getElementById("pantalla-inicial").style.display = "block"; // muestra la pantalla inicial
    document.getElementById("pantalla-juego").style.display = "none"; // oculta la pantalla de juego
}



