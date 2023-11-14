// var numero = prompt("Dame un número:");

// function par_impar() {
//     if (numero %2==0) {
//         alert("El número es par.");
//     }else{
//         alert("El número es impar.");
//     }
// }

// par_impar();


// --------------------------------------------------------------



// var HayUnHuracan = true;
// // var HayUnHuracan = false;

// function AvisoDeHuracan(Huracan) {
//     if (Huracan == true) {
//         alert("Hay un huracán.");
//         return Huracan;
//     } else {
//         alert("Esta soleado.");
//         return Huracan;
//     }
// }

// var EstadoActual = AvisoDeHuracan(HayUnHuracan);

// alert(Huracan);


// --------------------------------------------------------------

var tipoOperacion = prompt("Escribe qué tipo de operación te gustaría realizar: \n  suma\n  resta\n  multiplicacion\n  division\n  residuo");
var numeroA = parseFloat(prompt("Ingresa el primer número: "));
var numeroB = parseFloat(prompt("Ingresa el segundo número: "));

function operacionesMatematicas(operacion, a, b) {
    let resultado; // Declaración de 'resultado'

    switch (operacion) { // Uso del parámetro 'operacion'
        case "suma":
            resultado = a + b;
            break;

        case "resta":
            resultado = a - b;
            break;

        case "multiplicacion":
            resultado = a * b;
            break;

        case "division":
            if (b !== 0) {
                resultado = a / b;
            } else {
                alert("Error: No se puede dividir entre cero.");
                return;
            }
            break;

        case "residuo":
            resultado = a % b;
            break;

        default:
            alert("No existe esa opción.");
            return;
    }

    alert("El resultado es: " + resultado);
}

operacionesMatematicas(tipoOperacion, numeroA, numeroB);

