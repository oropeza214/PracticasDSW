/*Brandon Josue Oropeza Quiñonez 372*/
var peso_tierra = 9.807;
var peso_marte = 3.71;
var peso_jupiter = 24.79;
var resultado;


var peso = prompt("Ingrese su peso corporal (en kg.).");
var opcion = prompt("Ingrese la opcion del planeta en el que deseas saber tu peso corporal: \n1 - Peso en Marte\n2 - Peso en jupiter");

switch (opcion) {
    case "1":
        resultado = peso * peso_marte / peso_tierra
        alert("Tu peso en marte es de " + resultado + " kg.");
        break;

    case "2":
        resultado = peso * peso_jupiter / peso_tierra
        alert("Tu peso en jupiter es de " + resultado) + " kg.";
        break;

    default:
        alert("No existe esa opción");
        break;
}


// SENTENCIA IF ELSE --------------------------------------

// if (opcion === "1") {
//     resultado = peso * peso_marte / peso_tierra;
//     alert("Tu peso en Marte es de " + resultado + " kg.");
// } else if (opcion === "2") {
//     resultado = peso * peso_jupiter / peso_tierra;
//     alert("Tu peso en Jupiter es de " + resultado + " kg.");
// } else {
//     alert("No existe esa opción");
// }
