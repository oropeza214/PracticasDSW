/*Brandon Josue Oropeza 372*/
// var num = 8;

// if (num < 10) {
//     console.log("El numero es menor a 10");
// }else if(num > 10){
//     console.log("El numero es mayor a 10");
// }else{
//     console.log("El numero es igual a 10");
// }

//----------------------------------------------------------------

// var estacion = prompt("Escribe una estación de minúsculas.");

// switch (estacion) {
//     case "invierno":
//         alert("Todo es frío.");
//         break;

//     case "primavera":
//         alert("Se colorea el mundo.");
//         break;

//     case "verano":
//         alert("Las noches se hacen largas.");
//         break;

//     case "otoño":
//         alert("Donde había color ya no queda nada.");
//         break;

//     default:
//         alert("Eso no es una estación");
//         break;
// }

var num1 = 5;
var num2 = 8;

if (num1 <= num2) {
    console.log(num1 + " no es mayor que " + num2 + ". ");
    if (num2 >= 0) {
        console.log(num2 + " es positivo. ");
        if (++num1 < num2) {
            console.log("Incrementar uno en " + num1 + ", no lo hace mayor que " + num2);
        }
    }
}