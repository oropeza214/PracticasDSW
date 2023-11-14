function imprimir() {

    var calf1 = parseInt(document.getElementById("calificacion1").value);
    var calf2 = parseInt(document.getElementById("calificacion2").value);
    var calf3 = parseInt(document.getElementById("calificacion3").value);
    var calf4 = parseInt(document.getElementById("calificacion4").value);
    var calf5 = parseInt(document.getElementById("calificacion5").value);
    var calf6 = parseInt(document.getElementById("calificacion6").value);
    var calf7 = parseInt(document.getElementById("calificacion7").value);
    var calf8 = parseInt(document.getElementById("calificacion8").value);

    if (calf1 == "" || calf2 == "" || calf3 == "" || calf4 == "" || calf5 == "" || calf6 == "" || calf7 == "" || calf8 == "") {
        alert("Por favor, llena todos los campos de calificación.");

        if (calf1 == "") {
            document.getElementById("calificacion1").focus();
        } else if (calf2 == "") {
            document.getElementById("calificacion2").focus();
        } else if (calf3 == "") {
            document.getElementById("calificacion3").focus();
        } else if (calf4 == "") {
            document.getElementById("calificacion4").focus();
        } else if (calf5 == "") {
            document.getElementById("calificacion5").focus();
        } else if (calf6 == "") {
            document.getElementById("calificacion6").focus();
        } else if (calf7 == "") {
            document.getElementById("calificacion7").focus();
        } else if (calf8 == "") {
            document.getElementById("calificacion8").focus();
        }
    } else {

        var promedio = (calf1 + calf2 + calf3 + calf4 + calf5 + calf6 + calf7 + calf8) / 8;


        var mensaje = "Calificaciones:\n" +
            "Español: " + calf1 + "\n" +
            "Matemáticas: " + calf2 + "\n" +
            "Historia: " + calf3 + "\n" +
            "Inglés: " + calf4 + "\n" +
            "Geografía: " + calf5 + "\n" +
            "Física: " + calf6 + "\n" +
            "Química: " + calf7 + "\n" +
            "Computación: " + calf8 + "\n" +
            "Promedio: " + promedio.toFixed(2);

            if (promedio >= 85) {
                mensaje += "\nEstado: Exento de ordinario";
            } else {
                mensaje += "\nEstado: Debe presentar examen ordinario";
            }
    
            alert(mensaje);
    }
}
